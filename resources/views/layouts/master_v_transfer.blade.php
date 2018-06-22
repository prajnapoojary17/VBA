<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | GST TRAN</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
 <!-- seperated css file and included here-->
   @include('include.v_transfer_css')
</head>

<body class="theme-orange">
   
  <!-- yield body content-->
  @yield('content')
  
  
 <!-- seperated js file and included here-->
  @include('include.v_transfer_js')
        
    </body>

    </html>