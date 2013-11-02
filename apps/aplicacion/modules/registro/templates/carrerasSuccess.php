<select id="dat_habilitacion_cla_carrera_id" class="span6 m-wrap required" data-placeholder="Seleccione la Carrera">
    <option value>Seleccione Carrera</option>
    <?php foreach ($carreras as $carrera): ?>
        <option value="<?php echo $carrera->getId(); ?>"><?php echo $carrera; ?></option>
    <?php endforeach;?>
</select>
