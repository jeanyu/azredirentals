@extends("admin.layout")

@section('content')



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Renters</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!--<div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                     /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Services in City</th>
                                    <th>Current Address</th>
                                    <th>Email Address</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($renters as $renter)

                                    <tr class="odd gradeX">
                                        <td>{{ $renter->first_name }}</td>
                                        <td>{{ $renter->last_name }}</td>
                                        <td>{{ $renter->services_in_city }}</td>
                                        <td>{{ $renter->current_address }}</td>
                                        <td>{{ $renter->email }}</td>
                                    </tr>



                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>


    </div>
    <!-- /#page-wrapper -->



@stop