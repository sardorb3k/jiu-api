@extends('layouts.ghost')
@section('title', 'Apply')
@section('content')
    <div class="flex flex-auto items-center justify-center h-screen">
        <div class="text-center">
            @include('components/logo-auth')
            <div class="mt-6	animate-spin inline-block w-6 h-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full"
                role="status" aria-label="loading">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <script>
        var interval_name = setInterval(call_back,2000);

        function call_back() {
            document.location.href = "{{ $data }}";
            clearInterval(interval_name);
        }
    </script>
@endsection
