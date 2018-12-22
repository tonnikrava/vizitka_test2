@extends('default.maintemplate')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')
    @include('default.content')
@endsection

@section('footer')
    @parent
@endsection