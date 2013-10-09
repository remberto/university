<h3 class="page-title">
    Registro de Habilitacion
    <small>Inicio de Tramite de Habilitacion </small>
</h3>
<div class="row-fluid">
    <div class="span12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="icon-reorder"></i>Registro</div>
                <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="<?php echo url_for('registro/index'); ?>" class="form-horizontal" method="post">
                        <h3 class="form-section">Información del Estudiante</h3>
                           <?php include_component('registro', 'registroPersona'); ?>
                        <!--/row-->
                        <h3 class="form-section">Conclusión de Estudios</h3>
                           <?php include_component('registro', 'registroInscripcion'); ?>
                        <!--/row-->
                        <div class="form-actions">
                                <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                <button type="button" class="btn">Cancel</button>
                        </div>
                </form>
                <!-- END FORM--> 
            </div>
        </div>
    </div>
</div>