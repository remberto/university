<?php echo $formDiploma->renderHiddenFields(false) ?>
<div class="control-group">
    <?php echo $formDiploma['dat_institucion_id']->renderLabel('Institucion',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formDiploma['dat_institucion_id']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formDiploma['nro']->renderLabel('Numero de Diploma',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formDiploma['nro']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formDiploma['serie']->renderLabel('Serie de Diploma',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formDiploma['serie']->render(); ?>
    </div>
</div>
<div class="control-group">
    <?php echo $formDiploma['fecha_emision']->renderLabel('Fecha de Emisión',array('class'=>'control-label')); ?>
    <div class="controls">
        <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
            <?php echo $formDiploma['fecha_emision']->render(); ?>
            <span class="add-on"><i class="icon-calendar"></i></span>
        </div>
    </div>
</div>
<div class="control-group">
    <?php echo $formDiploma['cla_grado_academico_id']->renderLabel('Grado Academico Obtenido',array('class'=>'control-label')); ?>
    <div class="controls">
            <?php echo $formDiploma['cla_grado_academico_id']->render() ; ?>
    </div>
</div>