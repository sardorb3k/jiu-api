<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Japanese International University (JIU) - Yapon standartlariga asoslangan xalqaro universitet. Qo'ng'iroq qiling, to'liq ma'lumot oling: +998 (71) 203-02-20" />
    <meta name="keywords"
        content="university, universitet, institut, japan, yaponiya, japanese, international, xalqaro, o'qish, diplom, business, biznes, accounting, finance, buxgalteriya, moliya, pedagogika, turizm, tourism, it, dasturlash, programming, teaching, best, top" />
    <meta property="og:url" content="jiuuni.uz" />
    <meta property="og:title" content="Japanese International University (JIU)" />
    <meta property="og:description"
        content="Japanese International University (JIU) - Yapon standartlariga asoslangan xalqaro universitet. Qo'ng'iroq qiling, to'liq ma'lumot oling: +998 (71) 203-02-20" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="jiuuni.uz">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <script type="text/javascript"  src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body>

    <x-header />

    @yield('content')
    <script>
        async function archiveFunction(element) {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Are you sure?",
                    text: "Please enter a reason.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, archive it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        await element.closest('form').submit();
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        }
    </script>
    <x-footer />
    @vite('resources/js/app.js')
    <script type="text/javascript"  src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.inputmask.min.js') }}"></script>

</body>

</html>
