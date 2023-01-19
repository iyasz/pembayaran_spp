@extends('layout.mainlayout')

@section('title', 'Siswa Deleted')
@section('swa', 'active')
@section('icswa', 'active-icon')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex">
                            <h4 class="mb-5 mt-4">Siswa Deleted Room's</h4>
                            <a href="/siswa/" class="ms-auto mt-4 fs-3"><i class='bx bxs-chevron-left'></i></a>
                        </div>
                    </div>
                </div>

                <table id="table" class="table display responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->kelas['name'] }}</td>
                            <td>{{ $data->jurusan['name'] }}</td>
                            <td class="d-flex">
                                <a href="/siswa/detail/{{ $data->id }}"><i class='bx bx-info-circle fs-5 mx-1 text-gray'></i></a>
                                <a href="/siswa/update/{{$data->id}}"><i class='bx bx-edit-alt fs-5 mx-1 text-gray'></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
