<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registeration Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('CSS/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="{{asset('CSS/header.css')}}"> 
  <link href="{{asset('CSS/register.css')}}" rel="stylesheet">
</head>
<body class="b">

<header class="site-header">
  <a href="#0" class="logo"><img src="img/R.jfif" id="logoo"></a>
  
  <nav class="site-nav">
    <ul>
    <li class="active"><a href="#0">{{ __('messages.signup') }}</a></li>
          <li><a href="#0">{{ __('messages.about') }}</a></li>
          <li><a href="#0">{{ __('messages.clients') }}</a></li>
          <li><a href="#0">{{ __('messages.contact_us') }}</a></li>
         <a href="{{ route('changeLang','ar') }}">arabic</a>
         <a href="{{ route('changeLang','en') }}">english</a>
    </ul>
  </nav>

</header>

    @yield('content')

  <footer class="footer">
  	 <div class="contain-er">
  	 		<div class="footer-col">
          <div class="f">
          <h4>{{ __('messages.follow_us') }}</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="co">
          <h4>{{ __('messages.contact') }}</h4>
          T:+0201065877,
          E:fego@gmial.com
        </div>
        <div class="l">
          <h4>{{ __('messages.location') }}</h4>
          123 Kapiolani Boulevard<br>
        </div>
        <div class="s">
          <h4>{{ __('messages.schedule') }}</h4>
          <em> Tuesday - Thursday</em> 
          (1:00pm-9:00pm)<br>
        </div>
  	 		</div>
  	 </div>
  </footer>

</body>
</html>