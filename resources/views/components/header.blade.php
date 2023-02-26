<header
    class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200 dark:border-gray-700 text-sm py-3 md:py-0 dark:bg-gray-800">
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
        <div class="relative md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <a class="flex-none text-xl font-semibold dark:text-white" href="{{ url('/') }}" aria-label="JIU">
                    <img src="/logo.png" style="width:105px;margin:0 auto;"></a>
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="navbar-collapse-with-animation"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                <div class="overflow-hidden overflow-y-auto max-h-[75vh] scrollbar-y">
                    <div
                        class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:pl-7 md:divide-y-0 md:divide-solid dark:divide-gray-700">
                        <a class="font-medium text-blue-600 py-3 md:py-6 dark:text-blue-500" href="#"
                            aria-current="page">Home</a>
                        @permission('contact-student')
                            <a class="font-medium text-gray-500 hover:text-gray-400 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                                href="#">
                                Contact
                            </a>
                        @endpermission
                        @permission('feedback-student')
                            <a class="font-medium text-gray-500 hover:text-gray-400 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                                href="#">
                                Feedback
                            </a>
                        @endpermission
                        @permission('publicoffers-student')
                            <a class="font-medium text-gray-500 hover:text-gray-400 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                                href="#">
                                Public Offers
                            </a>
                        @endpermission
                        @permission('role-navbar')
                            <a class="{{ Request::segment(1) === 'roles' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400 dark:hover:text-gray-500' }} font-medium hover:text-gray-400 py-3 md:py-6 "
                                href="{{ route('role') }}">
                                Roles
                            </a>
                        @endpermission
                        @permission('students')
                            <a class="{{ Request::segment(1) === 'students' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400 dark:hover:text-gray-500' }} font-medium hover:text-gray-400 py-3 md:py-6"
                                href="{{ route('students') }}">
                                Students
                            </a>
                        @endpermission
                        @permission('permission-navbar')
                            <a class="{{ Request::segment(1) === 'permissions' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400 dark:hover:text-gray-500' }} font-medium hover:text-gray-400 py-3 md:py-6"
                                href="{{ route('permission') }}">
                                Permissions
                            </a>
                        @endpermission
                        @permission('departments-navbar')
                            <a class="{{ Request::segment(1) === 'departments' ? 'text-blue-600 dark:text-blue-500' : 'text-gray-500 dark:text-gray-400 dark:hover:text-gray-500' }} font-medium hover:text-gray-400 py-3 md:py-6"
                                href="{{ route('departments') }}">
                                Departments
                            </a>
                        @endpermission

                        <a class="font-medium text-gray-500 hover:text-gray-400 py-3 md:py-6 dark:text-gray-400 dark:hover:text-gray-500"
                            href="#">
                            Join us <span
                                class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-blue-50 border border-blue-200 text-blue-600">4</span>
                        </a>

                        <div
                            class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-6">
                            <button type="button"
                                class="flex items-center w-full gap-x-2 text-gray-500 sm:border-l sm:border-gray-300 sm:pl-6 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                                Profile
                                <svg class="ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div
                                class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-gray-800 sm:dark:border dark:border-gray-700 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="{{ route('profile.info') }}">
                                    Account
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                                        Log Out
                                    </a>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
