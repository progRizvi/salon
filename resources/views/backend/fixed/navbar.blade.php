<div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a href="#" class="d-lg-none app-color-text" onclick="showSideNavAction(true)">
            <i class="la la-navicon la-2x"></i>
        </a>
        <a href="#" class="d-lg-none app-color-text" onclick="showSideNavAction(false)">
            <i class="la la-close la-2x"></i>
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-dropdown-icon" href="#" id="navbar-notification-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ">
                    <i class="la la-bell la-2x"></i>
                    <span class="badge badge-danger badge-notify">0</span>
                </a>
                <div class="navbar-notification-container dropdown-menu dropdown-menu-right animated bounceInDown">
                    <div class="ticker"></div>
                    <p class="text-left p-2 mb-0">Notificatiion</p>
                    <div class="notification">
                        <a href="#"
                            class="list-group-item justify-content-between align-items-center list-group-item-primary notification-list">
                            <div class="d-flex">
                                <div class="image-notification mr-3">
                                    <img src="#"
                                        class="img-fluid rounded-circle" alt="quixote" width="40">
                                </div>
                                <p class="m-0">
                                    <span class="font-weight-bold">Quixote</span> has booked your property
                                    <br>
                                    <small class="small">{{ now()->toDateString() }}</small>
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-divider m-0"></div>

                    <div class="text-center p-2" >
                        You Have No Notifications
                    </div>
                    <div class="dropdown-divider m-0"></div>
                    <div class="text-center py-2">
                        <a href="#" class="text-center">
                            View All
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hide-dropdown-icon" href="#" id="navbar-profile-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    onclick="showSideNavAction(false)">
                    <img src="publicPath + '/uploads/profile/' + profile.avatar" alt class="rounded-circle avatar" />
                </a>
                <div class="dropdown-menu dropdown-menu-right animated bounceInDown profile-dropdown border-0 p-0"
                    aria-labelledby="navbar-profile-dropdown">
                    <div class="ticker"></div>
                    <img src="publicPath + '/uploads/profile/' + profile.avatar" alt
                        class="rounded-circle avatar-large" />
                    <div class="user-name">
                        <div>Rizvi Ahmed</div>
                    </div>
                    <div class="dropdown-divider m-0"></div>
                    <a href="publicPath + '/myprofile'" class="dropdown-item d-flex align-items-center p-2">
                        <i class="la la-user la-2x pr-3"></i>
                        myprofile
                    </a>
                    <a href="publicPath + '/logout'" class="dropdown-item d-flex align-items-center p-2">
                        <i class="la la-sign-out la-2x pr-3"></i>
                        logout
                    </a>
                </div>
            </li>
        </ul>
        {{-- side-nav-animate-show side-nav-animate-hide --}}
        <div class="side-nav side-nav-animate-show">
            <ul>
                <li>
                    <a href="publicPath + '/dashboard'" class="app-color-text">
                        <i class="la la-desktop la-2x"></i>
                        dashboard
                    </a>
                </li>
                <li>
                    <a href="publicPath + '/services'" class="app-color-text">
                        <i class="la la-globe la-2x"></i>
                        services
                    </a>
                </li>
                <li>
                    <a href="publicPath + '/bookings'" class="app-color-text">
                        <i class="la la-credit-card la-2x"></i>
                        bookings
                    </a>
                </li>
                <li>
                    <a href="publicPath + '/clients'" class="app-color-text">
                        <i class="la la-users la-2x"></i>
                        clients
                    </a>
                </li>
                <li>
                    <a href="publicPath + '/reports'" class="app-color-text">
                        <i class="la la-pie-chart la-2x"></i>
                        reports
                    </a>
                </li>
                <li>
                    <a href="publicPath + '/settings'" class="app-color-text">
                        <i class="la la-gear la-2x"></i>
                        settings
                    </a>
                </li>
            </ul>
        </div>
        {{-- :class="{ 'd-none': !showSideNav }" @click.prevent="showSideNavAction(false)" --}}
        <div class="side-nav-close" >
        </div>
    </nav>
</div>



<script>
    const showSideNav = ""

    const showSideNavAction = (value) => {
        if (value === false && showSideNav == '') {
            showSideNav = '';
        } else {
            showSideNav = value;
        }
    }
</script>
