@extends('layout')
@section('title', 'Article  '.$article->title)

@section('content')
<div class="row col-2">
<a type=button class="btn btn-warning" href="{{route('articles.index')}}">Back to users</a>
<div>
<div class="row mt-2"></div>
<div class="card" style="width: 18rem;">

    <div class="card-body">
      <h5 class="card-title">Title: {{$article->title}}</h5>
      <h5 class="card-title">Author: {{$article->name}}</h5>
      <p class="card-text">Publishdate: {{$article->created_at->format('d/m/y H:i:s')}}</p>
      <p class="card-text">Updatedate: {{$article->updated_at->format('d/m/y H:i:s')}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Text: {{$article->description}}</li>
    </ul>

  </div>
    <div class="row mt-3">
        <div class="col">
            <a type=button class="btn btn-warning" href="{{route('articles.edit', $article)}}">Edit</a>
        </div>
    <div class="col">
<form method="POST" action="{{route('articles.destroy', $article)}}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" href="{{route('articles.destroy', $article)}}">Delete</button>

</form>
</div>
    </div>
@endsection
