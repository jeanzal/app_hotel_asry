<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asry Graha Hotel</title>
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/costum.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body onload="myFunction()">

    <div id="halaman">
        <div class="box_kiri">
            <img src="{{ asset('assets/img/logo2.png') }}" alt="">
        </div>
        <div class="box_kanan">
            <div class="form">
                <div class="">
                    @if(Session::has('pesan'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{Session::get('pesan')}}
                    </div>
                    @endif
                    @if (Session::get('success'))
                    <div class="alert alert-success text-center">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::get('info'))
                    <div class="alert alert-info">
                        {{ Session::get('info') }}
                    </div>
                    @endif
                </div>
                <form method="post" action="{{route('auth.verify')}}">
                    @csrf
                    <h5 class="hurup">
                        ASRI GRAHA HOTEL <br>
                        <small>Silahkan Login</small>
                    </h5>
                    
                    <hr>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required value="{{old('email')}}">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button>Masuk</button>
                </form>
            </div>
        </div>
    </div>
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
    {{-- <div class="preloader">
        <div class="loading">
          <img src="{{ asset('assets/img/loading.gif') }}" width="80px">
          <p>Harap Tunggu</p>
        </div>
      </div> --}}



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript">
 
 var myVar;



function myFunction() {

  myVar = setTimeout(showPage, 500);

}



function showPage() {

document.getElementById("loader").style.display = "none";

document.getElementById("myDiv").style.display = "block";

}
        
       </script>
</body>

</html>