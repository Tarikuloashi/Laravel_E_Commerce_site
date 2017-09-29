<div class="navbar-header">
                
                <a class="navbar-brand" href="{{url('/dashboard')}}"><i class="fa fa-fort-awesome fa-2x"></i> Admin Panal</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               <!-- Message bar -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-2x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>No Messages</strong>
                            </a>
                        </li>
                    </ul>
                    
                </li>
                 <!-- Message bar -->
                  <!-- task bar -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-2x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>No Tasks </strong>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- task bar -->
                <!-- Alert bar -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-2x"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>No Alerts Here</strong>
                                
                            </a>
                        </li>
                    </ul>
                 </li>
                <!-- Alert bar -->
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-secret fa-3x"></i>  {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-lg"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-lg"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>