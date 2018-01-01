@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('body')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title text-center">Blog Information Data Table</h3>
                        <br>
                    </div>
                    <div class="box-body text-center">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr >
                                <th class="text-center">Blog Id</th>
                                <th class="text-center">Blog Date</th>
                                <th class="text-center">Blog title</th>
                                <th class="text-center">Blog Description</th>
                                <th class="text-center">Publication Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Demo</td>
                                <td>demo</td>
                                <td>demo</td>
                                <td>demo</td>
                                <td>
                                    <span class="label label-success">Published</span>
                                    <span class="label label-warning">Unpublished</span>

                                </td>
                                <td>

                                    <a href="#" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>

                                    <a href="#" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>

                                    <a href="#" class="btn btn-info btn-xs" title="Edit blog">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection