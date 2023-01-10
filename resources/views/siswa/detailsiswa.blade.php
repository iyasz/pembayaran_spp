@extends('layout.mainlayout')

@section('title', 'Detail Student')
@section('swa', 'active')
@section('icswa', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                    <div class="d-flex">
                        <h4 class="mb-4">Student Details : {{ $siswa->name }}</h4>
                        <a href="/siswa/" class="ms-auto  fs-3"><i class='bx bxs-chevron-left'></i></a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <label class="mt-2 me-5 label-input">{{$siswa->name}}</label>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">NIS</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <label class="mt-2 me-5 label-input">{{$siswa->nis}}</label>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Telpon</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <label class="mt-2 me-5 label-input">{{$siswa->telp}}</label>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Alamat</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <label class="mt-2 me-5 label-input">{{$siswa->alamat}}</label>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Kelas</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <label class="mt-2 me-5 label-input">{{$siswa->kelas['name']}}</label>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Jurusan</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <label class="mt-2 me-5 label-input">{{$siswa->jurusan['name']}}</label>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
