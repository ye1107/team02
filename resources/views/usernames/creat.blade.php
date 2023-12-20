@extends('app')

@section('title','建立教職員生表單')

@section('record_theme','建立教職員生表單')

@section('record_contents')
        @include('message.list')
        {!! Form::open(['url' => 'usernames/store']) !!}
        @include('usernames.form', ['submitButtonText'=>'新增教職員生資料'])
        {!! Form::close() !!}
@endsection
