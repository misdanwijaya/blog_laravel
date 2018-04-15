@extends('layouts.backend.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blog<small>All Post</small>
    </h1>
    <ol class="breadcrumb">
      <li class="active"><i class="fa fa-dashboard"></i> All Post</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-header">
                  <a href="{{route('backend.blog.create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Add New Post</a>
              </div>
            <!-- /.box-header -->
            <div class="box-body ">
                @if(session("message"))
                <div class="row">
                    <div class="col-sm-12">
                        <alert class="alert alert-info">{{session('message')}}</alert>
                    <div>
                </div>
                @endif
                <table class="table table-borderder">
                    <thead>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($posts as $item)
                        <tr>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->author->name}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','route'=>['backend.blog.delete_post',$item->id]]) !!}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a></button>

                                <a href="{{route('backend.blog.edit_dua',$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$posts->links()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
