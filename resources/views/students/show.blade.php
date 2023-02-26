@extends('layouts.app')
@section('title', 'Permission')
@section('content')

    <!-- Invoice -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <!-- Grid -->
        <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Student:
                    {{ $data->firstname . ' ' . $data->lastname }}</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                    href="#">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg>
                    Invoice PDF
                </a>
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                    href="#">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                        <path
                            d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                    </svg>
                    Print
                </a>
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
                            First name:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->firstname }}
                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Last name:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->lastname }}
                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Middle name:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->middlename }}
                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Phone:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->phone }}
                        </dd>
                    </dl>
                </div>
            </div>
            <div>
                <div class="grid space-y-3">
                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Birth of date:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->birthdate }}
                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Gender:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->gender }}
                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Email:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->email }}
                        </dd>
                    </dl>

                    <dl class="grid sm:flex gap-x-3 text-sm">
                        <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                            Phone:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-gray-200">
                            {{ $data->phone }}
                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <div class="border-b border-gray-200 dark:border-gray-700 mt-5">
            <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-gray-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 active"
                    id="card-type-tab-item-1" data-hs-tab="#card-type-tab-1" aria-controls="card-type-tab-1" role="tab">
                    Passport
                </button>
                <button type="button"
                    class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-gray-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-300"
                    id="card-type-tab-item-2" data-hs-tab="#card-type-tab-2" aria-controls="card-type-tab-2" role="tab">
                    Contact
                </button>
                <button type="button"
                    class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 dark:hs-tab-active:bg-gray-800 dark:hs-tab-active:border-b-gray-800 dark:hs-tab-active:text-white -mb-px py-3 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:text-gray-300"
                    id="card-type-tab-item-3" data-hs-tab="#card-type-tab-3" aria-controls="card-type-tab-3" role="tab">
                    Department
                </button>
            </nav>
        </div>

        <div class="mt-3">
            <div id="card-type-tab-1" role="tabpanel" aria-labelledby="card-type-tab-item-1">
                <p>Type: <span>{{ $passport->status }}</span></p>
                <ul class="list-none list-inside text-gray-900 dark:text-gray-200">
                    <li>Passport number: {{ $passport->passportnumber }}</li>
                    <li>Passport series {{ $passport->passportseries }}</li>
                    <li>PINFL: {{ $passport->pinfl }}</li>
                    <li>Place issue: {{ $passport->placeissue }}</li>
                    <li>Givenby: {{ $passport->givenby }}</li>
                    <li>Date issue: {{ $passport->dateissue }}</li>
                    <li>Date expiration: {{ $passport->dateexpiration }}</li>
                </ul>
            </div>
            <div id="card-type-tab-2" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-2">
                <p class="text-gray-500 dark:text-gray-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em> item's tab body.
                </p>
            </div>
            <div id="card-type-tab-3" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-3">
                <p class="text-gray-500 dark:text-gray-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's tab body.
                </p>
            </div>
        </div>
        <!-- End Flex -->
    </div>
    <!-- End Invoice -->
@endsection
