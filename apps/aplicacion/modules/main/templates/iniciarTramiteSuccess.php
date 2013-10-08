<?php if(!empty($tramites)): ?>
        <?php foreach ($tramites as $tramite): ?>
            <?php echo $tramite->getDescripcion(); ?>
        <?php endforeach; ?>
<?php endif; ?>