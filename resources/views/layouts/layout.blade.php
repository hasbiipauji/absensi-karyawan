<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('asset/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('asset/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
   @yield('content')
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('asset/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/modules/popper.js') }}"></script>
  <script src="{{ asset('asset/modules/tooltip.js') }}"></script>
  <script src="{{ asset('asset/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/modules/nicescroll/jquery.nicescroll.min.j') }}s"></script>
  <script src="{{ asset('asset/modules/moment.min.js') }}"></script>
  <script src="{{ asset('asset/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('asset/js/scripts.js') }}"></script>
  <script src="{{ asset('asset/js/custom.js') }}"></script>
</body>
</html>
