<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Pray My Way | Admin Dashboard </title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('elegant/img/svg/logo.svg') }}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('elegant/css/style.min.css') }}">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Login Admin Dashboard</h1>
    <p class="sign-up__subtitle">
        Please input your email and password
    </p>

    <form class="sign-up-form form" action="{{ url('login') }}" method="POST">
        
        @if ($errors->any())
            <div class="alert alert-danger" style="margin: 5px; color:red;">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        @csrf
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" id="email" name="email" placeholder="john@mail.com" value="{{ old('email') }}" />
    </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" id="password" name="password" placeholder="Password" />
      </label>
      <input type="submit" class="form-btn primary-default-btn transparent-btn" value="Login" />
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="{{ asset('elegant/plugins/chart.min.js') }}"></script>
<!-- Icons library -->
<script src="{{ asset('elegant/plugins/feather.min.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('elegant/js/script.js') }}"></script>
</body>

</html>