<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Architecture')</title>
<link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Krub&display=swap" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
<style>
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
        background-color: #191A32;
    }

    header .logo {
        display: flex;
        align-items: center;
    }

    header .logo img {
        height: 40px;
        margin-right: 10px;
    }

    header nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    header nav ul li {
        margin-right: 20px;

    }

    header nav ul li a {
        text-decoration: none;
        color: #FFFFFF;
        font-size: 14px;
    }

    header nav ul li a:hover {
        text-decoration: underline;
    }

    .hero {
        text-align: left;
        padding-top: 50px;
    }

    .hero h1 {
        font-size: 36px;
        font-weight: bold;
        margin: 0;
    }

    .hero p {
        font-size: 16px;
        margin-top: 10px;
    }

    .download {
        margin-top: 50px;
        display: flex;
        gap: 10px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .download span{
        font-size: 18px;
        text-align: center;
    }

    .download h6 {
        text-align: center;
    }

    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 30px;
    }

    .button {
        background-color: #191A32;
        color: white;
    }
    .register {
        height: 520px;
        width: 550px;
        background-color: #2D2F4A;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all .2s ease-in-out;
        border-radius: 25px;
    }

    .login {
        height: 350px;
        width: 450px;
        background-color: #2D2F4A;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all .2s ease-in-out;
        border-radius: 25px;
    }
    .item {
        height: 500px;
        width: 350px;
        background-color: #2D2F4A;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: all .2s ease-in-out;
        border-radius: 10px;
    }

    .item:hover {
        transform: scale(1.1);
        border: 1px solid #FFFFFF;
    }

    .item .item-text h2 {
        font-size: 30px;
        margin: 0 0 10px 0;
        font-weight: bold;
    }

    .item .item-text p {
        font-size: 16px;
        margin: 0;
    }

    .item {
        font-size: 24px;
    }

    .item .dot-1, .item .dot-2, .item .dot-3, .item .dot-4{
        background-color: #FFFFFF;
        height:10px;
        width: 10px;
        border-radius: 50%;
        position: absolute;
    }

    .item .dot-1 {
        top: 10px;
        left: 10px;
    }

    .item .dot-2 {
        top: 10px;
        right: 10px;
    }

    .item .dot-3 {
        bottom: 10px;
        left: 10px;
    }

    .item .dot-4 {
        bottom: 10px;
        right: 10px;
    }





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
