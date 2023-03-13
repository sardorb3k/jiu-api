<?php $__env->startSection('title', __('deportment.education_title')); ?>
<?php $__env->startSection('content'); ?>

    <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'applicant-details')): ?>
            <?php if (isset($component)) { $__componentOriginal42c95f3bd89a86a371bf80e3f4d211b7 = $component; } ?>
<?php $component = App\View\Components\ApplicantNav::resolve(['action' => 'info'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <form method="POST" action="<?php echo e(route('applicant.details_save')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="grid gap-4 lg:gap-6">
                            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                <div>
                                    <label for="qualification"
                                        class="block text-sm text-gray-700 font-medium dark:text-white">
                                        <?php echo e(__('applicant.qualification_title')); ?> <span class="text-red-800">*</span>
                                    </label>
                                    <label for="qualification"
                                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        <span
                                            class="text-sm text-gray-500 dark:text-gray-400"><?php echo e(__('applicant.qualification_desc')); ?></span>
                                        <input type="checkbox" name="qualification" <?php echo e($enrollment ? 'disabled checked' : ''); ?>

                                            class="shrink-0 ml-auto mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            id="qualification">
                                    </label>
                                    <?php if(!$enrollment): ?>
                                        <div class="mt-5" id="upload_file" style="display: none ;">
                                            <label for="qualification"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                <?php echo e(__('applicant.qualification_file')); ?> <span class="text-red-800">*</span>
                                            </label>
                                            <label for="qualification_file" class="sr-only">Choose file</label>
                                            <input type="file" name="qualification_file" id="qualification_file" accept="image/* , application/pdf"
                                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                            file:bg-transparent file:border-0
                                            file:bg-gray-100 file:mr-4
                                            file:py-3 file:px-4
                                            dark:file:bg-gray-700 dark:file:text-gray-400">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <label for="deportment" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        <?php echo e(__('deportment.deportment_title')); ?> <span class="text-red-800">*</span>
                                    </label>
                                    <select name="deportment" id="deportment" required <?php echo e($enrollment ? 'disabled': ''); ?>

                                        class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" <?php echo e($enrollment->department_id == $item->id ?? 'selected'); ?>><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <?php if(!$enrollment): ?>
                        <div class="mt-6 grid">
                            <button type="submit"
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                <?php echo e(__('deportment.deportment_submit')); ?>

                            </button>
                        </div>
                        <?php endif; ?>
                        <script>
                            $(function() {

                                        $("#qualification").on("click", function() {
                                            $("#upload_file").toggle(this.checked);
                                        });

                                    });
                        </script>
                        <?php echo $__env->make('components.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/applicant/details.blade.php ENDPATH**/ ?>