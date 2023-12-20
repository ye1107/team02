@extends('app')

@section('title','建立鑰匙編號和地點表單')

@section('record_theme','建立鑰匙編號和地點表單')

@section('record_contents')
        @include('message.list')
        {!! Form::open(['url' => 'keys/store']) !!}
        @include('keys.form', ['submitButtonText'=>'新增鑰匙編號和地點資料'])
        {!! Form::close() !!}
@endsection