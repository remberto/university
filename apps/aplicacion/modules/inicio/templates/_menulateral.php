
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Buscar ...">
                    <input type="button" class="submit" value=" ">
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <?php foreach($menuslateral as $menulateral): ?>
        <li class="">
            <a href="<?php echo url_for($menulateral->getLink()); ?>">
                <i class="icon-edit"></i> 
                <span class="title"><?php echo $menulateral->getDescripcion();?></span>
                <span class="selected"></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
