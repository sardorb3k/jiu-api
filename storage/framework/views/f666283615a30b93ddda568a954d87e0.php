<?php $__env->startSection('title', $data->firstname ?? 'Student' . ' ' . $data->lastname); ?>
<?php $__env->startSection('content'); ?>

    <!-- Invoice -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <!-- Grid -->
        <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200"><?php echo e(__('student.show_title')); ?>:
                    <?php echo e($data->firstname . ' ' . $data->lastname); ?></h2>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-3">
            <!-- Col -->

            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_firstname')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->firstname); ?>

                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_lastname')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->lastname); ?>

                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_middlename')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->middlename); ?>

                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_phone')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->phone); ?>

                        </dd>
                    </dl>
                </div>
            </div>
            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_birthofdate')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->birthdate); ?>

                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_gender')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->gender); ?>

                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_email')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($data->email); ?>

                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->
        <h1 class="text-sm dark:text-neutral-50 mt-5"><?php echo e(__('student.show_passportinformation')); ?></h1>
        <div class="grid md:grid-cols-2 gap-3">
            <!-- Col -->

            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_passport')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($passport->passport ?? ''); ?>

                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <img src="/uploads/passport/<?php echo e($upload->filename ?? '*'); ?>" alt="Passport" id="ex1" class="w-28 mt-3"
            data-action="zoom">

        <h1 class="text-sm dark:text-neutral-50 mt-5"><?php echo e(__('student.show_contactinformation')); ?></h1>

        <div class="grid md:grid-cols-2 gap-3">
            <!-- Col -->

            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_contactinformation_region')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($contact->region ?? ''); ?>

                        </dd>
                    </dl>
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_contactinformation_district')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($contact->district ?? ''); ?>

                        </dd>
                    </dl>
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_contactinformation_vilage')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($contact->village ?? ''); ?>

                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <h1 class="text-sm dark:text-neutral-50 mt-5"><?php echo e(__('student.show_departmentinformation')); ?></h1>

        <div class="grid md:grid-cols-2 gap-3">
            <!-- Col -->

            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_departmentinformation_name')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($enrollment->name ?? '**'); ?>

                        </dd>
                    </dl>
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_qualification')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($enrollment->qualification ? 'Ha' : 'Yo\'q'); ?>

                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <h1 class="text-sm dark:text-neutral-50 mt-5"><?php echo e(__('student.show_examdate_title')); ?></h1>

        <div class="grid md:grid-cols-2 gap-3">
            <!-- Col -->

            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            <?php echo e(__('student.show_examdate_day')); ?>:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            <?php echo e($examday->date ?? '**'); ?>

                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <!-- End Flex -->
        <h1 class="text-lg dark:text-neutral-50 mt-5"><?php echo e(__('student.show_action_title')); ?></h1>
        <dl class="grid sm:flex gap-x-3 text-sm">
            <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                <?php echo e(__('student.show_status')); ?>:
            </dt>
            <dd class="font-medium text-gray-800 dark:text-gray-200">
                <?php if($enrollmentstatus->status == '1'): ?>
                    Jarayonda
                <?php elseif($enrollmentstatus->status == '2'): ?>
                    Ma'lumotlarda xatolik aniqlandi
                <?php elseif($enrollmentstatus->status == '3'): ?>
                    Tasdiqlangan
                <?php endif; ?>
            </dd>
        </dl>
        <?php if($enrollmentstatus->status == '2'): ?>
            <dl class="grid sm:flex gap-x-3 text-sm">
                <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                    <?php echo e(__('student.show_description')); ?>:
                </dt>
                <dd class="font-medium text-gray-800 dark:text-gray-200">
                    <?php echo e($enrollmentstatus->description); ?>

                </dd>
            </dl>            
        <?php endif; ?>
        <div class="mt-5">
            <div class="grid gap-y-4">
                <form action="<?php echo e(route('students.status', $data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label for="action"
                            class="block text-sm mb-2 dark:text-white"><?php echo e(__('student.show_action_action')); ?></label>
                        <div class="relative">
                            <select id="action" name="action"
                                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option value="1">Jarayonda</option>
                                <option value="2">Ma'lumotlarda xatolik aniqlandi</option>
                                <option value="3">Tasdiqlangan</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="desc"
                            class="block text-sm mb-2 dark:text-white"><?php echo e(__('student.show_action_desc')); ?></label>
                        <div class="relative">
                            <textarea id="desc" name="description"
                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="py-3 mt-5 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"><?php echo e(__('student.show_action_submit')); ?></button>
                </form>
                <?php echo $__env->make('components.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <!-- End Invoice -->

    <script>
        $(document).ready(function() {
            $('#ex1').zoom({
                url: '/uploads/passport/<?php echo e($upload->filename ?? ''); ?>'
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/students/show.blade.php ENDPATH**/ ?>