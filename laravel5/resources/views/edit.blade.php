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
                background-color: lightgreen;
                margin: auto;
           }
           .header{
            margin: auto;
            width: 1000px;
            height: 30px;
            background-color: #CCF;
           }

           .header_top{
            margin: auto;
            width: 1000px;
            height: 70px;
            background-color: white;
           }

           .header_top ul li{
            display: inline-block;
           }

           .header_top .list_atas{
            font-size: 30px;
           }

           .container{
            margin: auto;
            width: 1000px;
            height: 500px;
            background-color: #33c;
           }

           .footer{
            margin: auto;
            width: 1000px;
            height: 50px;
            background-color: #ccf;
           }

        </style>
    </head>
    <body>

    <div class="header">
        <marquee> text berjalan</marquee>
    </div>

    <div class="header_top">
        <h1 class="list_atas">Selamat Datang</h1>
        <ul><font color="red">
            <li><a href="#">text</a></li>
            <li><a href="#">text</a></li>
            <li><a href="#">text</a></li>
            <li><a href="#">text</a></li>
        </font></ul>
    </div>

    <div class="container">

    </div>

    <div class="footer">
        
    </div>


</body>
</html>

