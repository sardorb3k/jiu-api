<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description"
        content="Japanese International University (JIU) - Yapon standartlariga asoslangan xalqaro universitet. Qo'ng'iroq qiling, to'liq ma'lumot oling: +998 (71) 203-02-20" />
    <meta name="keywords"
        content="university, universitet, institut, japan, yaponiya, japanese, international, xalqaro, o'qish, diplom, business, biznes, accounting, finance, buxgalteriya, moliya, pedagogika, turizm, tourism, it, dasturlash, programming, teaching, best, top" />
    <meta property="og:url" content="jiuuni.uz" />
    <meta property="og:title" content="Japanese International University (JIU)" />
    <meta property="og:description"
        content="Japanese International University (JIU) - Yapon standartlariga asoslangan xalqaro universitet. Qo'ng'iroq qiling, to'liq ma'lumot oling: +998 (71) 203-02-20" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="jiuuni.uz">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon.ico')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.5.1.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.zoom.min.js')); ?>"></script>

    
    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body class="dark:bg-slate-900">

    <?php if (isset($component)) { $__componentOriginal2a2e454b2e62574a80c8110e5f128b60 = $component; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60)): ?>
<?php $component = $__componentOriginal2a2e454b2e62574a80c8110e5f128b60; ?>
<?php unset($__componentOriginal2a2e454b2e62574a80c8110e5f128b60); ?>
<?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

    <script>
        async function archiveFunction(element) {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Are you sure?",
                    text: "Please enter a reason.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, archive it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        await element.closest('form').submit();
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        }
    </script>
    <?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.5.1.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.zoom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.inputmask.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/zoom.js')); ?>"></script>
    

</body>

</html>
<?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/layouts/app.blade.php ENDPATH**/ ?>