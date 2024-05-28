<header class="header">
    <div style="width:100%;">
        <div class="mobile-header">
            <div style="display: flex; align-items:center;">
                <button id="sidebarToggleBtn" onclick="openNav()" class="btn btn-primary d-md-none" style="z-index: 1000;
                position: relative; border:none;font-size:1.1rem;">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="topbar-right-side-mobile">
                <div class="topbar-right-side-dropdown">
                    <div class="dropdown">
                        <button class="dropdown-btn top-dropdown filter-dropdown">
                            Newest
                            <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">2020</a></li>
                            <li><a href="#">2021</a></li>
                            <li><a href="#">2022</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn top-dropdown" id="bellDropdown">
                            <i class="fa-regular fa-bell"></i>
                        </button>
                        <ul class="dropdown-menu" id="bellDropdownMenu">
                            <li><a href="#">Recent</a></li>
                            <li><a href="#">Urgent</a></li>
                            <li><a href="#">Spam</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn top-dropdown" id="countryDropdown" tabindex="3">
                            <i class="fa-regular fa-flag"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Country 1</a></li>
                            <li><a href="#">Country 2</a></li>
                            <li><a href="#">Country 3</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="dropdown-btn top-dropdown rounded-circle" id="profileDropdown" tabindex="4">
                            <!-- <i class="fa-regular fa- "></i> -->
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Login In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; margin-top:-15px;">
            <h2 class="top-heading">Contacts</h2>
            <span class="time">12:15 PM at 26th October</span>
        </div>
    </div>
    <div class="topbar-right-side">
        <div class="topbar-right-side-input">
            <div class="search_bar_container">
                <form class="search">
                    <input type="search" placeholder="Search...">
                    <button type="submit" id="search">Search</button>
                </form>
            </div>
        </div>
        <div class="topbar-right-side-dropdown">
            <div class="dropdown">
                <button class="dropdown-btn top-dropdown filter-dropdown">
                    Newest
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">2020</a></li>
                    <li><a href="#">2021</a></li>
                    <li><a href="#">2022</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="dropdown-btn top-dropdown" id="bellDropdown">
                    <i class="fa-regular fa-bell"></i>
                </button>
                <ul class="dropdown-menu" id="bellDropdownMenu">
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Urgent</a></li>
                    <li><a href="#">Spam</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="dropdown-btn top-dropdown" id="countryDropdown" tabindex="3">
                    <i class="fa-regular fa-flag"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Country 1</a></li>
                    <li><a href="#">Country 2</a></li>
                    <li><a href="#">Country 3</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="dropdown-btn top-dropdown rounded-circle" id="profileDropdown" tabindex="4">
                    <!-- <i class="fa-regular fa- "></i> -->
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login In</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>