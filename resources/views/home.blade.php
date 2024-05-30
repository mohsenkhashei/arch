@extends('layout.main')
@section('content')
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
        font-weight: bold;
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
        flex-direction: column;
        align-items: center;
        width: 100px;
    }

    .download .download-icon {
        margin-right: 20px;

    }

    .download span {
        font-size: 18px;
    }

    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 0;
    }

    .item {
        background-color: #2D2F4A;
        margin: 0 15px;
        padding: 170px 130px;
        text-align: center;
    }

    .item h2 {
        font-size: 30px;
        margin: 0 0 10px 0;
        font-weight: bold;
    }

    .item p {
        font-size: 16px;
        margin: 0;
    }

    .item span {
        font-size: 24px;
    }
</style>
    <section class="hero">
        <div class="row">
            <div class="col-md-4">
                <h1>DISCOVER THE BEST ARCHITECTURE TEMPLATES</h1>
                <p>GAIN YOUR TIME , USE PROFESSIONAL TEMPLATES MENTOURED BY Ai EXPERTS.</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="download">
                    <span class="fa fa-arrow-circle-down" style="font-size: 50px;"></span>
                    <h6 style="margin-top:10px">CLICK TO DOWNLOAD YOUR FILES</h6>
                </div>
            </div>
        </div>


    </section>
    <section class="content">
        <div class="item">
            <h2>IMAGE</h2>
            <p>format: PNG</p>
        </div>
        <div class="item">
            <h2>TEXT</h2>
            <p>format: PDF</p>
        </div>
        <div class="item">
            <span>...</span>
        </div>
    </section>

@stop

