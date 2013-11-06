<select id="dat_certificado_nacimiento_provincia_id" name="dat_certificado_nacimiento[provincia_id]" class="m-wrap large required" data-placeholder="Seleccione la Provincia" tabindex="1">
    <option value="">Seleccione...</option>
    <?php foreach ($provincias as $key => $provincia): ?>
        <option value="<?php echo $provincia->getId(); ?>"><?php echo $provincia->getDescripcion(); ?></option>
    <?php endforeach; ?>
</select>
