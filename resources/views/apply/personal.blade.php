@extends('layouts.ghost')
@section('title', __('apply.personal_title'))
@section('content')

<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-xl mx-auto">
      <div class="text-center">
        @include('components/logo-auth')
        <hr style="margin-top: 15px" />

        <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
          <p>{{ __('apply.personal_title') }}</p>
        </h1>
      </div>

      <div class="mt-12">
        <form method="POST" action="{{ route('apply.personal') }}">
            @csrf
          <div class="grid gap-4 lg:gap-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
              <div>
                <label
                  for="firstname"
                  class="block text-sm text-gray-700 font-medium dark:text-white"
                >
                {{ __('apply.personal_firstname') }} <span class="text-red-800">*</span>
                </label>
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  required
                />
              </div>

              <div>
                <label
                  for="lastname"
                  class="block text-sm text-gray-700 font-medium dark:text-white"
                >
                {{ __('apply.personal_lastname') }} <span class="text-red-800">*</span>
                </label>
                <input
                  type="text"
                  name="lastname"
                  id="lastname"
                  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  required
                />
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
              <div>
                <label
                  for="middlename"
                  class="block text-sm text-gray-700 font-medium dark:text-white"
                >
                {{ __('apply.personal_middlename') }} <span class="text-red-800">*</span>
                </label>
                <input
                  type="text"
                  name="middlename"
                  id="middlename"
                  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  required
                />
              </div>

              <div>
                <label
                  for="gender"
                  class="block text-sm text-gray-700 font-medium dark:text-white"
                >
                {{ __('apply.personal_gender') }} <span class="text-red-800">*</span>
                </label>
                <select
                  class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                  name="gender"
                  id="gender"
                  required
                >
                  <option selected>{{ __('apply.personal_gender_select') }}</option>
                  <option value="male">{{ __('apply.personal_gender_male') }}</option>
                  <option value="female">{{ __('apply.personal_gender_female') }}</option>
                </select>
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
              <div>
                <label
                  for="datebirth"
                  class="block text-sm text-gray-700 font-medium dark:text-white"
                >
                {{ __('apply.personal_datebirth') }} <span class="text-red-800">*</span>
                </label>
                <input
                  type="date"
                  name="datebirth"
                  id="datebirth"
                  class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                />
              </div>

              <div>
                <label
                  for="phoneNumber"
                  class="block text-sm text-gray-700 font-medium dark:text-white dark:border-gray-700"
                >
                  {{ __('apply.personal_phone') }} <span class="text-red-800">*</span>
                </label>
                <div class="relative">
                  <input
                    mask="(99) 999 99 99"
                    maskChar={null}
                    id="phoneNumber"
                    name="phoneNumber"
                    class="py-3 px-4 pl-20 block w-full border-gray-200 border-solid border shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:border-gray-700"
                    placeholder="Telefon raqamingiz"
                  />
                  <div class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px dark:border-gray-700">
                    <label
                      for="hs-inline-leading-select-country"
                      class="sr-only"
                    >
                    {{ __('apply.personal_country') }} <span class="text-red-800">*</span>
                    </label>
                    <select
                      id="hs-inline-leading-select-country"
                      name="hs-inline-leading-select-country"
                      class="block w-full border-transparent rounded-md focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-800"
                    >
                      <option value="uz" selected>
                        UZ
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-6 grid">
            <button
              type="submit"
              class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
            >
              {{ __('apply.personal_next') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
