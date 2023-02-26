@extends('layouts.app')
@section('title', __('contact.site_title'))
@section('content')

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            @permission('personal-student')
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
                        <p>Personal Information</p>
                    </h1>
                </div>
                <div class="mt-12">
                    <form method="POST" action="{{ route('apply.update') }}">
                        @csrf
                        <div class="grid gap-4 lg:gap-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="firstname" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        First Name <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="firstname" id="firstname" value="{{ $user->firstname }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>

                                <div>
                                    <label for="lastname" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Last Name <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="lastname" id="lastname" value="{{ $user->lastname }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="middlename" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Middle Name <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="middlename" id="middlename" value="{{ $user->middlename }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>

                                <div>
                                    <label for="gender" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Gender <span class="text-red-800">*</span>
                                    </label>
                                    <select
                                        class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        name="gender" id="gender" required>
                                        <option {{ $user->gender == 'male' ? 'selected' : '' }} value="male">Male</option>
                                        <option {{ $user->gender == 'female' ? 'selected' : '' }} value="female">Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="datebirth" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Date of birth <span class="text-red-800">*</span>
                                    </label>
                                    <input type="date" name="datebirth" id="datebirth" value="{{ $user->birthdate }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" />
                                </div>

                                <div>
                                    <label for="hs-company-website-hire-us-2"
                                        class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Phone number <span class="text-red-800">*</span>
                                    </label>
                                    <div class="relative">
                                        <input mask="(99) 999 99 99" maskChar="null" id="phoneNumber" name="phoneNumber"
                                            value="{{ $user->phone }}"
                                            class="py-3 px-4 pl-20 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            placeholder="Telefon raqamingiz" />
                                        <div class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px">
                                            <label for="hs-inline-leading-select-country" class="sr-only">
                                                Country <span class="text-red-800">*</span>
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
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Passport information</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                <div>
                                    <label for="firstname" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Passport Series <span class="text-red-800">*</span> /
                                        Passport Number <span class="text-red-800">*</span>
                                    </label>

                                    <div class="sm:flex rounded-md shadow-sm">
                                        <input type="text" name="passportseries" id="passportseries" maxLength="2"
                                            placeholder="AA" value="{{ $passportinfo->passportseries }}"
                                            class="py-3 px-4 w-20	block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            required />
                                        <input type="text" name="passportnumber" id="passportnumber" maxLength="7"
                                            placeholder="1234567" value="{{ $passportinfo->passportnumber }}"
                                            class="py-3 px-4 pr-11 block w-full border-gray-200 shadow-sm -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="pinfl" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        PINFL <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="pinfl" id="pinfl" maxLength="14"
                                        placeholder="1234567890123" value="{{ $passportinfo->pinfl }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>

                                <div>
                                    <label for="placeissue" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Place Of Issue <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="placeissue" id="placeissue" placeholder="SAMARQAND IIB"
                                        value="{{ $passportinfo->placeissue }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                <div>
                                    <label for="givenby" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Given by IIB of (UZB:Kim Tomonidan Berilgan)
                                        <span class="text-red-800">*</span>
                                    </label>
                                    <input type="text" name="givenby" id="givenby"
                                        value="{{ $passportinfo->givenby }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="dateissue" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Date Of Issue <span class="text-red-800">*</span>
                                    </label>
                                    <input type="date" name="dateissue" id="dateissue"
                                        value="{{ $passportinfo->dateissue }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>

                                <div>
                                    <label for="dateexpiration"
                                        class="block text-sm text-gray-700 font-medium dark:text-white">
                                        Date Of Expiration <span class="text-red-800">*</span>
                                    </label>
                                    <input type="date" name="dateexpiration" id="dateexpiration"
                                        value="{{ $passportinfo->dateexpiration }}"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 grid">
                            <button type="submit"
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            @endpermission
        </div>
    </div>
    <script>
        $(".phoneNumber").inputmask({
            "mask": "(99) 999 99 99"
        });
    </script>
@endsection
