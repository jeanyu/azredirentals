{!! Form::hidden('user_id', 1) !!}
<div class="form-group">

    {!! Form::label('name', 'Region Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!} <!-- name, default, additional params -->
</div>

<div class="form-group">

    {!! Form::button('Submit', array('type' => 'submit', 'class'=>'btn btn-default')) !!}
    {!! Form::button('Reset', array('type' => 'reset', 'class'=>'btn btn-default')) !!}

</div>