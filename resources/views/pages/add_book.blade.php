@extends('layouts.main')

@section('title', 'Tambah Buku')

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
                        <h4 class="mb-sm-0 font-size-18">Tambah Data Buku</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Data Buku</li>
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
                            @if(session('msg'))
                            <div class="alert alert-success" role="alert">
                                {{ session('msg') }}
                            </div>
                            @endif
                            <form method="post" action="{{ route('book.store') }}">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="sampul">Sampul</label>
                                    <input type="text" name="sampul" id="sampul"
                                        class="form-control @error('sampul') is-invalid @enderror"
                                        placeholder="Ex: https://cdnwpseller.gramedia.net/wp-content/uploads/2021/10/02003757/laskar-pelangi.jpg">
                                    @error('sampul')
                                    <div class="invalid-feedback mb-3">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="judul">Judul Buku</label>
                                    <input type="text" name="judul" id="judul"
                                        class="form-control @error('judul') is-invalid @enderror" placeholder=""
                                        value="{{ old('judul') }}">
                                    @error('judul')
                                    <div class="invalid-feedback mb-3">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="pengarang">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"
                                        class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback mb-3">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="tahun_terbit">Pengarang</label>
                                    <select type="select" name="author_id" id="author_id" class="form-select">
                                        <option value="" selected></option>
                                        @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="tahun_terbit">Penerbit</label>
                                    <select type="select" name="publisher_id" id="publisher_id" class="form-select">
                                        <option value="" selected></option>
                                        @foreach($publishers as $publisher)
                                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="tahun_terbit">Tahun Terbit</label>
                                    <input type="number" name="tahun_terbit" id="tahun_terbit"
                                        class="form-control @error('tahun_terbit') is-invalid @enderror"
                                        placeholder="Ex: 2022" value="{{ old('tahun_terbit') }}">
                                    @error('tahun_terbit')
                                    <div class="invalid-feedback mb-3">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah
                                        Data</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            @endsection