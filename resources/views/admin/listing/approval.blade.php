@extends("admin.layout")

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">For Approval Listings</h1>
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
                                    <th>ID</th>
                                    <th>Address</th>
                                    <th>Type</th>
                                    <th>Owner Name</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($listings as $listing)

                                    @if($listing->status == "Inactive")

                                        <tr class="odd gradeX">

                                            <td><a href="{{route('admin.listing.edit',$listing->id)}}">{{ $listing->id }}</a></td>

                                            <td>{{ $listing->address }}</td>
                                            <td>{{ $listing->type_of_dwelling }}</td>
                                            <td>{{ $listing->owner_name }}</td>
                                            <td>{{ $listing->contact_number }}</td>
                                            <th>{{ $listing->status }}</th>
                                            <th><a href="{{route('admin.listing.delete',$listing->id)}}">Delete</a></th>
                                        </tr>
                                    @endif
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