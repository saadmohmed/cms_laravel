@extends('layouts.main')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item post-detail">
                    <div class="post-item-image">
                        <a href="#">
                            <img src="/img/{{$post->image}}" alt="">
                        </a>
                    </div>

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{$post->title}}</h1>

                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> $post->author->name</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> $post->date</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>

                            <p>{{$post->body}}</p>
                        </div>
                    </div>
                </article>

                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img alt="Author 1" src="/img/author.jpg" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">{{$post->author->name}}</a></h4>
                        <div class="post-author-count">
                          <a href="#">
                              <i class="fa fa-clone"></i>
                              90 posts
                          </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad aut sunt cum, mollitia excepturi neque sint magnam minus aliquam, voluptatem, labore quis praesentium eum quae dolorum temporibus consequuntur! Non.</p>
                      </div>
                    </div>
                </article>

                <article class="post-comments">
                    <h3><i class="fa fa-comments"></i> 5 Comments</h3>

                    <div class="comment-body padding-10">
                        <ul class="comments-list">
                            <li class="comment-item">
                                <div class="comment-heading clearfix">
                                    <div class="comment-author-meta">
                                        <h4>John Doe <small>January 14, 2016</small></h4>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nesciunt nulla est, atque ratione nostrum cumque ducimus maxime, amet enim tempore ipsam. Id ea, veniam ipsam perspiciatis assumenda magnam doloribus!</p>
                                    <p>Quibusdam iusto culpa, necessitatibus, libero sequi quae commodi ea ab non facilis enim vitae inventore laborum hic unde esse debitis. Adipisci nostrum reprehenderit explicabo, non molestias aliquid quibusdam tempore. Vel.</p>
                                </div>
                            </li>

                      
                        </ul>

                    </div>

                   

                </article>
            </div>
            
            @include('layouts.sidebar')
        </div>
    </div>

@section('content')