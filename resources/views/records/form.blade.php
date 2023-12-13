<div class="form-group">
    {!! Form::label('uid', '教職員生編號：') !!}
    {!! Form::select('uid', $usernames, $usernameSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kid', '鑰匙編號：') !!}
    {!! Form::select('kid', $keys, $keySelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lend_date','借用日期:') !!}
    {!! Form::date('lend_date',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lend_time','借用時間:') !!}
    {!! Form::time('lend_time',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('back_date', '歸還日期：') !!}
    {!! Form::date('back_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('back_time', '歸還時間：') !!}
    {!! Form::time('back_time', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>