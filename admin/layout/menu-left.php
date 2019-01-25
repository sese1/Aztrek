<?php require_once __DIR__ . '/../../functions.php'; ?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/admin/", true) ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>">
                    <i class="fa fa-home"></i>
                    Accueil <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/sejour/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/sejour/">
                    <i class="fa fa-suitcase"></i>
                    Séjour
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/destination/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/destination/">
                    <i class="fa fa-globe"></i>
                    Destinations
                </a>

        </ul>
    </div>
</nav>