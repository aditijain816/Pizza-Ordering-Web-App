<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
     <?php endif; ?>

    <div class="content">
        <img src="/img/pizzahouse.png" alt="Pizza House Logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div> 
        <p class="mssg"><?php echo e(session('mssg')); ?></p>
        <a href="/pizzas/create"> Order a Pizza </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aditi\Documents\Languages\Laravel\pizzahouse\resources\views/welcome.blade.php ENDPATH**/ ?>