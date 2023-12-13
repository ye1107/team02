@extends('app')

@section('title','建立鑰匙借用紀錄表單')

@section('record_theme','建立鑰匙借用紀錄表單')

@section('record_contents')
        {!! Form::open(['url' => 'records/store']) !!}
        @include('records.form', ['submitButtonText'=>'新增鑰匙借用紀錄資料'])
        {!! Form::close() !!}
@endsection