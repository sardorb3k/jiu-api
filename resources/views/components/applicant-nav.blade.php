    <!-- Card Section -->
    <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-1 lg:grid-cols-1 gap-1 sm:gap-1 lg:ml-40 lg:mr-40">
            <!-- Card -->
            <a class="group flex flex-col {{ $action == 'info' ? 'bg-red-800' : 'bg-white' }}  border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="{{ route('applicant.details') }}">
                <div class="p-4 md:p-5 ">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-1 shrink-0 w-7 h-7 {{ $action == 'info' ? 'text-white dark:text-white-200' : 'text-gray-800 dark:text-gray-200' }}" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                          </svg>

                        <div class="grow ml-5">
                            <h3
                                class="{{ $action == 'info' ? 'group-hover:text-white text-white text-white dark:group-hover:text-white-400 dark:text-white-200' : 'group-hover:text-blue-600 text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200' }} font-semibold ">
                                Education Information
                            </h3>
                            <p class="{{ $action == 'info' ? 'text-sm text-white' : 'text-sm text-gray-500' }}">
                                choose the course you can apply
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            {{-- <a class="group flex flex-col {{ $action == 'upload' ? 'bg-red-800' : 'bg-white' }} border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="{{ route('applicant.uploadeddocuments') }}">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="mt-1 shrink-0 w-7 h-7 {{ $action == 'upload' ? 'text-white dark:text-white-200' : 'text-gray-800 dark:text-gray-200' }}" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                            <path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                        </svg>
                        <div class="grow ml-5">
                            <h3
                                class="{{ $action == 'upload' ? 'group-hover:text-white text-white text-white dark:group-hover:text-white-400 dark:text-white-200' : 'group-hover:text-blue-600 text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200' }} font-semibold">
                                Upload file
                            </h3>
                            <p class="{{ $action == 'upload' ? 'text-sm text-white' : 'text-sm text-gray-500' }}">
                                Upload required documentation
                            </p>
                        </div>
                    </div>
                </div>
            </a> --}}
            <!-- End Card -->

            <!-- Card -->
            {{-- <a class="group flex flex-col {{ $action == 'exam' ? 'bg-red-800' : 'bg-white' }} border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800"
                href="{{ route('applicant.examinations') }}">
                <div class="p-4 md:p-5">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="mt-1 shrink-0 w-6 h-6 {{ $action == 'exam' ? 'text-white dark:text-white-200' : 'text-gray-800 dark:text-gray-200' }}" viewBox="0 0 16 16">
                            <path
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        <div class="grow ml-5">
                            <h3
                                class="{{ $action == 'exam' ? 'group-hover:text-white text-white text-white dark:group-hover:text-white-400 dark:text-white-200' : 'group-hover:text-blue-600 text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200' }} font-semibold">
                                Select Exam Date
                            </h3>
                            <p class="{{ $action == 'exam' ? 'text-sm text-white' : 'text-sm text-gray-500' }}">
                                planning the exam day
                            </p>
                        </div>
                    </div>
                </div>
            </a> --}}
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->
