{!! Form::hidden('user_id', 1) !!}
<div class="form-group">

    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class'=>'form-control']) !!} <!-- name, default, additional params -->
</div>

<div class="form-group">

    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('company', 'Company:') !!}
    {!! Form::select('company', array('ABC Apartments' => 'ABC Apartments', 'ABC Management Srvc' => 'ABC Management Srvc'), null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">

    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('email', 'Email Address:') !!}
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('email_confirmation', 'Confirm Email Address:') !!}
    {!! Form::email('email_confirmation', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>


<div class="form-group">

    {!! Form::button('Submit', array('type' => 'submit', 'class'=>'btn btn-default')) !!}
    {!! Form::button('Reset', array('type' => 'reset', 'class'=>'btn btn-default')) !!}

</div>