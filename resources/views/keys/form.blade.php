<div class="form-group">
    {!! Form::label('key', '鑰匙：') !!}
    {!! Form::text('key', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('room','教室:') !!}
    {!! Form::text('room',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>