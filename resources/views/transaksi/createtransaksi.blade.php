@extends('layout.mainlayout')

@section('title', 'Create Transaksi')
@section('tr', 'active')
@section('ictr', 'active-icon')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <form action="/transaksi/store" method="POST">
                    @csrf
                    <h4 class="mb-4">Create Transaksi Room's</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center mt-2 ">
                                <input autocomplete="off" value="@php echo Str::upper(Str::random(7)); @endphp" name="no_transaksi" type="hidden">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Admin</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="admin_id" type="text" class="form-control text-gray @error('admin_id') is-invalid @enderror">
                                    <div class="alert-error text-danger">
                                        @foreach ($errors->get('admin_id') as $err)
                                            {{ $err }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Siswa</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <select name="siswa_id" class="form-select text-gray @error('siswa_id') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                        @foreach ($siswa as $sis)
                                            <option @if(old('siswa_id') == $sis->id) selected @endif value="{{ $sis->id }}">{{ $sis->name }} | {{$sis->kelas['name']}} | {{$sis->jurusan['name']}}</option>
                                        @endforeach
                                    </select>
                                    <div class="alert-error text-danger">
                                        @foreach ($errors->get('siswa_id') as $err)
                                            {{ $err }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Cara Bayar</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <select name="cara_bayar" class="form-select text-gray @error('cara_bayar') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                            <option @if(old('cara_bayar') == "C") selected @endif value="C">CASH</option>
                                            <option @if(old('cara_bayar') == "T") selected @endif value="T">TRANSFER</option>
                                    </select>
                                    <div class="alert-error text-danger">
                                        @foreach ($errors->get('cara_bayar') as $err)
                                            {{ $err }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Tanggal Transaksi</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input type="datetime-local" value="{{ old('tgl_transaksi') }}" name="tgl_transaksi" class="form-control text-gray @error('tgl_transaksi') is-invalid @enderror">
                                    <div class="alert-error text-danger">
                                        @foreach ($errors->get('tgl_transaksi') as $err)
                                            {{ $err }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Total</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input autocomplete="off" name="total" value="{{ old('total') }}"  type="number" class="form-control text-gray @error('total') is-invalid @enderror">
                                    <div class="alert-error text-danger">
                                        @foreach ($errors->get('total') as $err)
                                            {{ $err }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Status</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <select name="status" class="form-select text-gray @error('status') is-invalid @enderror">
                                        <option selected disabled>Choose an option</option>
                                            <option @if(old('status') == "S") selected @endif value="S">Success</option>
                                            <option @if(old('status') == "P") selected @endif value="P">Pending</option>
                                            <option @if(old('status') == "C") selected @endif value="C">Canceled</option>
                                    </select>
                                    <div class="alert-error text-danger">
                                        @foreach ($errors->get('status') as $err)
                                            {{ $err }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Catatan</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <textarea class="form-control" name="note" id="floatingTextarea2" style="height: 100px">{{ old('note') }}</textarea>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                            <div class="row justify-content-center mt-2 ">
                                <div class="col-lg-3 col-md-2 ">
                                    <label class="mt-2 me-5 label-input">Created At</label>
                                </div>
                                <div class="col-lg-8 col-md-9 col-12">
                                    <input type="datetime-local" name="created_at" class="form-control text-gray">
                                    <input type="hidden" name="updated_at" value="">
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
                    <div class="mt-4 mb-5 text-end">
                        <a href="/transaksi" class="btn btn-primary me-3 btn-cancel d-lg-inline d-md-inline d-none">Batal</a>
                        <button type="submit" name="add" value="save"
                            class="btn btn-primary btn-add d-lg-inline d-md-inline d-none">Buat Transaksi</button>

                        <button type="submit" name="add" value="save"
                            class="btn btn-primary btn-add w-100 d-lg-none d-md-none d-block mb-2">Buat Transaksi</button>
                        <a href="/transaksi" class="btn btn-primary w-100 btn-cancel d-lg-none d-md-none d-block">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
