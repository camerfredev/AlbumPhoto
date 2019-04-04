<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('mailactiveaccount.title')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('mailactiveaccount.flash')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('mailactiveaccount.link')); ?>

                    <?php echo e(__('mailactiveaccount.resend')); ?>, <a href="<?php echo e(route('verification.resend')); ?>"><?php echo e(__('mailactiveaccount.click')); ?></a>.
                </div> 
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\projet\www\albumphoto\resources\views/auth/verify.blade.php */ ?>