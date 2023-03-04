@extends('layouts.ghost')
@section('title', __('auth.login_title'))

@section('content')
    <div class="flex h-full items-center py-16">
        <div class="w-full max-w-md mx-auto p-6">
            <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">

                <div class="p-4 sm:p-7">
                    @include('components/logo-auth')
                    <hr style="margin-top: 15px" />
                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">
                            {{ __('auth.login_title') }}
                        </h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('auth.login_donthave') }} &nbsp;
                            <a href="/register" class="text-blue-600 decoration-2 hover:underline font-medium dark:text-white">
                                {{ __('auth.login_signin') }}
                            </a>
                        </p>
                    </div>

                    <div class="mt-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="grid gap-y-4">
                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">
                                        {{ __('auth.login_email') }}
                                    </label>
                                    <div class="relative">
                                        <input type="text" id="email" name="email"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                            required aria-describedby="email-error" value="{{ old('email') }}"
                                            autocomplete="email" autofocus />
                                        <div
                                            class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                            <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('email')
                                        <p class="text-xs text-red-600 mt-2" id="email-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <div class="flex justify-between items-center">
                                        <label for="password" class="block text-sm mb-2 dark:text-white">
                                            {{ __('auth.login_password') }}
                                        </label>
                                        {{-- @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class="text-sm text-blue-600 decoration-2 hover:underline font-medium dark:text-white">
                                                Forgot password?
                                            </a>
                                        @endif --}}
                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                            required name="password" autocomplete="current-password"
                                            aria-describedby="password-error" />
                                        <div
                                            class="hidden absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3">
                                            <svg class="h-5 w-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="text-xs text-red-600 mt-2" id="password-error">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="flex items-center">
                                    <div class="flex">
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" />
                                    </div>
                                    <div class="ml-3">
                                        <label for="remember" class="text-sm dark:text-white">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                    {{ __('auth.login_submit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
