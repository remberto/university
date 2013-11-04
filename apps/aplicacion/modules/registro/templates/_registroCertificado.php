<?php echo $formCertificado->renderHiddenFields(false) ?>
<div class="control-group">
    <?php echo $formCertificado['nro_certificado']->renderLabel('Nro Certificado <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['nro_certificado']->render(); ?>
        <span class="help-inline">Registre el Numero de Certificado de Nacimiento</span>
    </div>
</div>
<div class="control-group">
    <?php echo $formCertificado['oficialia']->renderLabel('Oficialia <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['oficialia']->render(); ?>
        <span class="help-inline">Selecciona la Sede o Subsede Academica</span>
    </div>
</div>
<div class="control-group">
    <?php echo $formCertificado['libro']->renderLabel('Libro <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['libro']->render(); ?>
        <span class="help-inline">Selecciona la Carrera</span>
    </div>
</div>
<div class="control-group">
    <?php echo $formCertificado['partida']->renderLabel('Partida <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['partida']->render(); ?>
        <span class="help-inline">Selecciona el Grado Academico</span>
    </div>
</div>
<div class="control-group">
    <?php echo $formCertificado['folio']->renderLabel('Folio <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['folio']->render(); ?>
        <span class="help-inline">Selecciona la Gestión Académica</span>
    </div>
</div>
<div class="control-group">
    <?php echo $formCertificado['localidad']->renderLabel('Nro Certificado <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['localidad']->render(); ?>
    </div>
</div>