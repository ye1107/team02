@extends('app')

@section('title', '編輯特定鑰匙借用紀錄')

@section('record_theme', '編輯鑰匙借用紀錄')

@section('record_contents')
    @include('message.list')
    {!! Form::model($record, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\RecordsController@update',$record->id]]) !!}
    @include('records.form', ['submitButtonText'=>"更新鑰匙借用紀錄資料"])
    {!! Form::close() !!}
@endsection
