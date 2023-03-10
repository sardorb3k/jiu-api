@extends('layouts.app')
@section('title', __('student.title'))
@section('content')


    <div class="max-w-[85rem] mx-auto">
        <!-- Table Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        {{ __('student.title') }}
                                    </h2>
                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left border-l border-gray-200 dark:border-gray-700">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                {{ __('student.name') }}
                                            </span>
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                {{ __('student.phone') }}
                                            </span>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="h-px w-auto whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                                                        <a href="{{ route('students.show', $item->id) }}">
                                                            {{ $item->firstname ?? '****' }} {{ $item->lastname  ?? '****' }}</a></span>
                                                </div>
                                            </td>
                                            <td class="h-px w-auto whitespace-nowrap">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="text-sm text-gray-800 dark:text-gray-200">{{ $item->phone ?? '*****' }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table -->

                            <!-- Footer -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                                <div>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ __('student.total') }} <span
                                        class="font-semibold text-gray-800 dark:text-gray-200">{{ count($data) }}</span>
                                    </p>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table Section -->
    </div>
@endsection
