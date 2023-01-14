@extends('layout.mainlayout')

@section('title', 'Guru')
@section('guru', 'active')
@section('icguru', 'active-icon')

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
    @if (SESSION('createFailed'))
        <script>
            iziToast.show({
                icon: "fa-solid fa-xmark",
                message: "Data Gagal Disimpan!",
                position: "topCenter",
                drag: false,
                pauseOnHover: false,
                color: "red",
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
    @if (SESSION('deleteSuccess'))
        <script>
            iziToast.show({
                icon: "fa-regular fa-circle-check",
                message: "Data Berhasil Dihapus!",
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
                    <h4 class="mb-5">Guru Room's</h4>
                    <div class="col-12 text-end">
                        <a href="/guru/create" class="btn btn-primary btn-add mb-3 "><i class='bx bx-plus'></i> Add Guru</a>
                    </div>
                </div>

                {{-- <div class="table-responsive"> --}}

                    <table id="table" class="table display responsive nowrap" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Wali Kelas</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td class=""><div class="@if($data->is_hometeacher == "0") status-salah @else status-benar @endif">
                                        @if($data->is_hometeacher == 0) Bukan Walas @else Walas @endif
                                    </div></td>
                                    <td class="d-flex">
                                        <a href="/guru/detail/{{ $data->id }}"><i
                                                class='bx bx-info-circle fs-5 mx-1 text-gray'></i></a>
                                        <a href="/guru/update/{{ $data->id }}"><i
                                                class='bx bx-edit-alt fs-5 mx-1 text-gray'></i></a>
                                        <form action="/guru/{{ $data->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" value="delete" class="border-0 bg-transparent "><i class='bx bx-trash fs-5 mx-1 text-gray'></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
        </div>
    </div>
@endsection
