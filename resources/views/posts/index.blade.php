@extends ('layouts.app')
@section('content')
<h2>Posts</h2>

    @if(count($posts)>0)
    <div class="card">
        <ul class="list-group list-group-flush">
        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-4"> 
                <img style="width :50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            </div>
            <div class="col-md-8"> 
                <h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
        <small>Written on {{$post->created_at}}</small>
            </div>

        </div>
    
      
        @endforeach
        </ul>
      </div>

    @else
    @endif

@endsection