<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment - @yield('title')</title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
    {{-- bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- izitoast  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    {{-- datatables  --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css" />

    {{-- swiper js  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    {{-- izitoast --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">

    <!-- css style  -->
    <link rel="stylesheet" href="/assets/css/custom.css">


</head>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"></div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">I'M !</span> </a>
                <div class="nav_list">
                    <a href="/" class="nav_link @yield('dsh')"> <i
                            class='bx bx-bar-chart-alt-2 @yield('icdsh') nav_icon'></i> <span
                            class="nav_name">Dashboard</span> </a>
                    <a href="/admin" class="nav_link @yield('adm')"> <i
                            class='bx bx-user nav_icon @yield('icadm')'></i> <span class="nav_name">Admin</span>
                    </a> <a href="/siswa" class="nav_link @yield('swa')"><i
                            class='bx bx-user-pin nav_icon @yield('icswa')'></i> <span class="nav_name">Siswa</span>
                    </a>
                    <a href="/transaksi" class="nav_link @yield('tr')"> <i
                            class='bx bx-credit-card-front nav_icon @yield('ictr')'></i> <span
                            class="nav_name">Transaksi</span>
                    </a> <a href="/kelas" class="nav_link @yield('kls')"> <i
                            class='bx bx-home-alt nav_icon @yield('ickls')'></i> <span class="nav_name">Kelas</span>
                    </a>
                    </a> <a href="/jurusan" class="nav_link @yield('jrs')"> <i
                            class='bx bx-code-curly nav_icon @yield('icjrs')'></i> <span
                            class="nav_name">Jurusan</span> </a>
                </div>
            </div>
            <hr class="mx-3 hr-nav mb-0">
            <div class="mb-2 mt-0 position-relative">
                <a href="" class="nav_link mb-2"><i class='bx bx-cog nav_icon'></i> <span
                        class="nav_name">Settings</span></a>
                <a href="logout.php" class="nav_link "><i class='bx bx-log-out nav_icon icon-bot'></i> <span
                        class="nav_name name-bot">Log Out</span> </a>
            </div>
        </nav>
    </div>
    <!--Container Main start-->



    <div class="container">
        @yield('content')
    </div>

    <!--Container Main end-->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {{-- izitoast  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- swiper js  --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    {{-- chart js  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>



    <script src="/assets/js/main.js"></script>
</body>

</html>
