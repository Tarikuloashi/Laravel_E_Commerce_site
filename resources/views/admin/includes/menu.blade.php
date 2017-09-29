 <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- input-group -->
                        </li>
                        <li>
                            <a href="{{url('/dashboard')}}"><i class="fa fa-optin-monster fa-2x"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-empire fa-2x"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/category/add')}}"><i class="fa fa-edit fa-lg"></i> Add Category</a>
                                </li>
                                <li>
                                    <a href="{{url('/category/manage')}}"><i class="fa fa-wrench fa-lg"></i> Manage Category</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-first-order fa-2x"></i> Menufacturer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/menufacturer/add')}}"><i class="fa fa-edit fa-lg"></i> Add Menufacturer</a>
                                </li>
                                <li>
                                    <a href="{{url('/menufacturer/manage')}}"><i class="fa fa-wrench fa-lg"></i> Manage Menufacturer</a>
                                </li>
                            </ul>
                            
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-2x"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/product/add')}}"><i class="fa fa-edit fa-lg"></i> Add Product</a>
                                </li>
                                <li>
                                    <a href="{{url('/product/manage')}}"><i class="fa fa-wrench fa-lg"></i> Manage Product</a>
                                </li>
                            </ul>
                            
                        </li>

                       </ul>
                </div>