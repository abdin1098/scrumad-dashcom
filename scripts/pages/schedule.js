document.addEventListener('DOMContentLoaded', () => {
    const currentDates = document.querySelectorAll('.current-date');
    const daysTag = document.querySelector('.days');
    const prevNextIcon = document.querySelectorAll('.icons .icon');
    const topNavLinks = document.querySelectorAll('.topnav a');

    let date = new Date();
    let currYear = date.getFullYear();
    let currMonth = date.getMonth();
    let currDate = date.getDate();
    let activeView = 'days';
    var yeartabActive = 0;

    const months = [
        'January', 'February', 'March', 'April', 'May', 'June', 'July',
        'August', 'September', 'October', 'November', 'December'
    ];

    const updateActiveTab = (view) => {
        topNavLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${view}`) {
                link.classList.add('active');
            }
        });
    };

    const renderYearView = () => {
        const weekdays = document.getElementById('weekday');
        weekdays.style.display = 'none';

        const yearsToShow = 200;
        const startYear = currYear - Math.floor(yearsToShow / 2);

        let yearsGrid = '';
        let activeYearElement = null;

        for (let i = 0; i < yearsToShow; i++) {
            const year = startYear + i;
            const isActive = currYear === year ? 'active-year' : '';
            yearsGrid += `<li class="year-element ${isActive}" data-year="${year}">${year}</li>`;

            if (isActive) {
                activeYearElement = year;
            }
        }

        daysTag.innerHTML = `
            <ul class="years-grid" style="display: grid; list-style: none; grid-template-columns: repeat(4, 1fr); gap: 10px; width: 400px; height: 200px; overflow-y: auto;">
                ${yearsGrid}
            </ul>
        `;
        currentDates.forEach(currentDate => {
            currentDate.innerText = `${months[currMonth]} ${currDate}, ${currYear}`;
        });

        document.querySelectorAll('.year-element').forEach(element => {
            element.addEventListener('click', handleYearClick);
        });

        const activeYear1 = document.querySelector('.year-element.active-year');
        if (activeYear1 && yeartabActive == 1) {
            activeYear1.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
            activeYear1.scrollIntoView({ block: 'center' });
        }

        updateActiveTab('year');
    };


    const handleYearClick = (event) => {
        const selectedYear = parseInt(event.target.getAttribute('data-year'));
        currYear = selectedYear;
        activeView = 'months';
        renderMonthView();
        // updateActiveTab('months');
    };

    const renderMonthView = () => {
        const weekdays = document.getElementById('weekday');
        weekdays.style.display = 'none';

        let monthsGrid = '';

        for (let i = 0; i < 12; i++) {
            let isActive = (currMonth === i) ? 'active-month' : '';
            monthsGrid += `<li class="month-element ${isActive}" data-month="${i}">${months[i]}</li>`;
        }

        daysTag.innerHTML = `<ul class="months-grid" style="display: grid; list-style: none; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(3, 1fr); gap: 10px;">${monthsGrid}</ul>`;
        currentDates.forEach(currentDate => {
            currentDate.innerText = `${months[currMonth]} ${currDate}, ${currYear}`;
        });

        const monthElements = document.querySelectorAll('.month-element');
        monthElements.forEach(element => {
            element.addEventListener('click', handleMonthClick);
        });

        updateActiveTab('months');
        // toggleScrollButtons();
    };

    const handleMonthClick = (event) => {
        const selectedMonth = parseInt(event.target.getAttribute('data-month'));
        currMonth = selectedMonth;
        activeView = 'days';
        renderCalendar();
        // updateActiveTab('days');
    };

    const renderCalendar = () => {

        const weekdays = document.getElementById('weekday');
        weekdays.style.display = 'flex';
        const firstDayOfMonth = new Date(currYear, currMonth, 1).getDay();
        const lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
        const lastDayOfMonth = new Date(currYear, currMonth + 1, 0).getDay();
        const lastDateOfLastMonth = new Date(currYear, currMonth, 0).getDate();

        let daysList = '';

        if (firstDayOfMonth > 0) {
            for (let i = firstDayOfMonth; i > 0; i--) {
                daysList += `<li class="inactive">${lastDateOfLastMonth - i + 1}</li>`;
            }
        }
        for (let i = 1; i <= lastDateOfMonth; i++) {
            let isToday = (i === currDate) ? 'active' : '';
            daysList += `<li class="calDateElement ${isToday}">${i}</li>`;
        }
        const remainingDaysInWeek = 5 - lastDayOfMonth;

        if (remainingDaysInWeek >= 0) {
            for (let i = 1; i <= remainingDaysInWeek + 1; i++) {
                daysList += `<li class="inactive">${i}</li>`;
            }
        }
        if (activeView === 'days') {
            currentDates.forEach(currentDate => {
                currentDate.innerText = `${months[currMonth]} ${currDate}, ${currYear}`;
            });
        }
        daysTag.innerHTML = daysList;

        document.querySelectorAll('.calDateElement').forEach(day => {
            day.addEventListener('click', handleDayClick);
        });
        // toggleScrollButtons();

        updateActiveTab('days');
    };

    const handleDayClick = (event) => {
        const selectedDay = parseInt(event.target.innerText, 10);
        currDate = selectedDay;

        document.querySelectorAll('.calDateElement').forEach(day => {
            day.classList.remove('active');
        });
        event.target.classList.add('active');
        currentDates.forEach(currentDate => {
            currentDate.innerText = `${months[currMonth]} ${currDate}, ${currYear}`;
        });
    };

    prevNextIcon.forEach(icon => {
        icon.addEventListener('click', () => {
            if (activeView === 'days') {
                currDate = icon.id === 'prev' ? currDate - 1 : currDate + 1;

                if (currDate < 1) {
                    currMonth--;
                    if (currMonth < 0) {
                        currMonth = 11;
                        currYear--;
                    }
                    currDate = new Date(currYear, currMonth + 1, 0).getDate();
                } else {
                    const lastDateOfCurrentMonth = new Date(currYear, currMonth + 1, 0).getDate();
                    if (currDate > lastDateOfCurrentMonth) {
                        currMonth++;
                        if (currMonth > 11) {
                            currMonth = 0;
                            currYear++;
                        }
                        currDate = 1;
                    }
                }
                renderCalendar();
            } else if (activeView === 'months') {
                currMonth = icon.id === 'prev' ? currMonth - 1 : currMonth + 1;

                if (currMonth < 0) {
                    currMonth = 11;
                    currYear--;
                    currDate = 1;
                } else if (currMonth > 11) {
                    currMonth = 0;
                    currYear++;
                    currDate = 1;
                }

                renderMonthView();
            } else if (activeView === 'year') {
                yeartabActive = 0;
                currYear = icon.id === 'prev' ? currYear - 1 : currYear + 1;
                renderYearView();
            }
        });
    });

    topNavLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            topNavLinks.forEach(navLink => navLink.classList.remove('active'));
            link.classList.add('active');

            if (link.getAttribute('href') === '#days') {
                activeView = 'days';
                renderCalendar();
            } else if (link.getAttribute('href') === '#months') {
                activeView = 'months';
                renderMonthView();
            } else if (link.getAttribute('href') === '#year') {
                activeView = 'year';
                yeartabActive = 1;
                renderYearView();
            }
        });
    });

    renderCalendar();
});
document.addEventListener('DOMContentLoaded', () => {
    const addTaskButton = document.querySelector('.btn-appointment');
    const taskModal = document.getElementById('taskModal');
    const closeModalButton = taskModal.querySelector('.close');
    const taskForm = document.getElementById('taskForm');
    
    addTaskButton.addEventListener('click', () => {
        taskModal.style.display = 'flex';
    });

    closeModalButton.addEventListener('click', () => {
        taskModal.style.display = 'none';
        taskForm.reset(); 
    });

    window.addEventListener('click', (event) => {
        if (event.target === taskModal) {
            taskModal.style.display = 'none';
            taskForm.reset(); 
        }
    });

    taskForm.addEventListener('submit', (event) => {
        event.preventDefault();
        
        const taskName = taskForm.taskName.value;
        const taskDescription = taskForm.taskDescription.value;
        
        console.log('Task Name:', taskName);
        console.log('Task Description:', taskDescription);
        taskModal.style.display = 'none';
        taskForm.reset();
    });
});
