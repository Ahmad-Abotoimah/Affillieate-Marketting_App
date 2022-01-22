<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status'), false); ?>

            </div>
        <?php endif; ?>
            
          <h2 class="my-5 text-center"><?php echo e('Welcom ' .auth()->user()->user_name, false); ?> !</h2>

        <ul class="list-group mt-3 text-center w-50 m-auto">
            <li class="list-group-item">Username: <?php echo e(auth()->user()->user_name, false); ?></li>
            <li class="list-group-item">Email: <?php echo e(auth()->user()->email, false); ?></li>
            <li class="list-group-item">Referral link: <?php echo e(auth()->user()->referral_link, false); ?></li>
            <li class="list-group-item">Referrer: <?php echo e(auth()->user()->referrer->name ?? 'Not Referrer', false); ?></li>
            <li class="list-group-item">You Have : <?php echo e(count(auth()->user()->referrals)  ?? '0', false); ?> Referrals</li>
            <li class="list-group-item">Visitors count: <?php echo e((auth()->user()->views)  ?? '0', false); ?> Visitors</li>
            <li class="list-group-item"><a  class="btn btn-outline-secondary" href=<?php echo e(route('referrers'), false); ?> >Show Your statistics</a></li>
            <li class="list-group-item"><a  class="btn btn-outline-info" href=<?php echo e(route('referrers-list'), false); ?> >Show Your Referrers</a></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projects\Affiliate-Marketing-App\resources\views/home.blade.php ENDPATH**/ ?>