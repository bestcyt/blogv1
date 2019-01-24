@extends('home.base')

{{-- 注入顶部诗词 --}}
{{--@section('getPoetry')--}}
    {{--{{ $getPoetry }}--}}
{{--@endsection--}}

{{-- 注入内容哦 --}}
@section('content')
    @include("$view")
@endsection
