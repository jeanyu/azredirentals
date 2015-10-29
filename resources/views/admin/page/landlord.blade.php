@extends("admin.layout")

@section('content')



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Landlords</h1>
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
                                    <th>Company</th>
                                    <th>Phone</th>
                                    <th>Email Address</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($landlords as $landlord)

                                    <tr class="odd gradeX">
                                        <td>{{ $landlord->first_name }}</td>
                                        <td>{{ $landlord->last_name }}</td>
                                        <td>{{ $landlord->company }}</td>
                                        <td>{{ $landlord->phone }}</td>
                                        <td>{{ $landlord->email }}</td>
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