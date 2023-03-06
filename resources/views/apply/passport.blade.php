@extends('layouts.ghost')
@section('title', __('apply.passport_title'))
@section('content')

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                @include('components/logo-auth')
                <hr style="margin-top: 15px" />
                <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
                    <p>{{ __('apply.passport_title') }}</p>
                </h1>
            </div>

            <div class="mt-12">

                <div class="mt-3">
                    <form method="POST" action="{{ route('apply.passport') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 lg:gap-6">
                            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                <div>
                                    <label for="passport" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        {{ __('apply.passport_input') }} <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="passport" id="passport" placeholder="AC 12345678"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>
                            </div>
                            <div>
                                <label for="file"
                                    class="block text-sm text-gray-700 font-medium dark:text-white">{{ __('apply.passport_file') }}</label>
                                <label for="file" class="sr-only">{{ __('apply.passport_file_label') }}</label>
                                <input type="file" name="file" id="file" accept="image/* , application/pdf"
                                    required
                                    class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                      file:bg-transparent file:border-0
                                      file:bg-gray-100 file:mr-4
                                      file:py-3 file:px-4
                                      dark:file:bg-gray-700 dark:file:text-gray-400">
                            </div>
                        </div>
                        <div class="bg-yellow-50 border border-yellow-200 rounded-md p-4 mt-5" role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-4 w-4 text-yellow-400 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-sm text-yellow-800 font-semibold">
                                        Ogohlantirish
                                    </h3>
                                    <div class="mt-1 text-sm text-yellow-700">
                                        <ul class="list-disc space-y-1 pl-5">
                                          <li>
                                            Ma'lumotlarning to'g'riligini tekshiring.
                                          </li>
                                          <li>
                                            Passport yoki Guvohnomani asosiy qismni yuklayotganingizni tekshiring.
                                          </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 grid">
                            <button type="submit"
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                {{ __('apply.passport_next') }}
                            </button>
                        </div>
                    </form>
                </div>
                @include('components.error')
            </div>
        </div>
    </div>

@endsection
