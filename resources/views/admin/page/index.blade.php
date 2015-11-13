@extends("admin.layout")

@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <h2>Latest Users</h2>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-users">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($users as $user)

                                        <tr class="odd gradeX">
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->status }}</td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.dataTable_wrapper -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <h2>Latest Listings</h2>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-listing">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Listing Address</th>
                                        <th>Type of Dwelling</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($listings as $listing)

                                        <tr class="odd gradeX">

                                            <td><a href="{{route('admin.listing.edit',$listing->id)}}">{{ $listing->id }}</a></td>

                                            <td>{{ $listing->address }}</td>
                                            <td>{{ $listing->type_of_dwelling }}</td>
                                            <td>{{ $listing->status }}</td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.dataTable_wrapper -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->


            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


@stop