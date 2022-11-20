<!DOCTYPE HTML>
<html>

@include('template.partials._head')
<body>
@include('template.partials._cache')
@include('template.partials._header')
@include('template.partials._navbar')
@include('template.partials._filter')

@yield('content')

@include('template.partials._footer')
@include('template.partials._scripts')


</body>


</html>
