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
