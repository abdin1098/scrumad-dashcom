
const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');
const sidebar = document.querySelector('.sidebar');
const closebtn = document.querySelector('.closebtn');

function openNav() {
    sidebar.style.display = 'block';
    sidebarToggleBtn.style.display = 'none';
    closebtn.style.display = 'block';
}

function closeNav() {
    sidebar.style.display = 'none';
    sidebarToggleBtn.style.display = 'block';
    closebtn.style.display = 'none';
}