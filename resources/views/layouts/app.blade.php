<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
{{-- head --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

{{-- body --}}
<body>
    <div class="container-fluid">
        {{-- nav bar --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">@lang('messages.app')</a>
            {{-- language selector --}}
            <div class="ml-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('messages.language')
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="locale/en"><img src="{{ asset('images/en.png') }}" alt="English" class="flag-img mr-2">@lang('messages.en')</a>
                        <a class="dropdown-item" href="locale/fr"><img src="{{ asset('images/fr.png') }}" alt="French" class="flag-img mr-2">@lang('messages.fr')</a>
                        <a class="dropdown-item" href="locale/pt"><img src="{{ asset('images/pt.png') }}" alt="Portuguese" class="flag-img mr-2">@lang('messages.pt')</a>
                        <a class="dropdown-item" href="locale/ar"><img src="{{ asset('images/ar.png') }}" alt="Arabic" class="flag-img mr-2">@lang('messages.ar')</a>
                    </div>
                </div>
            </div>
        </nav>
        {{-- content --}}
        @yield('content')
    </div>
    {{-- bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
