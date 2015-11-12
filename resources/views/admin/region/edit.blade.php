@extends("admin.layout")

@section('content')

    <div id="page-wrapper">

        <div id="renter" class="tab-pane">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Region</h1>
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

                                     {!! Form::model($region,['route'=>["admin.region.update",$region->id],'method'=>"PUT",'enctype'=>'multipart/form-data']) !!}


                                    <div class="form-group">

                                        {!! Form::label('status', 'Status:') !!}
                                        {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), null, array('class' => 'form-control')) !!}
                                    </div>

                                     @include('admin.region.form')


                                    {!! Form::close() !!}

                                    <!-- show errors -->
                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

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







