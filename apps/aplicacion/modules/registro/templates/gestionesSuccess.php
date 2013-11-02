<select id="dat_habilitacion_cla_gestion_id" class="span6 m-wrap required" data-placeholder="Seleccione la Gestion">
    <option value>Seleccione la Gestion</option>
    <?php foreach ($gestiones as $gestion): ?>
        <option value="<?php echo $gestion->getId(); ?>"><?php echo $gestion; ?></option>
    <?php endforeach;?>
</select>
