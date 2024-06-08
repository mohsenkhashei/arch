<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Architecture')</title>
<link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Krub&display=swap" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
<link href="{{asset('css/main.css')}}" rel="stylesheet" />
<style>
    h1, h2, h3, h4, h5, h6, p {
        overflow-wrap: break-word;
        word-wrap: break-word;
        hyphens: auto;
    }
    hr {
        background-color: white;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    body {
        font-family: Verdana;
        background-color: #0D0626; /* Adjusted to match the dark background */
        color: white;
    }
    .navbar {
        background-color: #0D0626;
        display:flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-bottom: 20px;
    }
    .navbar-brand img {
        height: 40px;
    }
    .nav-link {
        color: white !important;
    }
    .content {
        text-align: center;
        margin-top: 40px;
    }
    .content h1 {
        font-size: 3em;
        font-weight: bold;
    }
    .navbar-nav {
        margin-left: 40px;

    }

    .navbar-nav li a{
        padding-right: 20px !important;
        padding: left: 30px !important;
        font-size: 16px;
    }
    .navbar-brand {
        font-size: 20px;
    }

    @keyframes fadeInAnimation {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes upAndDown {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }

    }
</style>
