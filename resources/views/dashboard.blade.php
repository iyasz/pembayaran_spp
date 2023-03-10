@extends('layout.mainlayout')
@section('title', 'Dashboard')
@section('dsh', 'active')
@section('icdsh', 'active-icon')


@section('content')

@if (SESSION('authSuccess'))
<script>
    iziToast.show({
        icon: "fa-regular fa-circle-check",
        message: "{{SESSION('authSuccess')}}",
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

            <div class="height-100 main">
                <h4 class="mt-4">Your Dashboard {{Auth::user()->name}}</h4>
                <div class="swiper mx-5">
                    <div class="swiper-wrapper">
                        <div id="slide1" class="swiper-slide ">
                            <p>Jumlah Admin</p>
                        </div>
                        <div id="slide2" class="swiper-slide">Slide 2</div>                       
                    </div>
                </div>
                <h4 class="mb-4">Students Statistics</h4>
                <div class="cotainer">
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-8 col-12">
                            <canvas id="myChart" class="rounded-3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
