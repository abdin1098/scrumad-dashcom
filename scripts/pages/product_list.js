document.addEventListener('DOMContentLoaded', function() {
    const totalPages = 10;
    let currentPage = 1;

    function updatePagination() {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

        let startPage = Math.max(1, currentPage - 1);
        let endPage = Math.min(totalPages, startPage + 2);

        if (endPage - startPage < 2) {
            startPage = Math.max(1, endPage - 2);
        }

        pagination.innerHTML += `<button id="firstPage"><i class="fas fa-arrow-left-to-line"></i></button>`;

        if (startPage > 1) {
            pagination.innerHTML += `<button id="prevPage"><i class="fas fa-arrow-left"></i></button>`;
            if (startPage > 2) {
                pagination.innerHTML += `<span class="ellipsis"><i class="fas fa-ellipsis"></i></span>`;
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            pagination.innerHTML += `<button class="${i === currentPage ? 'active' : ''}">${i}</button>`;
        }

        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                pagination.innerHTML += `<span class="ellipsis"><i class="fas fa-ellipsis"></i></span>`;
            }
            pagination.innerHTML += `<button id="nextPage"><i class="fas fa-arrow-right"></i></button>`;
            pagination.innerHTML += `<button id="lastPage"><i class="fas fa-arrow-right-to-line"></i></button>`;
        } else if (startPage === 1 && totalPages === 1) {
            pagination.innerHTML += `<button id="nextPage"><i class="fas fa-arrow-right"></i></button>`;
        }
    }

    updatePagination();

    document.getElementById('pagination').addEventListener('click', function(event) {
        if (event.target.tagName === 'BUTTON') {
            const buttonId = event.target.id;
            if (buttonId === 'firstPage') {
                currentPage = 1;
            } else if (buttonId === 'prevPage') {
                currentPage = Math.max(1, currentPage - 1);
            } else if (buttonId === 'nextPage') {
                currentPage = Math.min(totalPages, currentPage + 1);
            } else if (buttonId === 'lastPage') {
                currentPage = totalPages;
            } else {
                const pageNumber = parseInt(event.target.textContent);
                if (!isNaN(pageNumber)) {
                    currentPage = pageNumber;
                }
            }

            updatePagination();
        }
    });
});