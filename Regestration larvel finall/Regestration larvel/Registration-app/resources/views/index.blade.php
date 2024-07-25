@extends("Master")
@section('content')


<body>
    

    <div class="container">
     @if ($errors->any())
            @foreach ($errors->all() as $error)
                <script> 
                    alert('{{ $error }}'); 
                </script>
            @endforeach
     @endif


@if(session('success'))
    <script>
        alert("success");
    </script>
@endif

    <h1>{{ __('messages.registeration') }}</h1>
<br>
<p id="txt">{{ __('messages.txt') }}</p>
<br>
<p id="rd">{{ __('messages.rd') }}</p>
<br>
<hr>
<form id="form" method="post" action="{{ route('store') }}" enctype="multipart/form-data" >
    @csrf
    <div class="user-detail">
        <div class="input-control">
            <span class="details">{{ __('messages.full_name') }}</span>
            <input type="text" id="full_name" placeholder="{{ __('messages.full_name') }}" name="full_name">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.user_name') }}</span>
            <input type="text" id="user_name" placeholder="{{ __('messages.user_name') }}" name="user_name">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.birthdate') }}</span>
            <input type="date" id="birthdate" placeholder="{{ __('messages.birthdate') }}" name="birthdate">
            <button class="btn" type="button" id="check" name="check_actors" onclick='showHint(document.getElementById("birthdate").value)'>{{ __('messages.Check actors') }}</button>
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.phone') }}</span>
            <input type="tel" id="phone" placeholder="{{ __('messages.phone') }}" name="phone">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.address') }}</span>
            <input id="address" placeholder="{{ __('messages.address') }}" name="address">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.password') }}</span>
            <input type="password" id="password" placeholder="{{ __('messages.password') }}" name="password">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.confirm_password') }}</span>
            <input type="password" id="confirm_password" placeholder="{{ __('messages.confirm_password') }}" name="confirm_password">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.user_image') }}</span>
            <input type="file" id="user_image" name="user_image" accept="image/*">
            <div class="error"></div>
        </div>
        <div class="input-control">
            <span class="details">{{ __('messages.email') }}</span>
            <input type="email" id="email" placeholder="{{ __('messages.email') }}" name="email">
            <div class="error"></div>
        </div>
    </div>
    <div class="button">
        <button type="submit" name="submit" >{{ __('messages.register') }}</button>
    </div>
     <script>
function redirectToEmailRoute() {
  window.location.href = "/Email";
}
</script>
</form>


    </div>
    
  <script src="{{asset('js/register.js')}}"></script>
   
</body>

@endsection
