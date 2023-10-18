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


        .booking-form {
            background: #fff;
            width: 500px;
            margin: 65px auto;
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            border-radius: 4px;
            box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
        }

        .booking-form h1 {
            padding: 35px 35px 0 35px;
            font-weight: 300;
        }

        .booking-form .content {
            padding: 35px;
            text-align: center;
        }

        .booking-form .input-field {
            padding: 12px 5px;
        }

        .booking-form .input-field input {
            font-size: 16px;
            display: block;
            font-family: 'Rubik', sans-serif;
            width: 100%;
            padding: 10px 1px;
            border: 0;
            border-bottom: 1px solid #747474;
            outline: none;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .booking-form .input-field input::-webkit-input-placeholder {
            text-transform: uppercase;
        }

        .booking-form .input-field input::-moz-placeholder {
            text-transform: uppercase;
        }

        .booking-form .input-field input:-ms-input-placeholder {
            text-transform: uppercase;
        }

        .booking-form .input-field input::-ms-input-placeholder {
            text-transform: uppercase;
        }

        .booking-form .input-field input::placeholder {
            text-transform: uppercase;
        }

        .booking-form .input-field input:focus {
            border-color: #222;
        }

        .booking-form a.link {
            text-decoration: none;
            color: #747474;
            letter-spacing: 0.2px;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 20px;
        }

        .booking-form .action {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .booking-form .action button {
            width: 100%;
            border: none;
            padding: 18px;
            font-family: 'Rubik', sans-serif;
            cursor: pointer;
            text-transform: uppercase;
            background: #e8e9ec;
            color: #777;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 0;
            letter-spacing: 0.2px;
            outline: 0;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .booking-form .action button:hover {
            background: #d8d8d8;
        }

        .booking-form .action button:nth-child(2) {
            background: #2d3b55;
            color: #fff;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 4px;
        }

        .booking-form .action button:nth-child(2):hover {
            background: #3c4d6d;
        }

        .background {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../images/background.jpg);
            background-position: center;
            background-size: cover;
            padding-left: 8%;
            padding-right: 8%;
            box-sizing: border-box;
        }

        .navigationbar {
            height: 12%;
            display: flex;
            align-items: center;
        }

        .logo {
            width: 50px;
            cursor: pointer;
        }

        .menu-icon {
            width: 30px;
            cursor: pointer;
            margin-left: 40px;
        }

    </style>
</head>

<body>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/venues">Venues</a></li>
        <li><a class="active" href="/reservation">Reservation</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
    </ul>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="booking-form">
        <form>
            <h1>Bookings</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Type Of Event">
                </div>
                <div class="input-field">
                    <input type="date" placeholder="Date">
                </div>
                <div class="input-field">
                    <input type="time" placeholder="Time">
                </div>
                <div class="input-field">
                    <input type="number" placeholder="Contact Number">
                </div>
            </div>
            <div class="action">
                <button>Submit</button>
            </div>
        </form>
    </div>
    <script src="" async defer></script>
</body>

</html>