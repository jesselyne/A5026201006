<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    <link rel="stylesheet" href="{{URL::asset('/css/bahagia.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large"
        onclick="sidebar_close()">Close &times;</button>
        <a href="/pegawai" class="w3-bar-item w3-button">Pegawai</a>
        <a href="/absen" class="w3-bar-item w3-button">Absen</a>
        <a href="/mutasi" class="w3-bar-item w3-button">Mutasi</a>
        <a href="/sepeda" class="w3-bar-item w3-button">Sepeda</a>
        <a href="#" class="w3-bar-item w3-button">(next week)</a>
    </div>
    <div id="main">
        <div class="w3-light-grey">
          <p><button id="openNav" class="w3-button w3-light-grey w3-xlarge" onclick="sidebar_open()">&#9776;</button> <b>PWEB A </b></p>
          <div class="w3-container"><p><img src="/images/foto_jess.jpg" alt="foto jesselyne" width="75">  Jesselyne Amadea - 5026201006</p>
          </div>
        </div>

        <div class="isi">
            <h3 style=" text-align: center">@yield('judulhalaman')</h3>

            <p style=" text-align: center">@section('konten')</p>

            @show
        </div>
          <div class="w3-light-grey">
            <div class="footer">
                <p style="text-align: center">Hak Cipta Oleh: </p>
                <p style="text-align: center">Jesselyne Amadea - 5026201006</p>
          </div>
        </div>
    </div>

    <script>
        function sidebar_open() {
          document.getElementById("main").style.marginLeft = "25%";
          document.getElementById("mySidebar").style.width = "25%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("openNav").style.display = 'none';
        }
        function sidebar_close() {
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("openNav").style.display = "inline-block";
        }
    </script>

</body>

</html>
