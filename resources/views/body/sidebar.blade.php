<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->

        <div id="sidebar-menu">

            <ul id="side-menu">

                <li>
                    <a href="{{ url('/') }}" >
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>


                <!--========= Start employee manage ==================-->


                <li>
                    <a href="#employee" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Book Store </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="employee">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all-book') }}">All Book</a>
                            </li>
                            <li>
                                <a href="{{ route('add-book') }}">Add Book</a>
                            </li>
                        
                        </ul>
                    </div>
                </li>
             
                <!--========= end employee manage ==================-->


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
