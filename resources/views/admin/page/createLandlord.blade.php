@extends("admin.layout")

@section('content')

        <div id="page-wrapper">



                <div id="landlord" class="tab-pane active">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add Landlord</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            {!! Form::open(['url'=>route('admin.landlord.store'),'method'=>'POST']) !!}

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

                                                    {!! Form::label('email_address', 'Email Address:') !!}
                                                    {!! Form::email('email_address', null, ['class'=>'form-control']) !!}
                                                </div>

                                                <div class="form-group">

                                                    {!! Form::label('confirm_email_address', 'Confirm Email Address:') !!}
                                                    {!! Form::email('confirm_email_address', null, ['class'=>'form-control']) !!}
                                                </div>
                                                
                                                <div class="form-group">

                                                    {!! Form::label('password', 'Password:') !!}
                                                    {!! Form::password('password', ['class'=>'form-control']) !!}
                                                </div>


                                                <div class="form-group">

                                                    {!! Form::button('Submit', array('type' => 'submit', 'class'=>'btn btn-default')) !!} 
                                                    {!! Form::button('Reset', array('type' => 'reset', 'class'=>'btn btn-default')) !!} 
                                                   
                                                </div>

                                            {!! Form::close() !!}
                                            
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>



            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

@stop







