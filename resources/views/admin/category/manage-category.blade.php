@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('body')
    <!-- Main content -->
    <section class="content">
        @if($massage=Session::get('massage'))
            <h1 class="text-center text-success">{{$massage}}</h1>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h2 class="box-title text-center text-info">Category Information Data Table</h2>
                        <br>
                    </div>
                    <div class="box-body text-center">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr >
                                <th class="text-center">Category Id</th>
                                <th class="text-center">Category Date</th>
                                <th class="text-center">Category name</th>
                                <th class="text-center">Category Description</th>
                                <th class="text-center">Publication Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            @foreach($Categories as $category)
                            <tbody>
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category_date}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_description}}</td>
                                <td>{{$category->publication_status ==1?'Published':'Unpublished'}}</td>
                                {{--@if($category->publication_status ==1)--}}
                                    {{--<a href="" class="btn btn-success btn-xs" title="Published">--}}
                                        {{--<span class="">Published</span>--}}
                                    {{--</a>--}}
                                {{--@else--}}
                                    {{--<a href="" class="btn btn-warning btn-xs" title="Unpublished">--}}
                                        {{--<span class="">Unpublished</span>--}}
                                    {{--</a>--}}
                                {{--@endif--}}

                                <td>
                                    @if($category->publication_status ==1)
                                    <a href="{{url('/category/Unpublished-category/'.$category->id)}}" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                    <a href="{{url('/category/published-category/'.$category->id)}}" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                    @endif
                                    <a href="{{url('/category/edit-category/'.$category->id)}}" class="btn btn-info btn-xs" title="Edit blog">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{url('/category/delete-Category/'.$category->id)}}" onclick="return confirm('Are you sure to delete this category');" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                            </tbody>
                                @endforeach
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