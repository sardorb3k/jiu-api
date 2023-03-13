<?php if(Session::has('success')): ?>
    <div class="bg-blue-50 border border-blue-200 text-sm text-blue-600 rounded-md p-4" role="alert">
        <span class="font-bold">Success !</span> <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php if(Session::has('error')): ?>
    <div class="bg-red-50 border border-red-200 text-sm text-red-600 rounded-md p-4" role="alert">
        <span class="font-bold">Error !</span> <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/components/error.blade.php ENDPATH**/ ?>