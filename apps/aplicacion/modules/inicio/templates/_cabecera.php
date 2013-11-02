<div class="row">
    <div class="col-md-12">
       <!-- BEGIN PAGE TITLE & BREADCRUMB-->
       <h3 class="page-title" style="padding-left: 15px;">
          <?php echo $titulo1; ?> <small><?php echo $titulo2; ?></small>
       </h3>
       <ul class="page-breadcrumb breadcrumb">
          <li>
             <i class="<?php echo $icono ?>"></i>
                <?php echo $nivel1; ?>
             <i class="icon-angle-right"></i>
          </li>
          <?php if($sf_user->getAttribute('SUBMENU')!=0): ?>
            <li><?php echo $nivel2; ?></li>
          <?php endif; ?>
          <li class="pull-right">
             <div style="display: block;" id="dashboard-report-range" class="dashboard-date-range tooltips">
                <span>
                    <?php
                        date_default_timezone_set('America/La_Paz');
                        setlocale(LC_TIME, 'spanish');
                        echo strftime("%A, %d de %B de %Y");
                        ?>
                </span>
             </div>
          </li>
       </ul>
       <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
 </div>