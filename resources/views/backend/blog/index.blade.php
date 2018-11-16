@extends('layouts.backend')

@section('content')
<section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <h3>Welcome to MyBlog!</h3>
                    <p class="lead text-muted">Hallo {{ Auth::user()->name }}, Welcome to MyBlog</p>
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <td>Action</td>
                       <td>title</td>
                       <td>author</td>
                       <td>category</td>
                       <td>Body</td>
                       <td>Date</td>
                   </tr>
               </thead>
               <tbody>
               @foreach($posts as $post)
                <tr>
                    <td>
                    <a href="" class="btn btn-xs btn-default">edit</a>
                    <a href="" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author->name}}</td>
                    <td>{{$post->category}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->date}}</td>
                </tr>
                @endforeach
               </tbody>
           </table>
                    <div class="pull-right">
                       {{$posts->render()}}
                       {{$posts->count()}}
                    </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
@endsection
