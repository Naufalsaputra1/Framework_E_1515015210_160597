<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>@yield('page_title','Halaman awal') | Laboratorium Pemrograman FW</title>

        <link rel="stylesheet" type="text/css"
        href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" type="text/css"
        href="{{asset('component/font-awesome/css/font-awesome.min.css')}} ">
        <style type="text/css">

           
            body {
                padding-top: 70px;
                padding-bottom: 70px;
                background-color: lightblue;
           }

           .starter-template{
            padding: 40px 15px;
            text-align: center;
           }

           .form-horizontal{
            padding: 15px 10px;
           }

           footer{
            padding-top: 15px;
            text-align: right;
           }



        </style>
    </head>
    <body>
       <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle-collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class="navbar-brand">laravel -5</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Mahasiswa <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('mahasiswa')}}">Data mahasiswa</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('jadwal_matakuliah')}}">Jadwal Mahasiswa</a></li>
                            </ul>
                    </li>
                    
                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Dosen <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><a href="{{url('dosenn')}}">Data Dosen</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('dosen_matakuliah')}}">Jadwal Dosen Mengajar</a></li>
                            </ul>
                    </li>

                    <li class="dropdown active">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan <span class="caret"></span>
                        </a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li><i class="fa fa-users"><a href="{{url('pengguna')}}">Pengguna</i></a></li>
                                <li class="divider"></li>
                                <li><i class="fa fa-map"><a href="{{url('ruangan')}}">ruangan</i></a></li>
                                <li><i class="fa fa-cogs"><a href="{{url('matakuliah')}}">matakuliah</i></a></li>
                            </ul>
                    </li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
       </nav>

         <br><br>
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
        <div class="panel panel-info text-center">
            <div class="panel-heading">
                <h3>Mahasiswa</h3>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-graduation-cap  fa-5x"></i></li>
                <li class="list-group-item"><a href="/mahasiswa" class="btn btn-primary"><i class="fa fa-user"></i> DATA MAHASISWA</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-info text-center">
            <div class="panel-heading">
                <h3>Dosen</h3>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><i class="fa fa-user-secret fa-5x"></i></li>
                <li class="list-group-item"><a href="/dosenn" class="btn btn-primary"><i class="fa fa-university"></i> DATA DOSEN</a></li>
            </ul>
        </div>
    </div>


       <div class="clearfix"></div>
       <div class="container">
           @if(Session::has('informasi'))
                <div class="alert alert-info">
                    <strong>Informasi :</strong>
                    {{Session::get('informasi')}}
                </div>
            @endif
            @yield('container')
       </div>
       <nav class="navbar navbar-default navbar-fixed-bottom">
           <footer class="container"><marquee>
               <!   please dont delete this >
               created by <a href="http://facebook.com/naufal.saputra.14?fref=ts">
               <span><i class="fa fa-facebook-square" style="color: #1da1f2"></i>naufal saputra</span></a>
               gitHub by <a href="https://github.com/Naufalsaputra1/Framework_E_1515015210_160597">
              <span><i class="fa fa-github" style="color: #1da1f2"></i>naufalsaputra1</span></a> <!--/   please dont delete this    -->
           </marquee></footer>
       </nav>

       <script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
            $(function(){
                $('[data-toggle="tolltip"]').tolltip()
            });
        </script>

</body>
</html>

