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

                                        {!! Form::label('services_in_city', 'Services in City:') !!}
                                        {!! Form::select('services_in_city', array('Tucson' => 'Tucson', 'Phoenix' => 'Phoenix'), null, array('class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">

                                        {!! Form::label('preferred_bedroom', 'Preferred Bedroom:') !!}
                                        {!! Form::select('preferred_bedroom', array('Studio 1' => 'Studio 1', '1-2' => '1-2', '2-3' => '2-3', '3+' => '3+', '4+' => '4+'), null, array('class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">

                                        {!! Form::label('current_address', 'Current Address:') !!}
                                        {!! Form::text('current_address', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">

                                        {!! Form::label('city', 'City:') !!}
                                        {!! Form::text('city', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">

                                        {!! Form::label('state', 'State:') !!}
                                        {!! Form::select('state', array('state' => 'state'), null, array('class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">

                                        {!! Form::label('zip_code', 'Zip Code:') !!}
                                        {!! Form::text('zip_code', null, ['class'=>'form-control']) !!}
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