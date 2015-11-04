@extends("admin.layout")

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
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
                                    <th>Email Address</th>
                                    <th>Username</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($users as $user)

                                    <tr class="odd gradeX">

                                        <td><a href="{{route('admin.user.edit',$user->id)}}">{{ $user->first_name }}</a></td>

                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->type }}</td>
                                        <td>{{ $user->status }}</td>
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