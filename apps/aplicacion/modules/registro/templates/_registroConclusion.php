<div class="control-group">
    <label class="control-label">Universidad<span class="required">*</span></label>
    <div class="controls">
        <select id="dat_universidad" class="span6 m-wrap required" data-placeholder="Seleccione la Universidad" tabindex="1">
                <option value="">Seleccione...</option>
                <?php foreach ($universidades as $key => $universidad): ?>
                <option value="<?php echo $universidad->getId(); ?>"><?php echo $universidad->getDescripcion();?></option>
                <?php endforeach;?>
        </select>
        <span class="help-inline">Seleccione la Universidad</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Sede o SubSede Academica<span class="required">*</span></label>
    <div class="controls">
        <select id="reg_inscripcion_uni_sede_id" class="span6 m-wrap required" data-placeholder="Seleccione la Sede o SubSede" tabindex="2">
            <option value="">Seleccione...</option>
        </select>
        <span class="help-inline">Seleccione la Universidad</span>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Carrera<span class="required">*</span></label>
    <div class="controls">
        <input id="reg_inscripcion_uni_carrera_id" type="hidden" class="span6 m-wrap" name="" value="" readonly="true"/>
        <input id="inscripcion_carrera" type="text" class="span6 m-wrap" name="" value="" readonly="true"/>
    </div>
</div>
<div class="control-group">
    <label class="control-label">Gestiones<span class="required">*</span></label>
    <div class="controls">
        <select id="reg_inscripcion_gestion_id" class="span6 m-wrap required" data-placeholder="Seleccione la Gestiones" tabindex="2">
            <option value="">Seleccione...</option>
        </select>
        <span class="help-inline">Seleccione la Gestion</span>
    </div>
</div>
<?php echo $formConclusion['adm_usuario_id']->render() ; ?>
<?php echo $formConclusion['fecha_registro']->render() ; ?>
<script languaje="text/javascript">
var e = jQuery.noConflict();
e(document).ready(function(){   
   e('#dat_universidad').change(function(){
       e.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/sedes'); ?>',
            data: 'universidad_id='+e('#dat_universidad').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    e('#reg_inscripcion_uni_sede_id').html(data);
                }
            }
        });
    });
    e('#reg_inscripcion_uni_sede_id').change(function(){
       e.ajax({
            type: 'POST',
            url:  '<?php echo url_for('registro/gestionesinscripcion'); ?>',
            data: 'sede_id='+e('#reg_inscripcion_uni_sede_id').val()+'&carrera_id='+e('#reg_inscripcion_uni_carrera_id').val(),
            success: function(data){
                if(data == 0) {
                    //Query returned empty.
                } else {
                    //Query Has values.
                    d('#reg_inscripcion_gestion_id').html(data);
                }
            }
        });
    });
}); 
</script>