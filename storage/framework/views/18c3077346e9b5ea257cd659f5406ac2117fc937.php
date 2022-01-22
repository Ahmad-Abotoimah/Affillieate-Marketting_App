<?php $__env->startSection('content'); ?>
    <h1 class='text-center'>Your Referrals</h1>
    <table class="table w-50 m-auto my-5">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">userName</th>
        <th scope="col">Email</th>
        <th scope="col">registered date</th>
        <th scope="col">Number of referred users</th>
        <th scope="col">image</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $refferrels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th scope="row"><?php echo e($user->id, false); ?></th>
        <th scope="row"><?php echo e($user->user_name, false); ?></th>
        <td><?php echo e($user->email, false); ?></td>
        <td><?php echo e($user->created_at, false); ?></td>
        <td><?php echo e(count($user->referrals), false); ?></td>
        <td><img class="admin-image" src="<?php echo e(asset('images/'.$user->user_image), false); ?>" alt="llll"></td>
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\Affiliate-Marketing-App\resources\views/referrers-list.blade.php ENDPATH**/ ?>
