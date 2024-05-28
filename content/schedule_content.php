<div style="display: flex; flex-direction: row">
    <div style="flex-direction: column;">
        <div class="card">
            <div>
                <div class="header-list">
                    <div class="name">
                        <h3>Schedule Tasks</h3>
                    </div>
                    <div class="ellipsis">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                </div>

                <div class="calendar">
                    <header class="calendar-header">
                        <i class="fa-sharp fa-solid fa-calendar" style="position: relative;"><span class="calender-icon-inner-text">May<br>7</span></i>
                        <p class="current-date"></p>
                        <div class="icons">
                            <span id="prev" class="icon"><i class="fas fa-chevron-left"></i></span>
                            <span id="next" class="icon"><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </header>

                    <div class="topnav">
                        <a class="active" href="#days">Days</a>
                        <a href="#months">Months</a>
                        <a href="#year">Year</a>
                    </div>
                    <div class="calander-content">
                        <ul class="weekdays" id="weekday">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                    <div class="button">
                        <button class="btn-appointment">
                            <i class="fa-solid fa-plus"></i>
                            Add Task
                        </button>
                        <button class="btn-appointment">
                            <i class="fa-solid fa-plus"></i>
                            Add Category
                        </button>
                        <div>
                            <div id="taskModal" class="modal">
                                <div class="modal-content">
                                    <span class="close"> x</span>
                                    <h2 style="   margin-top: -0.5em; float: left;">Add Task</h2>
                                    <form id="taskForm">
                                        <div class="form-group">
                                            <label id="task" for="taskName">Task Name:</label>
                                            <input type="text" id="taskName" name="taskName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="taskDescription">Description:</label>
                                            <textarea id="taskDescription" name="taskDescription" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="startTime">Start Time:</label>
                                            <input type="time" id="startTime" name="startTime">
                                        </div>
                                        <div class="form-group">
                                            <label for="endTime">End Time:</label>
                                            <input type="time" id="endTime" name="endTime">
                                        </div>
                                        <button id="pop-up" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card1">
            <div class="header-list">
                <div class="name">
                    <h3>Todays Task</h3>
                </div>
            </div>


            <div class="inside-card">

                <div>
                    <p class="para">webiste develpmeny and converting into HTML<br> and CSS. USer experiance testing.</p>
                    <div class="img-schedule">
                        <img class="circle-image1" src="img/sunset.jpg" alt="Customer Image">
                        <!-- <img class="blank-image" src="https://via.placeholder.com/40x40/FFFFFF/000000?text= " alt="Placeholder Image" /> -->

                    </div>
                    <div class="progress-bar" style="border-radius:10px">
                        <div class="bar" style="height:5px;width:50%"></div>
                    </div>
                </div>
                <div class="info">
                    <span class="paper"><i class="fa-solid fa-paperclip" style="margin-right: 0.5em;"></i>2</span>
                    <span class="check"><i class="fa-regular fa-square-check" style="margin-right: 0.5em;"></i>4/6</span>
                    <span class="status"><i class="fa-regular fa-clock" style="margin-right: 0.5em;"></i>Done</span>
                </div>
            </div>
            <div class="inside-card">
                <div>
                    <p class="para">preview publishing and recreate elements and review the new layouts.</p>
                    <div class="img-schedule">
                        <img class="circle-image1" src="img/sunset.jpg" alt="Customer Image">
                        <img class="circle-image1" src="img/tree.jpg" alt="Customer Image" style="z-index: 2;">
                        <img class="circle-image2" src="img/sunset.jpg" alt="Customer Image">

                    </div>
                    <div class="progress-bar1" style="border-radius:10px">
                        <div class="bar1" style="height:5px;width:50%"></div>
                    </div>
                </div>
                <div class="info">
                    <span class="paper"><i class="fa-solid fa-paperclip" style="margin-right: 0.5em;"></i>6</span>
                    <span class="check"><i class="fa-regular fa-square-check" style="margin-right: 0.5em;"></i>6/8</span>
                    <span class="status1"><i class="fa-regular fa-clock" style="margin-right: 0.5em;"></i>5 days left</span>
                </div>
            </div>

        </div>
    </div>

    <div class="card" style="display: flex; flex-direction:column; margin-left:2em; width: max-content;">
        <div>
            <div class="header-list">
                <div class="name">
                    <h3>Timeline</h3>
                </div>
            </div>
            <div class="topnav" style="margin-left:33em;">
                <a class="active" href="#days">Days</a>
                <a href="#months">Months</a>
                <a href="#year">Year</a>
            </div>
            <div>
                <p class="current-date" style="color: black; float:left;"></p>

            </div>
        </div>
        <div class="tym">
            <span class="oftym">6:00AM</span>
            <hr>
        </div>
        <div class="event">
            <div class="box1">
                <span class="vl"></span>
                <div class="routine-morning">
                    <p class="routine">Morning Routine</p>
                    <p class="morning-time">06:00AM - 06:30AM</p>
                </div>
            </div>
            <div class="tym2">
                <span class="oftym2">6:00AM</span>
                <hr>
            </div>
            <div class="event">
                <div class="box2">
                    <span class="vl2"></span>
                    <div class="routine-morning2">
                        <p class="routine2">Weekly Planing</p>
                        <p class="morning-time2">06:00AM - 06:30AM</p>
                    </div>
                </div>
                <div class="tym3">
                    <span class="oftym3">6:00AM</span>
                    <hr>
                </div>
                <div class="event">
                    <div class="box3">
                        <span class="vl3"></span>
                        <div class="routine-morning3">
                            <p class="routine3">Bussiness Calls</p>
                            <p class="morning-time3">06:00AM - 06:30AM</p>
                            <div class="img-schedule1">
                                <img class="circle-image11" src="img/logo3.png" alt="Customer Image">
                                <img class="circle-image22" src="img/logo2.png" alt="Customer Image">
                                <img class="circle-image33" src="img/logo4.png" alt="Customer Image">
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="tym3">
                        <span class="oftym3">6:00AM</span>
                        <hr>
                    </div>
                    <br><br>
                
                <div class="event">
                    <div class="box4">
                        <span class="vl4"></span>
                        <div class="routine-morning4">
                            <p class="routine4">Marketing Team Meating</p>
                            <p class="morning-time4">06:00AM - 06:30AM</p>
                        </div>
                    </div>
                    <br><br>
               
                <div class="event">
                    <div class="box5">
                        <span class="vl5"></span>
                        <div class="routine-morning5">
                            <p class="routine5">Creating new design layouts</p>
                            <p class="morning-time55">- inpiration research</p>
                            <p class="morning-time55">- creating grid based layout</p>
                            <p class="morning-time55">- colours and typography</p>
                            <p class="morning-time55">- brand logomark</p>
                            <p class="morning-time5">10:45AM - 12:30PM</p>
                        </div>
                    </div>
                <div class="event">
                    <div class="box6">
                        <span class="vl6"></span>
                        <div class="routine-morning6">
                            <p class="routine6">Design Meeting</p>
                            <p class="morning-time6">12:50AM - 12:30PM</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>