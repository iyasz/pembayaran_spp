@extends('layout.mainlayout')

@section('title', 'Siswa')
@section('swa', 'active')
@section('icswa', 'active-icon')

@section('content')

@if (SESSION('success'))
<script>
    iziToast.show({
        icon: "fa-regular fa-circle-check",
        message: "{{SESSION('success')}}",
        position: "topCenter",
        drag: false,
        pauseOnHover: false,
        color: "green",
        iconUrl: null,
        timeout: 4100,
      });</script>
@endif
@if (SESSION('failed'))
<script>
    iziToast.show({
        icon: "fa-solid fa-xmark",
        message: "{{SESSION('failed')}}",
        position: "topCenter",
        drag: false,
        pauseOnHover: false,
        color: "red",
        iconUrl: null,
        timeout: 4100,
    });
</script>
@endif

    <div class="row">
        <div class="col-12">
            <div class="h-100 main">
                <div class="row">
                    <h4 class="mb-5 mt-4">Siswa Room's</h4>
                    <div class="col-12 text-end">
                        <a href="/siswa/deleted/" class="btn btn-primary btn-add mb-3"><i class='bx bx-trash'></i></a>
                        <a href="/siswa/create" class="btn btn-primary btn-add mb-3 "><i class='bx bx-plus'></i> Add Siswa</a>
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
                                <form action="/siswa/{{$data->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" value="delete" class="border-0 bg-transparent "><i class='bx bx-trash fs-5 mx-1 text-gray'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
