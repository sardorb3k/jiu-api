<?php $__env->startSection('title', __('deportment.checkstatus_title')); ?>
<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal42c95f3bd89a86a371bf80e3f4d211b7 = $component; } ?>
<?php $component = App\View\Components\ApplicantNav::resolve(['action' => 'examday'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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


    <?php if($enrollment): ?>
    <div class="max-w-3xl mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="">
                <?php if($enrollmentstatus): ?>
                    <div class="<?php echo e($enrollmentstatus->status == '2' ? 'bg-red-700' : 'bg-blue-800'); ?> text-sm bg-blue-800 text-white rounded-md p-4 mt-5"
                        role="alert">
                        <span class="font-bold"> <?php echo e(__('applicant.detail_status')); ?>:
                            <?php if($enrollmentstatus->status == '1'): ?>
                                <?php echo e(__('applicant.detail_status_progress')); ?>

                            <?php endif; ?>
                            <?php if($enrollmentstatus->status == '2'): ?>
                                <?php echo e(__('applicant.detail_status_found')); ?>

                            <?php endif; ?>
                            <?php if($enrollmentstatus->status == '3'): ?>
                                <?php echo e(__('applicant.detail_status_accepted')); ?>

                            <?php endif; ?>
                        </span> <br>
                        <?php if($enrollmentstatus->status == '2'): ?>
                            <?php echo e($enrollmentstatus->description); ?>

                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="bg-blue-500 text-sm text-white rounded-md p-4 mt-5" role="alert">
                        <span class="font-bold"> <?php echo e(__('applicant.detail_status')); ?>:
                            <?php echo e(__('applicant.detail_status_progress')); ?>

                        </span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if($enrollmentstatus): ?>
    <?php if($enrollmentstatus->status == '2'): ?>
        <?php if (\Illuminate\Support\Facades\Blade::check('permission', 'personal-student')): ?>
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="max-w-xl mx-auto">
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
                            <p><?php echo e(__('apply.personal_title')); ?></p>
                        </h1>
                    </div>
                    <div class="mt-12">
                        <form method="POST" action="<?php echo e(route('applicant.infoupdate')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="grid gap-4 lg:gap-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="firstname"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.personal_firstname')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <input type="text" name="firstname" id="firstname"
                                            value="<?php echo e($user->firstname); ?>"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            required />
                                    </div>

                                    <div>
                                        <label for="lastname"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.personal_lastname')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <input type="text" name="lastname" id="lastname" value="<?php echo e($user->lastname); ?>"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            required />
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="middlename"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.personal_middlename')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <input type="text" name="middlename" id="middlename"
                                            value="<?php echo e($user->middlename); ?>"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            required />
                                    </div>

                                    <div>
                                        <label for="gender"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.personal_gender')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <select
                                            class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            name="gender" id="gender" required>
                                            <option <?php echo e($user->gender == 'male' ? 'selected' : ''); ?> value="male">
                                                <?php echo e(__('apply.personal_gender_male')); ?></option>
                                            <option <?php echo e($user->gender == 'female' ? 'selected' : ''); ?> value="female">
                                                <?php echo e(__('apply.personal_gender_female')); ?>

                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="datebirth"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.personal_datebirth')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <input type="date" name="datebirth" id="datebirth"
                                            value="<?php echo e($user->birthdate); ?>"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" />
                                    </div>

                                    <div>
                                        <label for="hs-company-website-hire-us-2"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.personal_phone')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <div class="relative">
                                            <input mask="(99) 999 99 99" maskChar="null" id="phoneNumber" name="phoneNumber"
                                                value="<?php echo e($user->phone); ?>"
                                                class="py-3 px-4 pl-20 block w-full border-gray-200 border-solid border rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                placeholder="Telefon raqamingiz" />
                                            <div class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px">
                                                <label for="hs-inline-leading-select-country" class="sr-only">
                                                    <?php echo e(__('apply.personal_country')); ?> <span class="text-red-800">*</span>
                                                </label>
                                                <select id="hs-inline-leading-select-country"
                                                    name="hs-inline-leading-select-country"
                                                    class="block w-full border-transparent rounded-md focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-800">
                                                    <option value="uz" selected>
                                                        UZ
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid gap-4 lg:gap-6 pt-10">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                                    <?php echo e(__('apply.passport_title')); ?></h3>
                                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                    <div>
                                        <label for="passport"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">
                                            <?php echo e(__('apply.passport_input')); ?> <span class="text-red-800">*</span>
                                        </label>
                                        <input type="text" name="passport" id="passport" maxLength="14"
                                            placeholder="AC 12345678" value="<?php echo e($passportinfo->passport); ?>"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            required />
                                    </div>
                                </div>
                                <div>
                                    <label for="file"
                                        class="block text-sm text-gray-700 font-medium dark:text-white"><?php echo e(__('apply.passport_file')); ?></label>
                                    <label for="file" class="sr-only"><?php echo e(__('apply.passport_file_label')); ?></label>
                                    <input type="file" name="file" id="file" accept="image/* , application/pdf"
                                        class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                              file:bg-transparent file:border-0
                              file:bg-gray-100 file:mr-4
                              file:py-3 file:px-4
                              dark:file:bg-gray-700 dark:file:text-gray-400">
                                </div>
                            </div>

                            <div class="mt-6 grid">
                                <input type="hidden" name="enrollment_id" value="<?php echo e($enrollmentstatus->id); ?>">
                                <button type="submit"
                                    class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                    <?php echo e(__('apply.personalupdate_submit')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/applicant/checkstatus.blade.php ENDPATH**/ ?>