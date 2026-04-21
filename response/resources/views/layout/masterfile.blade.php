<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/master.css') }}" rel="stylesheet">
    <!-- link the master.css file to make universal or global styling in all the child blade files -->
    <title>@yield('title','lpu')</title>
</head>
<body>
    <header style="background-color:lightblue; padding:10px; text-align:center">
        <h1>{{__('masterfile.heading')}}</h1>
        <nav style="text-align:center">
            <a href="/" style="margin: 0 15px; text-decoration:none; color:black;">Welcome</a>
            <a href="/about-us" style="margin: 0 15px; text-decoration:none; color:black;">About Us</a>
            <a href="/registerformpost" style="margin: 0 15px; text-decoration:none; color:black;">Login</a>
            <a href="{{ route('insect') }}" style="color:black">Insect</a>

        </nav>
    </header>
    <div>
        @hasSection('content')

        @yield('content')
        @else
        <h3 style="color:red">No content found</h3>
        @endif
    </div>
    <footer>
        <p style="background-color:lightblue; padding:10px; text-align:center;"> Copyright c 2024 Lovely Professional University. Visit us at: <a href="https://www.lpu.in/">www.lpu.in</a></p>
    </footer>
</body>
</html>