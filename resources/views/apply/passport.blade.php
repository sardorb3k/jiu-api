@extends('layouts.ghost')
@section('title', __('contact.site_title'))
@section('content')

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <img src="/logo.png" style="width:200px;height:92px;margin:0 auto;">
                <hr style="margin-top: 15px" />

                <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
                    <p>Passport Information</p>
                </h1>
            </div>

            <div class="mt-12">
                    <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="hs-tab-active:bg-blue-600 hs-tab-active:text-white flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-medium text-center text-gray-500 rounded-lg hover:text-blue-600 dark:hover:text-gray-400 active"
                            id="fill-and-justify-item-1" data-hs-tab="#fill-and-justify-1"
                            aria-controls="fill-and-justify-1" role="tab">
                            Passport
                        </button>
                        <button type="button"
                            class="hs-tab-active:bg-blue-600 hs-tab-active:text-white flex-auto py-3 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-medium text-center text-gray-500 rounded-lg hover:text-blue-600 dark:hover:text-gray-400 dark:hover:text-gray-300"
                            id="fill-and-justify-item-2" data-hs-tab="#fill-and-justify-2"
                            aria-controls="fill-and-justify-2" role="tab">
                            Certificate
                        </button>
                    </nav>

                    <div class="mt-3">
                        <div id="fill-and-justify-1" role="tabpanel" aria-labelledby="fill-and-justify-item-1">
                            <form method="POST" action="{{ route('apply.passport') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 lg:gap-6">
                                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                        <div>
                                            <label for="firstname"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                Passport Series <span class="text-red-800">*</span> /
                                                Passport Number <span class="text-red-800">*</span>
                                            </label>

                                            <div class="sm:flex rounded-md shadow-sm">
                                                <input type="text" name="passportseries" id="passportseries"
                                                    maxLength="2" placeholder="AA"
                                                    class="py-3 px-4 w-20	block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                                <input type="text" name="passportnumber" id="passportnumber"
                                                    maxLength="7" placeholder="1234567"
                                                    class="py-3 px-4 pr-11 block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                        <div>
                                            <label for="pinfl"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                PINFL <span class="text-red-800">*</span>
                                            </label>
                                            <input type="text" name="pinfl" id="pinfl" maxLength="14"
                                                placeholder="1234567890123"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                required />
                                        </div>

                                        <div>
                                            <label for="placeissue"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                Place Of Issue <span class="text-red-800">*</span>
                                            </label>
                                            <input type="text" name="placeissue" id="placeissue"
                                                placeholder="SAMARQAND IIB"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                required />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                        <div>
                                            <label for="givenby"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                Given by IIB of (UZB:Kim Tomonidan Berilgan)
                                                <span class="text-red-800">*</span>
                                            </label>
                                            <input type="text" name="givenby" id="givenby"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                required />
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                        <div>
                                            <label for="dateissue"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                Date Of Issue <span class="text-red-800">*</span>
                                            </label>
                                            <input type="date" name="dateissue" id="dateissue"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                required />
                                        </div>

                                        <div>
                                            <label for="dateexpiration"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                Date Of Expiration <span class="text-red-800">*</span>
                                            </label>
                                            <input type="date" name="dateexpiration" id="dateexpiration"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                required />
                                        </div>
                                    </div>
                                    <div>
                                        <label for="file"
                                            class="block text-sm text-gray-700 font-medium dark:text-white">Certificate
                                            file</label>
                                        <label for="file" class="sr-only">Choose file</label>
                                        <input type="file" name="file" id="file"
                                            class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                      file:bg-transparent file:border-0
                                      file:bg-gray-100 file:mr-4
                                      file:py-3 file:px-4
                                      dark:file:bg-gray-700 dark:file:text-gray-400">
                                    </div>
                                </div>

                                <div class="mt-6 grid">
                                    <button type="submit"
                                        class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                        Next
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="fill-and-justify-2" class="hidden" role="tabpanel"
                            aria-labelledby="fill-and-justify-item-2">
                            <form method="POST" action="{{ route('apply.certificate') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 lg:gap-6">
                                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                        <div>
                                            <label for="firstname"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                Certificate Series <span class="text-red-800">*</span> /
                                                Certificate Number <span class="text-red-800">*</span>
                                            </label>

                                            <div class="sm:flex rounded-md shadow-sm">
                                                <input type="text" name="passportseries" id="passportseries"
                                                    maxLength="4" placeholder="I-SM"
                                                    class="py-3 px-4 w-20	block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                                <input type="text" name="passportnumber" id="passportnumber"
                                                    maxLength="7" placeholder="1234567"
                                                    class="py-3 px-4 pr-11 block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="file"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">Certificate
                                                file</label>
                                            <label for="file" class="sr-only">Choose file</label>
                                            <input type="file" name="file" id="file"
                                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                          file:bg-transparent file:border-0
                                          file:bg-gray-100 file:mr-4
                                          file:py-3 file:px-4
                                          dark:file:bg-gray-700 dark:file:text-gray-400">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 grid">
                                    <button type="submit"
                                        class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                        Next
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @include('components.error')
            </div>
        </div>
    </div>

@endsection
