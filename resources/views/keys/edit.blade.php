@extends('app')

@section('title', '編輯特定鑰匙編號和地點')

@section('record_theme', '編輯鑰匙編號和地點')

@section('record_contents')
    {!! Form::model($Key, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\KeysController@update', $Key->id]]) !!}
    @include('keys.form', ['submitButtonText'=>"更新鑰匙編號和地點資料"])
    {!! Form::close() !!}
@endsection