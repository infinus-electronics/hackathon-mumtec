<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <!-- <div class="container-fluid"> -->
        <!-- Toggler -->
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation"> -->
            <!-- <span class="navbar-toggler-icon"></span> -->
        <!-- </button> -->
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('argon')); ?>/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
    
    <!-- </div> -->

    <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        <i class="ni ni-tv-2 text-primary"></i> <?php echo e(__('Dashboard')); ?>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('calendar')); ?>">
                        <i class="ni ni-calendar-grid-58 text-primary"></i> <?php echo e(__('Calendar')); ?>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('kanban')); ?>">
                        <i class="ni ni-map-big text-primary"></i> <?php echo e(__('Kanban')); ?>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('homework-help')); ?>">
                        <i class="ni ni-bullet-list-67 text-primary"></i> <?php echo e(__('Homework Help')); ?>

                    </a>
                </li>
    </ul>
</nav><?php /**PATH /var/www/html/resources/views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>