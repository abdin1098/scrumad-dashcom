<header class="mb-2">
    <button id="sidebarToggleBtn" onclick="openNav()" class="btn btn-primary d-md-none" style="z-index: 1000;
                position: relative;">
        <i class="fas fa-bars"></i>
    </button>
    <div class="row">
            <div>
                <h2 class="top_heading">Contacts</h2>
            </div>
            <div class="time">
                <p>12:15 PM at 26th October</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row justify-content-start dropdowns-row">
                <div class="col-lg-4 col-md-4">
                    <div class="search_bar_container">
                        <form>
                            <input type="search" placeholder="Search...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="dropdown">
                        <button class="dropdown-btn" id="yearDropdown" tabindex="1">
                            Newest
                            <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu" id="yearDropdownMenu">
                            <li><a href="#">2020</a></li>
                            <li><a href="#">2021</a></li>
                            <li><a href="#">2022</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="dropdown">
                        <button  class="dropdown-btn" id="bellDropdown" tabindex="2">
                            <i class="fa-regular fa-bell"></i>
                        </button>
                        <ul class="dropdown-menu" id="bellDropdownMenu">
                            <li><a href="#">Recent</a></li>
                            <li><a href="#">Urgent</a></li>
                            <li><a href="#">Spam</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="dropdown">
                        <button style="width: 3em !important;" class="dropdown-btn" id="countryDropdown" tabindex="3">
                            <i class="fa-regular fa-flag"></i>
                        </button>
                        <ul class="dropdown-menu" id="countryDropdownMenu">
                            <li><a href="#">Country 1</a></li>
                            <li><a href="#">Country 2</a></li>
                            <li><a href="#">Country 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <div class="dropdown">
                        <button style="border-radius: 50%; width: 3em !important;" class="dropdown-btn" id="countryDropdown" tabindex="3">
                            <!-- <i class="fa-regular fa- "></i> -->
                        </button>
                        <ul class="dropdown-menu" id="countryDropdownMenu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Login In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Dummy header data -->

</header>