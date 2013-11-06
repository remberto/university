<select id="reg_inscripcion_uni_sede_id" class="span6 m-wrap required" data-placeholder="Seleccione la Carrera">
    <option value>Seleccione Carrera</option>
    <?php foreach ($sedes as $sede): ?>
        <option value="<?php echo $sede->getId(); ?>"><?php echo $sede; ?></option>
    <?php endforeach;?>
</select>
