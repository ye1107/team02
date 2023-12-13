<div class="form-group">
    {!! Form::label('number', '教職員生編號：') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name','教職員生姓名:') !!}
    {!! Form::text('name',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('photo','人臉照片檔名路徑:') !!}
    {!! Form::text('photo',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>