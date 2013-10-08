<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="es  ">
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
  <!-- BEGIN PAGE LEVEL STYLES -->
  <link href="/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
  <!-- END PAGE LEVEL STYLES -->
  <link rel="shortcut icon" href="favicon.ico" />

  <?php include_javascripts() ?>
</head>
<body class="login" style>
    <!-- BEGIN LOGO -->
    <div class="logo">
            <!--<img src="/assets/img/logo-big.png" alt="" /> -->
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <?php echo $sf_content ?>
    </div>
    <div class="copyright">
    Ministerio de Educaci&oacute;n ©2013
    </div>
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/excanvas.min.js"></script>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->   
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
    <script src="/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/assets/scripts/app.js" type="text/javascript"></script>
    <script src="/assets/scripts/login-soft.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS --> 
    <script>
            jQuery(document).ready(function() {     
              App.init();
              Login.init();
            });
    </script>
    <!-- END JAVASCRIPTS -->
  </body>
</html>
