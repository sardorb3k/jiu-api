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
