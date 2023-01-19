@extends('layout.mainlayout')

@section('title', 'Detail Guru')
@section('guru', 'active')
@section('icguru', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="my-4">Guru Details : {{ $guru->name }}</h4>
                    <a href="/guru/" class="ms-auto mt-4 fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">ID Guru</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{$guru->id}}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Name</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{$guru->name}}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Status Guru</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5"><div class="@if($guru->is_hometeacher == "2") status status-salah @else status status-benar @endif">
                                    @if($guru->is_hometeacher == 2) Bukan Walas @else Walas @endif
                                </div></label>
                                {{-- <label class="mt-2 me-5 label-input">{{$guru->is_hometeacher}}</label> --}}
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">@if(@isset($guru->kelas['name'])){{$guru->kelas['name']}} @else Tidak Ada @endif</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Jurusan</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">@if(@isset($guru->jurusan['name'])){{$guru->jurusan['name']}} @else Tidak Ada @endif</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
