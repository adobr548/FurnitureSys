<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>

        <div class='container'style="padding: 30px;">
            <nav>
                <tr>
                   <th><a href='/'> Registracija</a></th>
                   <th><a href='/furnitures'> Baldai</a></th>
                   <th><a href='/contracts'> Sutartys</a></th>
                   <th><a href='/warehouses'> Sandeliai</a></th>
                   <th><a href='/customers'> Klientai </a></th>
                   <th><a href='/employees'> Darbuotojai </a></th>
                   <th><a href='/sellers'> Pardavejai </a></th>
                   <th><a href='/accounts'> Saskaitos </a></th>
                   <th><a href='/orders'> Uzsakymai </a></th>
		           <th><a href='/payments'> Apmokejimai </a></th>
	            </tr>
            </nav>
        </div>

    </head>
</html>
