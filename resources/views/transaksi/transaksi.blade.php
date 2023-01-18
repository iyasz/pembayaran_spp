@extends('layout.mainlayout')

@section('title', 'Transaksi')
@section('tr', 'active')
@section('ictr', 'active-icon')

@section('content')

    @if (SESSION('createSuccess'))
        <script>
            iziToast.show({
                icon: "fa-regular fa-circle-check",
                message: "Data Berhasil Disimpan!",
                position: "topCenter",
                drag: false,
                pauseOnHover: false,
                color: "green",
                iconUrl: null,
                timeout: 4100,
            });
        </script>
    @endif
    @if (SESSION('updateSuccess'))
        <script>
            iziToast.show({
                icon: "fa-regular fa-circle-check",
                message: "Data Berhasil Diubah!",
                position: "topCenter",
                drag: false,
                pauseOnHover: false,
                color: "green",
                iconUrl: null,
                timeout: 4100,
            });
        </script>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="row">
                    <h4 class="mb-5 mt-4">Transaksi Room's</h4>
                    <div class="col-12 text-end">
                        <a href="/transaksi/create" class="btn btn-primary btn-add mb-3 "><i class='bx bx-plus'></i> Add
                            Transaksi</a>
                    </div>
                </div>

                    <table id="table" class="table display responsive nowrap " width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Transaksi</th>
                                <th>Siswa</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trx as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->no_transaksi }}</td>
                                    <td>{{ $data->siswa['name'] }}</td>
                                    <td class=""><div class="@if($data->status == 'S')status status-benar @elseif( $data->status == 'P')status status-pending @else status status-salah @endif"> @if($data->status == 'S') Success @elseif( $data->status == 'P') Pending @else Canceled @endif</div> </td>
                                    <td class="d-flex">
                                        <a href="/transaksi/detail/{{ $data->id }}"><i
                                                class='bx bx-info-circle fs-5 mx-1 text-gray'></i></a>
                                        <div class=""> @if($data->status == "P")                      
                                            <a class="" href="/transaksi/update/{{ $data->id }}"><i
                                                    class='bx bx-edit-alt fs-5 mx-1 text-gray'></i></a>
                                                    @else
                                                    <p>---</p>
                                                    @endif
                                            </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
