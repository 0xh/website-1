<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>

    <style>
        body, html {
            background: url('/img/agrisave_field.png');
            /*background-repeat: repeat;*/
            background-size: cover;
            height: 100%;
            margin: 0;
            font-family: 'Open Sans';
        }

        .full-height {
            min-height: 100%;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .flex-fill {
            flex: 1;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .links {
            padding: 1em;
            text-align: right;
        }

        .links a, .intro a {
            text-decoration: none;
        }

        .links button, .intro button {
            background-color: #34F097;
            border: 0;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-family: 'Open Sans';
            font-size: 14px;
            font-weight: 600;
            padding: 15px;
            text-transform: uppercase;
            width: 100px;
        }

        .site-logo {
            position: absolute;
            top: 15px;
            left: 15px;
        }

        .site-logo img {
            height: 125px;
        }

        .intro {
            color: white;
            background: rgba(100,100,100,0.4);
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
            padding: 10px;
        }

        .intro-message {
            text-align:center;
        }

        h1.intro-message {
            font-size: 4em;
            margin: 15px 0 0 0;
        }

        h3.intro-message {
            font-size: 1.6em;
            margin: 10px 0;
        }

        h4.intro-message {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .intro-divider {
            border-top: 1px solid #f8f8f8;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        .intro-button {
            text-align:center;
        }

        .intro-button button {
            width: 160px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="full-height flex-column">
        <nav class="links">
            @if(Auth::check())
                <a href="/home">
                    <button style="width:120px">
                        Dashboard
                    </button>
                </a>
            @else
                <a href="/login" style="margin-right: 15px;">
                    <button>
                        Login
                    </button>
                </a>

                <a href="/register">
                    <button>
                        Register
                    </button>
                </a>
            @endif
        </nav>

        <div class="site-logo">
            <img src="/img/color-logo.png">
        </div>

        <div class="flex-fill flex-center">
            <div class="intro">
                <h1 class="text-center intro-message">
                    Be an Expert in Farming
                </h1>

                <h3 class="intro-message">
                    Agrisave provides farmers with data that allows them to make more informed decisions
                </h3>

                <hr class="intro-divider">

                <div class="intro-button">
                    <a href="/register">
                        <button>
                            Try for free
                        </button>
                    </a>
                </div>

                <h4 class="intro-message">
                    "1st Runner Up at Zambia's First Telecom Hackathon"
                </h4>
            </div>
        </div>
    </div>
</body>
</html>
