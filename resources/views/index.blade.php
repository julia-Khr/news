@extends('layout')

@section('title', 'Articles')
@section('content')
<a class="btn btn-outline-warning" href="{{route('articles.create')}}" role="button">Add new article</a>
<table class="table caption-top">
    <caption>Number of articles: {{$articlesCount}}</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Publishdate</th>
        <th scope="col">Content</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)

      <tr>
        <th scope="row">{{$article->id}}</th>
        <td>
            <a href="{{route('articles.show', $article)}}">{{$article->title}}</a>
        </td>
        <td>
            <a href="{{route('articles.show', $article)}}">{{$article->publishdate}}</a>
        </td>
        <td>
            <a href="{{route('articles.show', $article)}}">{{$article->description}}</a>
            </td>

        <td>
            <a type=button class="btn btn-warning" href="{{route('articles.edit', $article)}}">Edit</a>
        </td>
        <td>
        <form method="POST" action="{{route('articles.destroy', $article)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" href="{{route('articles.destroy', $article)}}">Delete</button>

        </form>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
  {{$articles->links()}}
@endsection
