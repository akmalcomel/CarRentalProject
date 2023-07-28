
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UiTM | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico  the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

<style>
        body {
        background-image: url("assets/img/slide1/wallpaperkereta.jpeg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        }

        .login-form {
  background-color: #ffffff;
  border-radius: 10px;
  padding: 20px;
  width: 300px;
  margin: auto;
  margin-top:150px;
}

.login-form h2 {
  text-align: center;
  font-size: 24px;
}

.login-form form {
  text-align: center;
}

.login-form label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
}

.login-form input[type="email"],
.login-form input[type="password"] {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 20px;
}

.login-form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
}
.button-container {
        text-align: right;
    }

        </style>
        </head>

<body>


<div class="login-form">
<h2>Login</h2>
<form method="POST"  action="{{ route('custom-login2.post') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email">Email</label>

        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />

        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>

        <input id="password" type="password" name="password" required autocomplete="current-password" />

        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class=button-container>
        <button type="submit"><strong>Login</strong>

        </button>
        <a href="{{ route('renter.register.form') }}" style>Register</a>
    </div>

</form>
</div>
    </body>
