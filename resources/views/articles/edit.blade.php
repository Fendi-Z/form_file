@extends('layouts.app')

@section('content')
    <div class="container mt-5 p-3 bg-light shadow">
        <form action="{{ url('/articles/'. $article->id) }}" enctype="multipart/form-data" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="mb-3 form-floating">
                    <input type="text" value="{{ $article->title }}" name="title" id="title" required="required" placeholder="title" class="form-control">
                    <label for="title" class="form-label">Title</label>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3 form-floating">
                    <input type="text" value="{{ $article->contents }}" name="contents" id="contents" required="required" placeholder="contents" class="form-control"></input>
                    <label for="contents" class="form-label">Contents</label>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3 form-floating">
                    <input type="file" value="{{ $article->featured_image }}" name="image" id="image" required="required" class="form-control">
                    <label for="image" class="form-label">Feature Image</label>
                    <img width="150px" src="{{asset('storage/' . $article->featured_image)}}" alt="featured_image" class="mt-3">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
            </div>
        </form>
    </div>
@endsection