<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>@yield('page')</title>

    <style>

        body{
            font-family: 'Nunito', sans-serif;


        }
        .container{
            margin: center;
            padding-top: 150px;
        }


        table, th, td {
            border: 1px solid black;
        }

        th, td {
            height: 35px;
        }

        th {
            background-color: #5533FF;
            color: white;
        }

        tr:nth-child(even) {background-color: #e9e9e9;}

        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
            margin-bottom: 30px;
            position: relative;
        }

        .button, button {
            position: relative;
            margin: auto;
            margin-top: 30px;
            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            display: block;
            text-decoration: none;
            text-align: center;
            background-color: #5533FF;
            color: white;
            width: 280px;
            height: 90px;
            border-radius: 20px;
            line-height: 90px;
        }

        input {
            font-family: 'Nunito', sans-serif;
            margin: auto;
            display: block;
            line-height: 50px;
            width: 275px;
            font-size: 24px;
            autocomplete="off";
        }

    </style>

</head>
<body>

<div class="container">
    @yield('add')
    @yield('table')
</div>

</body>
</html>
