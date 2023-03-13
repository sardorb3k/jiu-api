@extends('layouts.app')
@section('title', __('deportment.exam_title'))
@section('content')
    <x-ApplicantNav action='exam' />
    <div class="max-w-3xl mx-auto">
        <div class="max-w-xl mx-auto">
            @if (!$enrollmentexamday)
                <form method="POST" action="{{ route('applicant.exam_save') }}">
                    @csrf
            @endif
            <div class="grid gap-4 lg:gap-6">
                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">
                    <div>

                        <label for="deportment" class="block text-sm text-gray-700 font-medium dark:text-white">
                            {{ __('deportment.exam_day') }} <span class="text-red-800">*</span>
                        </label>
                        <select name="deportment" id="deportment" required {{ $enrollmentexamday ? 'disabled' : '' }}
                            class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->date }}</option>
                                @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <div class="mt-6 grid">
                @if (!$enrollmentexamday)
                    <button type="submit"
                        class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">
                        {{ __('deportment.deportment_submit') }}
                    </button>
                @endif
            </div>

            @if (!$enrollmentexamday)
                </form>
            @endif
        </div>
    </div>
@endsection
