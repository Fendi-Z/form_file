@extends('layouts.app')

@section('content')
    <div class="container mt-5 p-3 bg-light shadow">
        <form action="{{ url('/articles') }}" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <div class="mb-3 form-floating">
                    <input type="text" placeholder="title" name="title" id="title" required="required" class="form-control">
                    <label for="title" class="form-label">Title</label>
                </div>
                <div class="mb-3 form-floating">
                    <textarea placeholder="content" name="content" id="content" required="required" class="form-control"></textarea>
                    <label for="content" class="form-label">Content</label>
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