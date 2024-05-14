<div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item " data-item="dashboard">
                        <a class="nav-item-hold" href="/dashboard">
                            <i class="nav-icon i-Bar-Chart"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item active" data-item="uikits">
                        <a class="nav-item-hold" href="/dashboard/dataLapor">
                            <i class="nav-icon i-Library"></i>
                            <span class="nav-text">Master Data</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
                <header>
                    <div class="logo">
                        <img src="./assets/img/logo.png" alt="">
                    </div>
                </header>
                <!-- Submenu Dashboards -->
                <div class="submenu-area" data-parent="uikits">
                    <header>
                        <h6>Master Data</h6>
                        <p>Master Data WBS</p>
                    </header>
                    <ul class="childNav">
                        <li class="nav-item">
                            <a href="#dataLapor">
                                <i class="nav-icon i-Bell1"></i>
                                <span class="item-name">Data Pengaduan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>