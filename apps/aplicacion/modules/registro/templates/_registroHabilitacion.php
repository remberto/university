<?php echo $formHabilitacion->renderHiddenFields(false) ?>
<div class="control-group">
    <label class="control-label">Nombre de la Universidad<span class="required">*</span></label>
    <div class="controls">
        <input type="text" class="span6 m-wrap" name="universidad" value="<?php echo $universidad[0]->UniUniversidad->getDescripcion(); ?>" readonly="true"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Sede o SubSede Academica<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_habilitacion_uni_sede_id" class="span6 m-wrap required" data-placeholder="Seleccione la Carrera" tabindex="1">
                <option value="">Seleccione...</option>
                <?php foreach ($universidad as $key => $sede): ?>
                <option value="<?php echo $sede->getId(); ?>"><?php echo $sede->getDescripcion();?></option>
                <?php endforeach;?>
        </select>
        <span class="help-inline">Selecciona la Sede o Subsede Academica</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Carrera<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_habilitacion_cla_carrera_id" class="span6 m-wrap required" data-placeholder="Seleccione la Carrera" tabindex="1">
                <option value="">Seleccione...</option>
        </select>
        <span class="help-inline">Selecciona la Carrera</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Grado Academico<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_habilitacion_cla_grado_academico_id" name="" class="span6 m-wrap required" data-placeholder="Seleccione el Grado Academico" tabindex="1">
                <option value="">Seleccione...</option>
        </select>
        <span class="help-inline">Selecciona el Grado Academico</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Gestión Académica<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_habilitacion_cla_gestion_id" class="span6 m-wrap required" data-placeholder="Seleccione la Gestion" tabindex="1">
                <option value="">Seleccione...</option>
        </select>
        <span class="help-inline">Selecciona la Gestión Académica</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Resolucion Ministerial<span class="required">*</span></label>
    <div id="resolucion_ministerial" class="controls">
        <input type="text" class="span6 m-wrap" name="resolucion_ministerial" value="" readonly="true"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Modalidad de Egreso<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_habilitacion_cla_modalidad_egreso_id" class="span6 m-wrap required" data-placeholder="Seleccione la Modalidad de Egreso" tabindex="1">
            <option value="">Seleccione...</option>
            <?php foreach ($modalidad_egreso as $key => $modalidad): ?>
            <option value="<?php echo $modalidad->getId(); ?>"><?php echo $modalidad->getDescripcion();?></option>
            <?php endforeach;?>
        </select>
        <span class="help-inline">Selecciona la Modalidad de Egreso</span>
    </div>
</div>

<script languaje="text/javascript">
var a = jQuery.noConflict();
a(document).ready(function(){   
   a('#dat_habilitacion_uni_sede_id').change(function(){
       a.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/carreras'); ?>',
            data: 'sede_id='+a('#dat_habilitacion_uni_sede_id').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    a('#dat_habilitacion_cla_carrera_id').html(data);
                }
            }
        });
      a.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/grados'); ?>',
            data: 'sede_id='+a('#dat_habilitacion_uni_sede_id').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    a('#dat_habilitacion_cla_grado_academico_id').html(data);
                }
            }
        });
    });
    a('#dat_habilitacion_cla_grado_academico_id').change(function(){
       a.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/resolucion'); ?>',
            data: 'sede_id='+a('#dat_habilitacion_uni_sede_id').val()+'&carrera_id='+a('#dat_habilitacion_cla_carrera_id').val()+'&grado_id='+a('#dat_habilitacion_cla_grado_academico_id').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    a('#resolucion_ministerial').html(data);
                }
            }
        });
        a.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/gestiones'); ?>',
            data: 'sede_id='+a('#dat_habilitacion_uni_sede_id').val()+'&carrera_id='+a('#dat_habilitacion_cla_carrera_id').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    a('#dat_habilitacion_cla_gestion_id').html(data);
                }
            }
        });
   });
   a('#dat_habilitacion_cla_carrera_id').change(function(){
        a('#reg_inscripcion_uni_carrera_id').val(a("#dat_habilitacion_cla_carrera_id option:selected").val());
        a('#inscripcion_carrera').val(a("#dat_habilitacion_cla_carrera_id option:selected").text());
   });
}); 
</script>