@extends('app')

@section('title', '編輯特定教職員生')

@section('record_theme', '編輯教職員生')

@section('record_contents')
    @include('message.list')
    {!! Form::model($Username, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\UsernamesController@update', $Username->id]]) !!}
    @include('usernames.form', ['submitButtonText'=>"更新教職員生資料"])
    {!! Form::close() !!}
@endsection