@extends('back.base')

{{-- 注入内容哦 --}}
@section('content')
    @include('back.content.'.$view)
@endsection
