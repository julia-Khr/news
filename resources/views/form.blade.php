@extends('layout')

@section('title', isset($article) ? 'Update  ' .$article->title : 'Create article')

@section('content')
<div class="row col-2 mt-3">
    <a type=button class="btn btn-warning" href="{{route('articles.index')}}">Back to users</a>
</div>

<form method="POST"
    @if (isset($article))
    action="{{route('articles.update', $article)}}"
    @else
    action="{{route('articles.store')}}"
    @endif>
    @csrf
    @isset($article)
    @method('PUT')
    @csrf
    @endisset

    <div class="row g-3 mt-5">
        <div class="col-sm-3">
                <input name="title"
                value="{{old('title',isset($article) ? $article->title : null)}}"
                type="text" id="title" class="form-control" placeholder="Title" aria-label="title">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

            </div>
           </div>

           <div class="row g-3 mt-5">
            <div class="col-sm-3">


                </div>
               </div>

            <div class="row mt-3">
                <div class="col-sm-3">
                    <input name="publishdate"
                    value="{{old('publishdate',isset($article) ? $article->publishdate : null)}}"
                    type="text" class="form-control" placeholder="Publishdate" aria-label="publishdate">
                    @error('publishdate')

                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-7">
                    <textarea name="description"
                    type="text" class="form-control" id="description"
                    placeholder="Description" aria-label="description">{{old('description',isset($article) ? $article->description : null) }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm">
                    <button type="submit" class="btn btn-warning">Save</button>
                </div>
            </div>

    </form>
@endsection

