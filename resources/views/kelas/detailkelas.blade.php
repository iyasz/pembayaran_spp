@extends('layout.mainlayout')

@section('title', 'Detail Class')
@section('kls', 'active')
@section('ickls', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="mb-4">Class Details : {{ $kelas->name }}</h4>
                    <a href="/kelas" class="ms-auto  fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">ID Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $kelas->id }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Nama Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $kelas->name }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
