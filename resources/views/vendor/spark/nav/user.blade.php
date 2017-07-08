<!-- NavBar For Authenticated Users -->
<spark-navbar :user="user" :teams="teams" :current-team="currentTeam" :has-unread-notifications="hasUnreadNotifications" :has-unread-announcements="hasUnreadAnnouncements" inline-template>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="" v-if="user">
            <div>
                <!-- Branding Image -->
                @include('spark::nav.brand')
            </div>
            <!-- Sidebar toggle button-->
            <span>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw ti-menu"></i>
                </a>
            </span>
            <div id="spark-navbar">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @includeIf('spark::nav.user-left')
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    @includeIf('spark::nav.user-right')
                    <!-- Notifications -->
                    <li>
                        <a @click="showNotifications" class="has-activity-indicator">
                            <div class="navbar-icon">
                                <i class="activity-indicator" v-if="hasUnreadNotifications || hasUnreadAnnouncements"></i>
                                <i class="icon fa fa-bell"></i>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown">
                        <!-- User Photo / Name -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img :src="user.photo_url" class="spark-nav-profile-photo m-r-xs">
                            <div class="riot">
                                <div>
                                    <span class="user_name_max">@{{user.name}}</span>
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <!-- Impersonation -->
                            @if (session('spark:impersonator'))
                            <li class="dropdown-header">Impersonation</li>
                            <!-- Stop Impersonating -->
                            <li>
                                <a href="/spark/kiosk/users/stop-impersonating">
                                    <i class="fa fa-fw fa-btn fa-user-secret"></i>Back To My Account
                                </a>
                            </li>
                            <li class="divider"></li>
                            @endif
                            <!-- Developer -->
                            @if (Spark::developer(Auth::user()->email)) @include('spark::nav.developer') @endif
                            <!-- Subscription Reminders -->
                            @include('spark::nav.subscriptions') @if (Spark::hasSupportAddress())
                            <!-- Support -->
                            @include('spark::nav.support') @endif
                            <!-- Logout -->
                            <li>
                                <a href="/logout">
                                    <i class="fa fa-fw fa-btn fa-sign-out"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</spark-navbar>
