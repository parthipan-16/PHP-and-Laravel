<html>

<head>
    <title>
        My To-Do App List
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        @yield('content')
        <x-todo />
        @if(session('success'))
        <p>{{session('success')}}</p>
        @endif
    </div>

</body>

</html>