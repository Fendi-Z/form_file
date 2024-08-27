@extends('layouts.app')

@section('content')
    <div class="container mt-5 p-3 bg-light shadow">
        <form action="{{ url('/articles') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group">
                <div class="mb-3 form-floating">
                    <input type="text" placeholder="title" name="title" id="title" required="required" class="form-control" autofocus>
                    <label for="title" class="form-label">Title</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="text" placeholder="contents" name="contents" id="contents" required="required" class="form-control"></input>
                    <label for="contents" class="form-label">Contents</label>
                </div>
                <div class="mb-3 form-floating">
                    <input type="file" name="image" id="image" required="required" class="form-control">
                    <label for="image" class="form-label">Feature Image</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection