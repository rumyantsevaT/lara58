@extends('app')

@section('content')
<h1>
    Contact page: Call me, {{ $name }}
</h1>

@stop

@section('footer')
    <script>
        alert('Contact form script');
    </script>
@stop