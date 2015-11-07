{!! Form::hidden('user_id', 1) !!}
<div class="form-group">

    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class'=>'form-control']) !!} <!-- name, default, additional params -->
</div>

<div class="form-group">

    {!! Form::label('cross_street', 'Cross Street:') !!}
    {!! Form::text('cross_street', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('square_feet', 'Square Ft.:') !!}
    {!! Form::text('square_feet', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('deposit_price', 'Deposit Price:') !!}
    {!! Form::text('deposit_price', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('last_price', 'Last Price:') !!}
    {!! Form::text('last_price', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('type_of_dwelling', 'Type of Dwelling:') !!}
    {!! Form::text('type_of_dwelling', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('lease', 'Lease:') !!}
    {!! Form::text('lease', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('bedroom', 'Bedroom:') !!}
    {!! Form::text('bedroom', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('bathroom', 'Bathroom:') !!}
    {!! Form::text('bathroom', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('carport', 'Carport:') !!}
    {!! Form::text('carport', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('garage', 'Garage:') !!}
    {!! Form::text('garage', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('furnished', 'Furnished:') !!}
    {!! Form::radio('furnished', 'Yes') !!} Yes
    {!! Form::radio('furnished', 'No') !!} No
    {!! Form::radio('furnished', 'Semi Furnished') !!} Semi Furnished
</div>


<div class="form-group">

    {!! Form::label('pets', 'Pets:') !!}
    {!! Form::radio('pets', 'Yes') !!} Yes
    {!! Form::radio('pets', 'No') !!} No
</div>

<div class="form-group">

    {!! Form::label('features', 'Features:') !!}
    {!! Form::textarea('features', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('schools', 'Schools:') !!}
    {!! Form::textarea('schools', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('photo', 'Photos:') !!}
    {!! Form::file('photo', null) !!}
</div>

<div class="form-group">

    {!! Form::label('map', 'Map:') !!}
    {!! Form::text('map', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('owner', 'Owner:') !!}
    {!! Form::text('owner', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('contact_number', 'Contact Number:') !!}
    {!! Form::text('contact_number', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">

    {!! Form::label('file', 'File Upload:') !!}
    {!! Form::file('file', null) !!}
</div>

<div class="form-group">

    {!! Form::button('Submit', array('type' => 'submit', 'class'=>'btn btn-default')) !!}
    {!! Form::button('Reset', array('type' => 'reset', 'class'=>'btn btn-default')) !!}

</div>