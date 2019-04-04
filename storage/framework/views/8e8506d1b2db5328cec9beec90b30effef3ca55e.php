<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Categories')); ?></div>
    
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('category.store')); ?>" novalidate>
                            <?php echo csrf_field(); ?>
    
                            <div class="form-group row">
                                <label for="categorie" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nom de la Categorie')); ?></label>
    
                                <div class="col-md-6">
                                    <input id="categorie" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
    
                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
    
                        
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('create')); ?>

                                    </button>
    
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* E:\projet\www\albumphoto\resources\views/categories/create.blade.php */ ?>