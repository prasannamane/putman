<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" height="100px" src="<?=base_url()?>assets/image/admin.png">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"><?=$this->session->userdata('name')?></span>
                                <span class="text-muted text-xs block"><?=$this->session->userdata('role')?><b class="caret"></b></span>
                            </a>
                             <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="<?=base_url('index.php/Home/profile')?>">Profile</a></li>
                                <li><a class="dropdown-item" href="<?=base_url('index.php/Home/edit_password')?>">Change Password</a></li>
                            <!--     <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li> -->
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?=base_url('index.php/Home/logout')?>">Logout</a></li>
                            </ul> 
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    
                  

                     <!-- User Menu -->
<!--                      <?=base_url('index.php/Home/user')?> -->    
                    <!-- <?=$user?> -->
                    <li class="">
                        <a href="#" onclick="showpage(1)">
                            <i class="fa fa-th-large"></i> 
                            <span class="nav-label">Employees List</span> 
                            
                        </a>
                    </li>
                    <li class="">
                        <a href="#" onclick="showpage(2)">
                            <i class="fa fa-th-large"></i> 
                            <span class="nav-label">Employees Add</span> 
                            
                        </a>
                    </li>
                    <li class="">
                        <a href="#" onclick="showpage(3)">
                            <i class="fa fa-th-large"></i> 
                            <span class="nav-label">Department List</span> 
                            
                        </a>
                    </li>
                    <li class="">
                        <a href="#" onclick="showpage(4)">
                            <i class="fa fa-th-large"></i> 
                            <span class="nav-label">Department Add</span> 
                            
                        </a>
                    </li>

                    
                </ul>

            </div>
        </nav>

         
        <div id="page-wrapper" class="gray-bg">