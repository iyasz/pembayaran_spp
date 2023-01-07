@extends('layout.mainlayout')

@section('title', 'Detail Jurusan')
@section('jrs', 'active')
@section('icjrs', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="mb-4">Jurusan Details : {{ $jurusan->name }}</h4>
                    <a href="/jurusan" class="ms-auto  fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">ID Jurusan</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $jurusan->id }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Nama Jurusan</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $jurusan->name }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
