@extends('layouts.main')

@section('title', 'Book Detail')

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
                            <h4 class="mb-sm-0 font-size-18">Book Detail</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Book Detail</li>
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
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset('/storage/images/' . $book->cover) }}" class="rounded me-2"
                                            style="width: 150px; height: 220px; object-fit: center;" alt="zpedia">

                                    </div>
                                    <div class="col-lg-8 mt-2">
                                        <h3>
                                            {{ $book->title }}
                                        </h3>
                                        <p class="card-text"><small class="text-muted"><b>Category : </b>
                                                {{ $book->category->name }}</small></p>
                                        <p class="card-text" style="text-align: justify;">
                                            {!! $book->description !!}
                                        </p>

                                        <p class="card-text"><small class="text-muted"><b>Author : </b>
                                                {{ $book->author->name }}<br>
                                                <b>Publisher/Publication Year : </b>
                                                {{ $book->publisher->name }}/{{ $book->publication_year->year }}
                                            </small></p>

                                        <a href="{{ route('index') }}"><i class="mdi mdi-arrow-left"> Back</i></a>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        @endsection
