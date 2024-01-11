@extends('layouts.main')

@section('title', 'Add Book')

@section('content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Add Book</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Add Book</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- start row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @if (session('msg'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                                <form method="post" action="{{ route('book.store') }}">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="cover">Cover</label>
                                        <input type="text" name="cover" id="cover"
                                            class="form-control @error('cover') is-invalid @enderror"
                                            placeholder="Ex: https://cdnwpseller.gramedia.net/wp-content/uploads/2021/10/02003757/laskar-pelangi.jpg">
                                        @error('cover')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="title">Book Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control @error('title') is-invalid @enderror" placeholder=""
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10"
                                            class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="category">Category</label>
                                        <select type="select" name="category_id" id="category_id" class="form-select">
                                            <option value="" selected></option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="author">Author</label>
                                        <select type="select" name="author_id" id="author_id" class="form-select">
                                            <option value="" selected></option>
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="publisher">Publisher</label>
                                        <select type="select" name="publisher_id" id="publisher_id" class="form-select">
                                            <option value="" selected></option>
                                            @foreach ($publishers as $publisher)
                                                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="publication_year">Publication Year</label>
                                        <input type="number" name="publication_year" id="publication_year"
                                            class="form-control @error('publication_year') is-invalid @enderror"
                                            placeholder="Ex: 2022" value="{{ old('publication_year') }}">
                                        @error('publication_year')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                                            Data</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            @endsection
