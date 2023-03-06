@extends('layouts.ghost')
@section('title', __('apply.contact_title'))
@section('content')

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                @include('components/logo-auth')
                <hr style="margin-top: 15px" />

                <h1 class="text-3xl font-bold text-gray-800 sm:text-2xl dark:text-white">
                    <p>{{ __('apply.contact_title') }}</p>
                </h1>
            </div>

            <div class="mt-12">
                <form method="POST" action="{{ route('apply.contactinformation') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 lg:gap-6">
                        <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                            <div>
                                <label for="region" class="block text-sm text-gray-700 font-medium dark:text-white">
                                    {{ __('apply.contact_region') }} <span class="text-red-800">*</span>
                                </label>
                                <select name="region" id="region" required class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    <option value="">{{ __('apply.contact_region_select') }}</option>
                                    @foreach ($region as $item)
                                        <option value="{{ $item->id }}">{{ $item->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="state" class="block text-sm text-gray-700 font-medium dark:text-white">
                                    {{ __('apply.contact_state') }} <span class="text-red-800">*</span>
                                </label>
                                <select name="state" id="state" required class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    <option value="">{{ __('apply.contact_state_select') }}</option>
                                </select>
                            </div>

                            <div>
                                <label for="district" class="block text-sm text-gray-700 font-medium dark:text-white">
                                    {{ __('apply.contact_district') }} <span class="text-red-800">*</span>
                                </label>
                                <select name="district" id="district" required class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    <option value="">{{ __('apply.contact_district_select') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

                    <script>
                        $(document).ready(function() {
                            $('select[name="region"]').on('change', function() {
                                var country_id = $(this).val();
                                if (country_id) {
                                    $.ajax({
                                        url: "{{ url('/apply/getRegion/') }}/" + country_id,
                                        type: "GET",
                                        dataType: "json",
                                        success: function(data) {
                                            console.log(data);
                                            $('select[name="state"]').empty();
                                            $.each(data.data, function(key, value) {
                                                $('select[name="state"]').append('<option value="' +
                                                    value.id + '">' + value.name_uz + '</option>');
                                            });
                                        }
                                    });
                                } else {
                                    $('select[name="state"]').empty();
                                }
                            });
                            $('select[name="state"]').on('change', function() {
                                var state_id = $(this).val();
                                if (state_id) {
                                    $.ajax({
                                        url: "{{ url('/apply/getDistricts/') }}/" + state_id,
                                        type: "GET",
                                        dataType: "json",
                                        success: function(data) {
                                            $('select[name="district"]').empty();
                                            $.each(data.data, function(key, value) {
                                                console.log(data);
                                                $('select[name="district"]').append('<option value="' +
                                                    value.id + '">' + value.name_uz + '</option>');
                                            });
                                        }
                                    });
                                } else {
                                    $('select[name="district"]').empty();
                                }
                            });
                        });
                    </script>
                    <div class="bg-blue-500 text-sm text-white rounded-md p-4 mt-5" role="alert">
                        <span class="font-bold">{{ __('apply.personal_status') }}</span>
                    </div>
                    <div class="mt-6 grid">
                        <button type="submit"
                            class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                            {{ __('apply.contact_submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
