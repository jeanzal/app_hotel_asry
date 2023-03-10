<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Office | Asry Graha Hotel</title>
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/costum_fo.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div id="halaman">

        {{-- Header FO  --}}

        <div class="hed sticky-top">
            <div class="hed_kiri">
                <h5>
                    ASRI GRAHA HOTEL - FRONT OFFICE <br>
                    <p>Jl. Veteran No.147, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161
                    </p>
                </h5>
            </div>
            <div class="hed_kanan">
                <div class="baru ">
                    <?php
                    echo $today . ' ';
                    echo '<span id="jam_berjalan" class="kedip_jam"></span>';
                    ?>
                    <br>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#logoutFO">Keluar <span
                        class="bi bi-box-arrow-in-right"></span></a>
            </div>

            <div class="clear"></div>
        </div>

        {{-- End Header FO --}}


        <div class="isi">
            @yield('content')
        </div>
    </div>

    <!-- Modal Logout FO -->

    <div class="modal fade" id="logoutFO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5">
                    <div class="text-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-5">
                                <h5>Keluar Halaman</h5>
                                <p>Apakah anda yakin keluar ingin di halaman ini ?</p>
                            </div>
                            <div class="text-end">
                                <button type="button" class="col-2 btn btn-dark" data-bs-dismiss="modal">Batal</button>
                                <a href="{{ route('auth.logout') }}" class="col-3 btn btn-danger">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- End Modal Logout FO --}}

    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam_berjalan'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
        $(document).ready(function() {

            $(".preloader").fadeOut();

        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                location.reload();
            }, 120000);
        })
    </script>
    @yield('scripts')

</body>

</html>
