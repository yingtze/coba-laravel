


<?php $__env->startSection('container'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="mx-auto">
        <h1>
            <a href="/posts/<?php echo e($post["slug"]); ?>"><?php echo e($post["title"]); ?></a>
        </h1>
        <h5>By : <?php echo e($post["author"]); ?></h5>
        <p><?php echo e($post["body"]); ?></p>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\coba-laravel\resources\views/posts.blade.php ENDPATH**/ ?>