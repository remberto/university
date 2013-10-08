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
        
        <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-datepicker/css/datepicker.css"/>

        <!-- END GLOBAL MANDATORY STYLES -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body  class="page-header-fixed">
    <div class="header navbar navbar-inverse navbar-fixed-top">
        <?php if ($sf_user->hasAttribute('USUARIO_USERNAME')): ?>
            <?php include_component('inicio', 'menu'); ?>
        <?php endif; ?>        
    </div>
        
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?php if ($sf_user->hasAttribute('USUARIO_USERNAME')): ?>
            <?php include_component('inicio', 'menulateral'); ?>
        <?php endif; ?>            
        <!-- END SIDEBAR -->
        <!-- BEGIN PAGE -->
        <div class="page-content">
            <!-- BEGIN PAGE CONTAINER-->
            <div class="container-fluid">
                <!-- BEGIN PAGE HEADER-->
                <?php echo $sf_content ?>    
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
        <script type="text/javascript" src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="/assets/plugins/bootstrap-daterangepicker/date.js"></script>
        <script src="/assets/scripts/app.js"></script>
        <script src="/assets/scripts/form-components.js"></script>
	<script>
		jQuery(document).ready(function() {    
		   App.init();
                   FormComponents.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
  </body>
</html>
