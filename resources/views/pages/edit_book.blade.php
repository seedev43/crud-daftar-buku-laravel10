@extends('layouts.main')

@section('title', 'Edit Book')

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
                            <h4 class="mb-sm-0 font-size-18">Edit Book</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Edit Book</li>
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
                                <div class="mb-3">
                                    <button class="btn btn-primary" onclick="window.location.href='{{ route('index') }}'"><i
                                            class="mdi mdi-arrow-left"> Back</i></button>
                                </div>
                                <form method="post" action="{{ route('book.update', $bookData->slug) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group mb-2">
                                        <label for="cover">Cover</label>
                                        <input class="form-control" type="file" id="cover" name="cover">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="title">Book Title</label>
                                        <input type="text" name="title" id="title"
                                            class="form-control @error('title') is-invalid @enderror" placeholder=""
                                            value="{{ old('title', $bookData->title) }}">
                                        @error('title')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10"
                                            class="form-control @error('description') is-invalid @enderror">{{ old('description', $bookData->description) }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="category">Category</label>
                                        <select type="select" name="category_id" id="category_id" class="form-select">
                                            <option value="">Select Category...</option>

                                            @foreach ($categories as $category)
                                                @if ($category->name == $bookData->category->name)
                                                    <option value="{{ $bookData->category_id }}" selected>
                                                        {{ $bookData->category->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="author">Author</label>
                                        <select type="select" name="author_id" id="author_id" class="form-select">
                                            <option value="">Select Author...</option>
                                            @foreach ($authors as $author)
                                                @if ($author->name == $bookData->author->name)
                                                    <option value="{{ $bookData->author_id }}" selected>
                                                        {{ $bookData->author->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="publisher">Publisher</label>
                                        <select type="select" name="publisher_id" id="publisher_id" class="form-select">
                                            <option value="">Select Publisher...</option>
                                            @foreach ($publishers as $publisher)
                                                @if ($publisher->name == $bookData->publisher->name)
                                                    <option value="{{ $bookData->publisher_id }}" selected>
                                                        {{ $bookData->publisher->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="publication_year">Publication Year</label>
                                        <select type="select" name="publication_year_id" id="publication_year_id"
                                            class="form-select">
                                            <option value="">Select Publication Year...</option>
                                            @foreach ($publication_years as $publication_year)
                                                @if ($publication_year->year == $bookData->publication_year->year)
                                                    <option value="{{ $bookData->publication_year_id }}" selected>
                                                        {{ $bookData->publication_year->year }}
                                                    </option>
                                                @else
                                                    <option value="{{ $publication_year->id }}">
                                                        {{ $publication_year->year }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-3 mb-4">
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
