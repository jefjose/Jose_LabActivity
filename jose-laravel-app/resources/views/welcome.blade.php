<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }

        .row {
            display: flex;
            height: 88%;
            align-items: center;
        }

        .col {
            flex-basis: 50%;
        }

        .venue {
            width: 200px;
            height: 230px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 10px 15px;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
        }

        .venue1 {
            background-image: url(../images/pic-1.jpg);
        }

        .venue2 {
            background-image: url(../images/pic-2.jpg);
        }

        .venue3 {
            background-image: url(../images/pic-3.jpg);
        }

        .venue4 {
            background-image: url(../images/pic-4.jpg);
        }

        .venue5 {
            background-image: url(../images/pic-5.jpg);
        }

        .venue6 {
            background-image: url({{ URL::asset('images/pic-6.jpg') }});
        }

        .venue:hover {
            transform: translateY(-10px);
        }
    </style>
</head>

<body>

    <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/venues">Venues</a></li>
        <li><a href="/reservation">Reservation</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
    </ul>

    <br><br>
    <div class="row">
        <div class="col">
            <h1>UrbanReserve</h1>
            <p>Unlocking Premier Venue Experiences</p>
            <a href="/reservation"><button type="button"> Book Now </button></a>
        </div>
    </div>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <script src="" async defer></script>
</body>

</html>