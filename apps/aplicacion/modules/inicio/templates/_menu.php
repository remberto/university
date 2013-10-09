<ul class="nav pull-right">
    <!-- BEGIN NOTIFICATION DROPDOWN -->
    <li class="dropdown" id="header_notification_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-warning-sign"></i>
            <span class="badge">6</span>
        </a>
        <ul class="dropdown-menu extended notification">
            <li>
                <p>You have 14 new notifications</p>
            </li>
            <li>
                <a href="#">
                    <span class="label label-success"><i class="icon-plus"></i></span>
                    New user registered.
                    <span class="time">Just now</span>
                </a>
            </li>
            <li class="external">
                <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
            </li>
        </ul>
    </li>
    <!-- END NOTIFICATION DROPDOWN -->

    <!-- BEGIN INBOX DROPDOWN -->
    <li class="dropdown" id="header_inbox_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-envelope"></i>
            <span class="badge">5</span>
        </a>
        <ul class="dropdown-menu extended inbox">
            <li>
                <p>You have 12 new messages</p>
            </li>
            <li>
                <a href="inbox.html?a=view">
                    <span class="photo"><img src="/assets/img/avatar2.jpg" alt="" /></span>
                    <span class="subject">
                    <span class="from">Lisa Wong</span>
                    <span class="time">Just Now</span>
                    </span>
                    <span class="message">
                        Vivamus sed auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                    </span>
                </a>
            </li>
            <li class="external">
                <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
            </li>
        </ul>
    </li>
    <!-- END INBOX DROPDOWN -->
    
    <!-- BEGIN TODO DROPDOWN -->
    <li class="dropdown" id="header_task_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-tasks"></i>
            <span class="badge">5</span>
        </a>
        <ul class="dropdown-menu extended tasks">
            <li>
            <p>You have 12 pending tasks</p>
            </li>
            <li>
                <a href="#">
                    <span class="task">
                    <span class="desc">New release v1.2</span>
                    <span class="percent">30%</span>
                    </span>
                    <span class="progress progress-success ">
                    <span style="width: 30%;" class="bar"></span>
                    </span>
                </a>
            </li>
            <li class="external">
            <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
            </li>
        </ul>
    </li>
    <!-- END TODO DROPDOWN -->
    
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img alt="" src="/assets/img/avatar1_small.jpg" />
            <span class="username"><?php echo $sf_user->getAttribute('USERNAME'); ?></span>
            <i class="icon-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo url_for('login/index') ?>"><i class="icon-key"></i> Log Out</a></li>
        </ul>
    </li>
    <!-- END USER LOGIN DROPDOWN -->
</ul>