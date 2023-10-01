<div>
    <h1>Blog Posts</h1>
    @foreach($posts as $post)
    <div class="card offset-3 col-6">
        <h5 class="card-header">{{$loop->index}}</h5>
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach
    <div x-intersect="$wire.loadMore()"></div>
</div>
