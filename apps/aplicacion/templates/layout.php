<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body  class="page-header-fixed page-full-width" onload="initMenu();">
        <div class="header navbar navbar-inverse navbar-fixed-top">
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
                                <li>
                                    <a href="index.html">
                                        Dashboard
                                    </a>
                                </li>
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
                                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
               <!-- END TOP NAVIGATION MENU --> 
            </div>
        </div>
       <!-- END TOP NAVIGATION BAR -->
    </div>
    <div class="page-container row-fluid">
          <!-- BEGIN EMPTY PAGE SIDEBAR -->
          <div class="page-sidebar nav-collapse collapse visible-phone visible-tablet" style="">
              <ul class="page-sidebar-menu">
                  <li class="visible-phone visible-tablet">
                      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                      <form class="sidebar-search">
                          <div class="input-box">
                              <a href="javascript:;" class="remove"></a>
                              <input type="text" placeholder="Search...">            
                                  <input type="button" class="submit" value=" ">
                                      </div>
                                      </form>
                                      <!-- END RESPONSIVE QUICK SEARCH FORM -->
                                      </li>
                                      <li>
                                          <a class="active" href="index.html">
                                              Dashboard                        
                                          </a>
                                      </li>
                                      <li class="active">
                                          <a href="javascript:;">
                                              Layouts
                                              <span class="arrow open"></span>   
                                              <span class="selected"></span>   
                                          </a>
                                          <ul class="sub-menu">
                                              <li>
                                                  <a href="layout_horizontal_sidebar_menu.html">
                                                      Horzontal &amp; Sidebar Menu                     </a>
                                              </li>
                                              <li class="active">
                                                  <a href="layout_horizontal_menu1.html">
                                                      Horzontal Menu 1                    </a>
                                              </li>
                                              <li>
                                                  <a href="layout_horizontal_menu2.html">
                                                      Horzontal Menu 2                    </a>
                                              </li>
                                              <li>
                                                  <a href="layout_promo.html">
                                                      Promo Page                    </a>
                                              </li>
                                              <li>
                                                  <a href="layout_email.html">
                                                      Email Templates                     </a>
                                              </li>
                                              <li>
                                                  <a href="layout_ajax.html">
                                                      Content Loading via Ajax</a>
                                              </li>
                                              <li>
                                                  <a href="layout_sidebar_closed.html">
                                                      Sidebar Closed Page                    </a>
                                              </li>
                                              <li>
                                                  <a href="layout_blank_page.html">
                                                      Blank Page                    </a>
                                              </li>
                                              <li>
                                                  <a href="layout_boxed_page.html">Boxed Page</a>
                                              </li>
                                              <li>
                                                  <a href="layout_boxed_not_responsive.html">
                                                      Non-Responsive Boxed Layout                     </a>
                                              </li>
                                              <li>
                                                  <a href="javascript:;">
                                                      More options
                                                      <span class="arrow"></span>
                                                  </a>
                                                  <ul class="sub-menu">
                                                      <li><a href="#">Second level link</a></li>
                                                      <li>
                                                          <a href="javascript:;">More options<span class="arrow"></span></a>
                                                          <ul class="sub-menu">
                                                              <li><a href="index.html">Third level link</a></li>
                                                              <li><a href="index.html">Third level link</a></li>
                                                              <li><a href="index.html">Third level link</a></li>
                                                              <li><a href="index.html">Third level link</a></li>
                                                              <li><a href="index.html">Third level link</a></li>
                                                          </ul>
                                                      </li>
                                                      <li><a href="index.html">Second level link</a></li>
                                                      <li><a href="index.html">Second level link</a></li>
                                                      <li><a href="index.html">Second level link</a></li>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a href="">Tables</a>
                                      </li>
                                      <li>
                                          <a href="">Extra
                                              <span class="arrow"></span>
                                          </a>
                                          <ul class="sub-menu">
                                              <li><a href="index.html">About Us</a></li>
                                              <li><a href="index.html">Services</a></li>
                                              <li><a href="index.html">Pricing</a></li>
                                              <li><a href="index.html">FAQs</a></li>
                                              <li><a href="index.html">Gallery</a></li>
                                              <li><a href="index.html">Registration</a></li>
                                              <li><a href="index.html">2 Columns (Left)</a></li>
                                              <li><a href="index.html">2 Columns (Right)</a></li>
                                          </ul>
                                      </li>
                                      </ul>
                                      </div>
                                      <!-- END EMPTY PAGE SIDEBAR -->
                                      <!-- BEGIN PAGE -->
                                      <div class="page-content">
                                          <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                                          <div id="portlet-config" class="modal hide">
                                              <div class="modal-header">
                                                  <button data-dismiss="modal" class="close" type="button"></button>
                                                  <h3>portlet Settings</h3>
                                              </div>
                                              <div class="modal-body">
                                                  <p>Here will be a configuration form</p>
                                              </div>
                                          </div>
                                          <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                                          <!-- BEGIN PAGE CONTAINER-->
                                          <div class="container-fluid">
                                              <!-- BEGIN PAGE CONTENT-->
                                              <div class="row-fluid margin-bottom-20">
                                                  <?php echo $sf_content ?>
                                              </div>                                              
                                              <!-- END PAGE CONTENT-->
                                          </div>
                                          <!-- END PAGE CONTAINER--> 
                                      </div>
                                      <!-- END PAGE -->    
                                      </div>        

    <!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Ministerio de Educacion
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->

        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="/assets/plugins/excanvas.min.js"></script>
	<script src="/assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="/assets/scripts/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
  </body>
</html>
