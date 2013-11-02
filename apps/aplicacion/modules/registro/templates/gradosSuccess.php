<select id="dat_habilitacion_cla_grado_academico_id" name="" class="span6 m-wrap required" data-placeholder="Seleccione el Grado Academico">
    <option value>Seleccione Grado Academico</option>
    <?php foreach ($grados as $grado): ?>
        <option value="<?php echo $grado->getId(); ?>"><?php echo $grado; ?></option>
    <?php endforeach;?>
</select>
