
<style>
        body {
        background-image: url("uitmpic.jpeg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        }

        .login-form {
  background-color: #ffffff;
  border-radius: 10px;
  padding: 20px;
  width: 300px;
  margin: auto;
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

        </style>

<body>

<div class="login-form">
<h2>Login</h2>
<form method="POST" action="{{ route('custom-login') }}">
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

    <div>
        <button type="submit">
            Login
        </button>
    </div>
    
</form>
</div>
    </body>
