<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.app-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class = "main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div id='calendar'></div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/pages/calendar.blade.php ENDPATH**/ ?>