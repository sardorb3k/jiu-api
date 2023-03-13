    <!-- Card Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-3 lg:grid-cols-3 gap-1 sm:gap-1">
            <!-- Card -->
            <a class="group flex flex-col <?php echo e($action == 'info' ? 'bg-red-800' : 'bg-white'); ?>  border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="<?php echo e(route('applicant.details')); ?>">
                <div class="p-4 md:p-5 ">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="mt-1 shrink-0 w-7 h-7 <?php echo e($action == 'info' ? 'text-white dark:text-white-200' : 'text-gray-800 dark:text-gray-200'); ?>"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>

                        <div class="grow ml-5">
                            <h3
                                class="<?php echo e($action == 'info' ? 'group-hover:text-white text-white text-white dark:group-hover:text-white-400 dark:text-white-200' : 'group-hover:text-blue-600 text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200'); ?> font-semibold ">
                                <?php echo e(__('deportment.education_title')); ?>

                            </h3>
                            <p class="<?php echo e($action == 'info' ? 'text-sm text-white' : 'text-sm text-gray-500'); ?>">
                                <?php echo e(__('deportment.education_desc')); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col <?php echo e($action == 'exam' ? 'bg-red-800' : 'bg-white'); ?> border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="<?php echo e(route('applicant.examinations')); ?>">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="mt-1 shrink-0 w-6 h-6 <?php echo e($action == 'exam' ? 'text-white dark:text-white-200' : 'text-gray-800 dark:text-gray-200'); ?>"
                            viewBox="0 0 16 16">
                            <path
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        <div class="grow ml-5">
                            <h3
                                class="<?php echo e($action == 'exam' ? 'group-hover:text-white text-white text-white dark:group-hover:text-white-400 dark:text-white-200' : 'group-hover:text-blue-600 text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200'); ?> font-semibold">
                                Select Exam Date
                            </h3>
                            <p class="<?php echo e($action == 'exam' ? 'text-sm text-white' : 'text-sm text-gray-500'); ?>">
                                planning the exam day
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col <?php echo e($action == 'examday' ? 'bg-red-800' : 'bg-white'); ?> border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="<?php echo e(route('applicant.checkstatus')); ?>">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="mt-1 shrink-0 w-7 h-7 <?php echo e($action == 'examday' ? 'text-white dark:text-white-200' : 'text-gray-800 dark:text-gray-200'); ?>"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                        <div class="grow ml-5">
                            <h3
                                class="<?php echo e($action == 'examday' ? 'group-hover:text-white text-white text-white dark:group-hover:text-white-400 dark:text-white-200' : 'group-hover:text-blue-600 text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200'); ?> font-semibold">
                                Check status
                            </h3>
                            <p class="<?php echo e($action == 'examday' ? 'text-sm text-white' : 'text-sm text-gray-500'); ?>">
                                data verification
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->
<?php /**PATH C:\OSPanel\domains\jiu-api.loc\resources\views/components/applicant-nav.blade.php ENDPATH**/ ?>