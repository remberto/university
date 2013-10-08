<!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="index.html">
                        <img src="/assets/img/logo.png" alt="logo">
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN HORIZANTAL MENU -->
                    <div class="navbar hor-menu hidden-phone hidden-tablet">
                        <div class="navbar-inner">
                            <ul class="nav">
                                <?php foreach($menus as $menu): ?>
                                <li>
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                                        <span class="selected"></span>
                                            <?php echo($menu->getDescripcion()); ?>
                                        <span class="arrow"></span>     
                                    </a>
                                    <?php include_component('inicio', 'submenu',array('menu' => $menu->getId())); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END HORIZANTAL MENU -->
                    <!-- BEGIN TOP NAVIGATION MENU -->              
                    <ul class="nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img alt="" src="/assets/img/avatar1_small.jpg">
                                    <span class="username"><?php echo $sf_user->getAttribute('USUARIO_USERNAME'); ?></span>
                                    <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                                <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
                                <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                                <li class="divider"></li>
                                <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li><a href="/login/index"><i class="icon-key"></i> Salir</a></li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
               <!-- END TOP NAVIGATION MENU --> 
            </div>
        </div>
       <!-- END TOP NAVIGATION BAR -->

    


