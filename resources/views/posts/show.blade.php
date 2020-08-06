@extends ('layouts.app')
@section('content')
<a class="btn btn-primary" href="/posts">Go back to Posts</a>
<hr>

<h2>{{$post->title}}</h2>
<div class="row">
    <div class="col-md-12">
        <img style="width :50%" src="/storage/cover_images/{{$post->cover_image}}" alt=""> 
    </div>
</div>
<p>{{$post->body}}</p>
<hr>
<small>Written on {{$post->created_at}}</small>
<hr>


@if(!Auth::guest())
    @if(Auth::User()->id == $post->user_id)
    

            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
            {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method' =>'POST','class'=>'float-right']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger '])}}

            {!! Form::close() !!}
        @endif
@endif

@endsection