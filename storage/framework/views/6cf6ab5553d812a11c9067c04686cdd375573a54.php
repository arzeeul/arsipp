<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
    <!-- Sidenav Toggle Button-->
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle">
        <i data-feather="menu"></i>
    </button>
    <!-- Navbar Brand-->
    <!-- * * Tip * * You can use text or an image for your navbar brand.-->
    <!-- * * * * * * When using an image, we recommend the SVG format.-->
    <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="<?php echo e(route('admin-dashboard')); ?>">
        PT. Kimia Farma Plant Semarang
    </a>
    <!-- Navbar Search Input-->
    <!-- * * Note: * * Visible only on and above the lg breakpoint-->
    <form class="form-inline me-auto d-none d-lg-block me-3">
        <div class="input-group input-group-joined input-group-solid">

        </div>
    </form>
    <!-- Navbar Items-->
    <ul class="navbar-nav align-items-center ms-auto">
        <!-- Navbar Search Dropdown-->
        <!-- * * Note: * * Visible only below the lg breakpoint-->

        <!-- User Dropdown-->
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if(Auth::user()->profile != NULL): ?>
                    <img class="img-fluid" src="<?php echo e(Storage::url(Auth::user()->profile)); ?>" />
                <?php else: ?>
                    <img class="img-fluid" src="https://ui-avatars.com/api/?name=<?php echo e(Auth::user()->name); ?>" />
                <?php endif; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <?php if(Auth::user()->profile != NULL): ?>
                        <img class="dropdown-user-img" src="<?php echo e(Storage::url(Auth::user()->profile)); ?>" />
                    <?php else: ?>
                        <img class="dropdown-user-img" src="https://ui-avatars.com/api/?name=<?php echo e(Auth::user()->name); ?>" />
                    <?php endif; ?>

                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name"><?php echo e(Auth::user()->name); ?></div>
                        <div class="dropdown-user-details-email"><?php echo e(Auth::user()->email); ?></div>
                    </div>
                </h6>
                
                
                <form action="/logout" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="dropdown-item">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH C:\Users\ASUS\Documents\surat-app\resources\views/includes/navbar-admin.blade.php ENDPATH**/ ?>