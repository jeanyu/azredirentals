@extends("admin.layout")

@section('content')

    <div id="page-wrapper">

        <div id="renter" class="tab-pane">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Landlord</h1>
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


                                    {!! Form::model($landlord,['route'=>["admin.landlord.update",$landlord->id],'method'=>"PUT",'enctype'=>'multipart/form-data']) !!}


                                    @include('admin.landlord.form')


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







