@extends('layouts.main')

@section('title', 'Home')

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
                        <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Selamat Datang !</h5>
                                        <p>Halaman Utama</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <img src="{{ asset('assets/images/users/avv.jpg') }}" alt=""
                                            class="img-thumbnail rounded-circle">
                                    </div>
                                    <h5 class="font-size-15 text-truncate">{{ auth()->user()->name }}</h5>
                                    <p class="text-muted mb-0 text-truncate">{{ Str::ucfirst(auth()->user()->level) }}
                                    </p>
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">

                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="font-size-15">
                                                    <?= $_SERVER['REMOTE_ADDR']; ?>
                                                </h5>
                                                <p class="text-muted mb-0">IP Anda</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="font-size-15">
                                                    <?= date("d M Y H:i:s"); ?>
                                                </h5>
                                                <p class="text-muted mb-0">Informasi Waktu</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="/" class="btn btn-primary waves-effect waves-light btn-sm">View
                                                Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">Jumlah Buku</p>
                                            <h5 class="mb-0">{{ $countBook }}</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                <span class="avatar-title">
                                                    <i class="fa-regular fa-book font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <!-- start row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('add-book') }}"
                                class="btn btn-primary waves-effect waves-light mb-2">Tambah Data</a>

                            <h4 class="card-title mt-2">Daftar Buku</h4>

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sampul</th>
                                        <th>Judul Buku</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp

                                    @foreach ($books as $book)

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img class="rounded me-2" width="100px" src="{{ $book->sampul }}"
                                                title="{{ $book->slug }}">
                                        </td>
                                        <td>{{ $book->judul }}</td>
                                        <td>
                                            <a href="{{ route('detail-book', $book->slug) }}"
                                                class="btn btn-success waves-effect waves-light"><i
                                                    class="fa fa-list"></i></a>

                                            <a href="" class="btn btn-warning waves-effect waves-light"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a onclick="" class="btn btn-danger waves-effect waves-light"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            @endsection