<ul class="dropdown-menu">
    <?php foreach($submenus as $submenu): ?>
    <li>
            <a href="<?php echo url_for($submenu->getlink()); ?>">
            <?php echo $submenu->getDescripcion(); ?>
            </a>
    </li>
    <?php endforeach; ?>
</ul>