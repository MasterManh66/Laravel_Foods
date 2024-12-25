@extends('layouts.app')

@section('content')
    <h1>This is Index Page</h1>
    {{print_r(URL(''))}}
    <img src="{{ asset('storage/Thai_Lan_DPTK.jpg ')}}"
        width="300"
        height="500" alt="">
@endsection