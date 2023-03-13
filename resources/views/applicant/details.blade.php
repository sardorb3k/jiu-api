@extends('layouts.app')
@section('title', __('deportment.education_title'))
@section('content')

    @permission('applicant-details')
            <x-ApplicantNav action='info' />

            <div class="max-w-3xl mx-auto">
                <div class="max-w-xl mx-auto">
                    <form method="POST" action="{{ route('applicant.details_save') }}">
                        @csrf
                        <div class="grid gap-4 lg:gap-6">
                            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                                <div>
                                    <label for="qualification"
                                        class="block text-sm text-gray-700 font-medium dark:text-white">
                                        {{ __('applicant.qualification_title') }} <span class="text-red-800">*</span>
                                    </label>
                                    <label for="qualification"
                                        class="flex p-3 block w-full bg-white border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        <span
                                            class="text-sm text-gray-500 dark:text-gray-400">{{ __('applicant.qualification_desc') }}</span>
                                        <input type="checkbox" name="qualification" {{ $enrollment ? 'disabled checked' : '' }}
                                            class="shrink-0 ml-auto mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            id="qualification">
                                    </label>
                                    @if (!$enrollment)
                                        <div class="mt-5" id="upload_file" style="display: none ;">
                                            <label for="qualification"
                                                class="block text-sm text-gray-700 font-medium dark:text-white">
                                                {{ __('applicant.qualification_file') }} <span class="text-red-800">*</span>
                                            </label>
                                            <label for="qualification_file" class="sr-only">Choose file</label>
                                            <input type="file" name="qualification_file" id="qualification_file" accept="image/* , application/pdf"
                                                class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                                            file:bg-transparent file:border-0
                                            file:bg-gray-100 file:mr-4
                                            file:py-3 file:px-4
                                            dark:file:bg-gray-700 dark:file:text-gray-400">
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <label for="deportment" class="block text-sm text-gray-700 font-medium dark:text-white">
                                        {{ __('deportment.deportment_title') }} <span class="text-red-800">*</span>
                                    </label>
                                    <select name="deportment" id="deportment" required {{ $enrollment ? 'disabled': '' }}
                                        class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                        @foreach ($data as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($enrollment)
                                                {{ $enrollment->department_id == $item->id ? 'selected': '' }}
                                                @endif
                                                >{{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        @if (!$enrollment)
                        <div class="mt-6 grid">
                            <button type="submit"
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                                {{ __('deportment.deportment_submit') }}
                            </button>
                        </div>
                        @endif
                        <script>
                            $(function() {

                                        $("#qualification").on("click", function() {
                                            $("#upload_file").toggle(this.checked);
                                        });

                                    });
                        </script>
                        @include('components.error')
                    </form>
                </div>
            </div>
    @endpermission
@endsection
