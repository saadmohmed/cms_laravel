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
       
                   {!! Form::model($post, [
                    'method' => 'Post',
                    'route' => 'backend.blog.store'
                   ])!!}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
@endsection
