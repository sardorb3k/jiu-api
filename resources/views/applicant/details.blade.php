@extends('layouts.app')
@section('title', __('deportment.education_title'))
@section('content')

    @permission('applicant-details')
        @if ($enrollment)
            <div class="max-w-3xl mx-auto">
                <div class="max-w-xl mx-auto">
                    <div class="mt-20">
                        @if ($enrollmentstatus)
                            <div class="{{ $enrollmentstatus->status ? 'bg-red-700' : 'bg-blue-800' }} text-sm text-white rounded-md p-4 mt-5"
                                role="alert">
                                <span class="font-bold"> {{ __('applicant.detail_status') }}:
                                    @if ($enrollmentstatus->status == '1')
                                        {{ __('applicant.detail_status_progress') }}
                                    @endif
                                    @if ($enrollmentstatus->status == '2')
                                        {{ __('applicant.detail_status_found') }}
                                    @endif
                                    @if ($enrollmentstatus->status == '3')
                                        {{ __('applicant.detail_status_accepted') }}
                                    @endif
                                </span> <br>
                                @if ($enrollmentstatus)
                                    {{ $enrollmentstatus->description }}
                                @endif
                            </div>
                        @else
                            <div class="bg-blue-500 text-sm text-white rounded-md p-4 mt-5" role="alert">
                                <span class="font-bold"> {{ __('applicant.detail_status') }}:
                                    {{ __('applicant.detail_status_progress') }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            @if ($enrollmentstatus->status == '2')
                @permission('personal-student')
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                        <div class="max-w-xl mx-auto">
                            <div class="text-center">
                                <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
                                    <p>{{ __('apply.personal_title') }}</p>
                                </h1>
                            </div>
                            <div class="mt-12">
                                <form method="POST" action="{{ route('apply.update') }}">
                                    @csrf
                                    <div class="grid gap-4 lg:gap-6">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                            <div>
                                                <label for="firstname"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.personal_firstname') }} <span class="text-red-800">*</span>
                                                </label>
                                                <input type="text" name="firstname" id="firstname"
                                                    value="{{ $user->firstname }}"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                            </div>

                                            <div>
                                                <label for="lastname"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.personal_lastname') }} <span class="text-red-800">*</span>
                                                </label>
                                                <input type="text" name="lastname" id="lastname" value="{{ $user->lastname }}"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                            <div>
                                                <label for="middlename"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.personal_middlename') }} <span class="text-red-800">*</span>
                                                </label>
                                                <input type="text" name="middlename" id="middlename"
                                                    value="{{ $user->middlename }}"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    required />
                                            </div>

                                            <div>
                                                <label for="gender"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.personal_gender') }} <span class="text-red-800">*</span>
                                                </label>
                                                <select
                                                    class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                    name="gender" id="gender" required>
                                                    <option {{ $user->gender == 'male' ? 'selected' : '' }} value="male">
                                                        {{ __('apply.personal_gender_male') }}</option>
                                                    <option {{ $user->gender == 'female' ? 'selected' : '' }} value="female">
                                                        {{ __('apply.personal_gender_female') }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                            <div>
                                                <label for="datebirth"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.personal_datebirth') }} <span class="text-red-800">*</span>
                                                </label>
                                                <input type="date" name="datebirth" id="datebirth"
                                                    value="{{ $user->birthdate }}"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" />
                                            </div>

                                            <div>
                                                <label for="hs-company-website-hire-us-2"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.personal_phone') }} <span class="text-red-800">*</span>
                                                </label>
                                                <div class="relative">
                                                    <input mask="(99) 999 99 99" maskChar="null" id="phoneNumber" name="phoneNumber"
                                                        value="{{ $user->phone }}"
                                                        class="py-3 px-4 pl-20 block w-full border-gray-200 border-solid border rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                        placeholder="Telefon raqamingiz" />
                                                    <div class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px">
                                                        <label for="hs-inline-leading-select-country" class="sr-only">
                                                            {{ __('apply.personal_country') }} <span class="text-red-800">*</span>
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
                                            {{ __('apply.passport_title') }}</h3>
                                        <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                            <div>
                                                <label for="passport"
                                                    class="block text-sm text-gray-700 font-medium dark:text-white">
                                                    {{ __('apply.passport_input') }} <span class="text-red-800">*</span>
                                                </label>
                                                <input type="text" name="passport" id="passport" maxLength="14"
                                                    placeholder="AC 12345678" value="{{ $passportinfo->passport }}"
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
                                            {{ __('apply.personalupdate_submit') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endpermission
            @endif
        @else
            <x-ApplicantNav action='info' />

            <div class="max-w-3xl mx-auto">
                <div class="max-w-xl mx-auto">
                    <form method="POST" action="{{ route('applicant.details_save') }}">
                        @csrf
                        <div class="grid gap-4 lg:gap-6">
                            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                <div>
                                    <label for="deportment" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        {{ __('deportment.deportment_title') }} <span class="text-red-800">*</span>
                                    </label>
                                    <select name="deportment" id="deportment"
                                        class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        <option selected>{{ __('deportment.deportment_select') }}</option>
                                        @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="mt-6 grid">
                            <button type="submit"
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                {{ __('deportment.deportment_submit') }}
                            </button>
                        </div>
                        @include('components.error')
                    </form>
                </div>
            </div>
        @endif
    @endpermission
@endsection
