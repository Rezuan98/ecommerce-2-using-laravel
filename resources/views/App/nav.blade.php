

<nav  class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="{{asset('image/shop.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        <a class="nav-link" href="{{url('/about')}}">About</a>
        <a class="nav-link" href="{{url('/service')}}">Services</a>
        <a class="nav-link" href="{{url('/contact')}}">Contact</a>
      </div>
    </div>
  </div>
</nav>