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
    <label class="control-label">Departamento<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_certificado_nacimiento_departamento_id" name="dat_certificado_nacimiento[departamento_id]" class="m-wrap large required" data-placeholder="Seleccione el Departamento" tabindex="1">
                <option value="">Seleccione...</option>
                <?php foreach ($departamentos as $key => $departamento): ?>
                <option value="<?php echo $departamento->getId(); ?>"><?php echo $departamento->getDescripcion();?></option>
                <?php endforeach;?>
        </select>
        <span class="help-inline">Selecciona el Departamento de Nacimiento</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Provincia<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_certificado_nacimiento_provincia_id" name="dat_certificado_nacimiento[provincia_id]" class="m-wrap large required" data-placeholder="Seleccione la Provincia" tabindex="1">
                <option value="">Seleccione...</option>
        </select>
        <span class="help-inline">Selecciona el Departamento de Nacimiento</span>
    </div>
</div>
<div class="control-group">
    <?php echo $formCertificado['localidad']->renderLabel('Localidad <span class="required">*</span>',array('class'=>'control-label')); ?>
    <div class="controls">
        <?php echo $formCertificado['localidad']->render(); ?>
        <span class="help-inline">Registre la Localidad</span>
    </div>    
</div>
<script languaje="text/javascript">
var c = jQuery.noConflict();
c(document).ready(function(){   
   c('#dat_certificado_nacimiento_departamento_id').change(function(){
       c.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/provincias'); ?>',
            data: 'departamento_id='+c('#dat_certificado_nacimiento_departamento_id').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    c('#dat_certificado_nacimiento_provincia_id').html(data);
                }
            }
        });
    });
});
</script>