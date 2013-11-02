<?php echo $formPersona->renderHiddenFields(false) ?>
<div class="control-group">
    <?php echo $formPersona['ci']->renderLabel('Cedula de Identidad',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formPersona['ci']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formPersona['paterno']->renderLabel('Apellido Paterno',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formPersona['paterno']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formPersona['materno']->renderLabel('Apellido Materno',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formPersona['materno']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formPersona['nombre1']->renderLabel('Primer Nombre',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formPersona['nombre1']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formPersona['nombre2']->renderLabel('Segundos Nombres',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formPersona['nombre2']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formPersona['fecha_nacimiento']->renderLabel('Fecha de Nacimiento',array('class'=>'control-label')); ?>
    <div class="controls">
        <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
            <?php echo $formPersona['fecha_nacimiento']->render(); ?>
            <span class="add-on"><i class="icon-calendar"></i></span>
        </div>
    </div>
</div>
<div class="control-group">
    <?php echo $formPersona['genero']->renderLabel('Genero',array('class'=>'control-label')); ?>
    <div class="controls">
            <?php echo $formPersona['genero']->render() ; ?>
    </div>
</div>
<?php echo $formPersona['adm_usuario_id']->render() ; ?>
<?php echo $formPersona['fecha_add']->render() ; ?>