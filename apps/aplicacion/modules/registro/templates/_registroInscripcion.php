<?php echo $formInscripcion->renderHiddenFields(false) ?>
<div class="control-group">
    <?php echo $formInscripcion['uni_sede_id']->renderLabel('Universidad - Sede',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formInscripcion['uni_sede_id']->render(); ?>
    </div>
</div>
<?php echo $formInscripcion['adm_usuario_id']->render() ; ?>
<?php echo $formInscripcion['fecha_registro']->render() ; ?>