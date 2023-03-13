<?php $__env->startSection('title', __('deportment.exam_title')); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal42c95f3bd89a86a371bf80e3f4d211b7 = $component; } ?>
<?php $component = App\View\Components\ApplicantNav::resolve(['action' => 'exam'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ApplicantNav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ApplicantNav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42c95f3bd89a86a371bf80e3f4d211b7)): ?>
<?php $component = $__componentOriginal42c95f3bd89a86a371bf80e3f4d211b7; ?>
<?php unset($__componentOriginal42c95f3bd89a86a371bf80e3f4d211b7); ?>
<?php endif; ?>
    <div class="max-w-3xl mx-auto">
        <div class="max-w-xl mx-auto">
            <?php if(!$enrollmentexamday): ?>
                <form method="POST" action="<?php echo e(route('applicant.exam_save')); ?>">
                    <?php echo csrf_field(); ?>
            <?php endif; ?>
            <div class="grid gap-4 lg:gap-6">
                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                    <div>

                        <label for="deportment" class="block text-sm text-gray-700 font-medium dark:text-white">
                            <?php echo e(__('deportment.exam_day')); ?> <span class="text-red-800">*</span>
                        </label>
                        <select name="deportment" id="deportment" required <?php echo e($enrollmentexamday ? 'disabled' : ''); ?>

                            class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->date); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                    </div>
                </div>
            </div>
            <div class="mt-6 grid">
                <?php if(!$enrollmentexamday): ?>
                    <button type="submit"
                        class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                        <?php echo e(__('deportment.deportment_submit')); ?>

                    </button>
                <?php endif; ?>
            </div>

            <?php if(!$enrollmentexamday): ?>
                </form>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/applicant/examinations.blade.php ENDPATH**/ ?>