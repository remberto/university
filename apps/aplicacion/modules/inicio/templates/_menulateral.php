<ul class="page-sidebar-menu">
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone" style="margin-top: 40px;">
        </div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>

    <li class="<?php if($sf_user->getAttribute('MENU')==0) echo 'active'; ?>">
        <a href="<?php echo url_for('inicio/index') ?>">
            <i class="icon-home">
            </i>
            <span class="title">
            Inicio
            </span>
        </a>
    </li>
    <?php foreach ($menus as $menu): ?>
        <li class="<?php if($sf_user->getAttribute('MENU')==$menu->getId()) echo 'active'; ?>">
            <a href="javascript:;">
                <i class="<?php echo $menu->getIcon(); ?>">
                </i>
                <span class="title">
                <?php echo $menu->getDescripcion(); ?>
                </span>
                <span class="<?php if($sf_user->getAttribute('MENU')==$menu->getId()) echo 'arrow open'; else echo 'arrow';?>">
                </span> 
            </a>
            <?php if (Doctrine::getTable('AdmMenus')->getSubMenus($sf_user->getAttribute('ROL'), $menu->getId())->count()>0): ?>
                <ul class="sub-menu">
                <?php foreach (Doctrine::getTable('AdmMenus')->getSubMenus($sf_user->getAttribute('ROL'), $menu->getId()) as $submenu): ?>
                    <li class="<?php if($sf_user->getAttribute('SUBMENU')==$submenu->getId()) echo 'active'; ?>">
                        <a href="<?php echo url_for($submenu->getLink()) ?>">
                            <?php echo $submenu->getDescripcion(); ?>
                        </a>
                    </li>

                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>