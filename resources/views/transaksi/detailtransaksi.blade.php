@extends('layout.mainlayout')

@section('title', 'Detail Transaksi')
@section('tr', 'active')
@section('ictr', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="d-flex">
                    <h4 class="my-4">Transaksi Details : {{ $data->no_transaksi }}</h4>
                    <a href="/transaksi/" class="ms-auto mt-4 fs-3"><i class='bx bxs-chevron-left'></i></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">No Transaksi</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->no_transaksi }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Nama Admin</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->admin['name'] }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Nama Siswa</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->siswa['name'] }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Kelas</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->siswa->kelas->name}}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Jurusan</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->siswa->jurusan->name}}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Cara Bayar</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">
                                    @if ($data->cara_bayar == 'C')
                                        CASH
                                    @else
                                        TRANSFER
                                    @endif
                                </label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Tanggal Transaksi</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ date("d M Y", strtotime($data->tgl_transaksi)) }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Status</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input"><div class="@if($data->status == 'S')status status-benar @elseif( $data->status == 'P')status status-pending @else status status-salah @endif"> @if($data->status == 'S') Success @elseif( $data->status == 'P') Pending @else Canceled @endif</div></label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Senilai</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">Rp. {{ number_format($data->total) }},00</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Bukti Transaksi</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input"> <img src=" {{asset('storage/bukti-trx/'.$data->bukti_trx)}} " width="150px"></label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                        <div class="row justify-content-center mt-2 ">
                            <div class="col-lg-3 col-md-2 ">
                                <label class="mt-2 me-5 label-input">Note</label>
                            </div>
                            <div class="col-lg-8 col-md-9 col-12">
                                <label class="mt-2 me-5 label-input">{{ $data->note }}</label>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
