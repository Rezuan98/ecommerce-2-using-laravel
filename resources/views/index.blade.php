
@extends('App.app')

@section('keyTitle','HomePage');

@section('maincontent')
{{-- carousel starts here --}}

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carouselbanner" src="{{asset('image/daraz.jpg')}}" >
      </div>
      <div class="carousel-item">
        <img class="carouselbanner" src="{{asset('image/daraz2.jpg')}}" >
      </div>
      <div class="carousel-item">
        <img class="carouselbanner" src="{{asset('image/daraz3.jpg')}}">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


{{-- carousel ends here --}}

<h1 class="text-center p-4">
    Our Items
</h1>
<div class="container mt-4">

    
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img"><img class="card-img-size" src="{{asset('image/p1.png')}}" alt=""></div>
                    <div class="card-title"><h4>Castor Oil</h4></div>
                    
                 
                    <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
                    <div class="btn btn-primary">Buy Now</div>
                </div>
                </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img"><img class="card-img-size" src="{{asset('image/p2.jpg')}}" alt=""></div>
                    <div class="card-title"><h4>Castor Oil</h4></div>
                    
                 
                    <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
                    <div class="btn btn-primary">Buy Now</div>
                
            </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-img"><img class="card-img-size" src="{{asset('image/p3.jpg')}}" alt=""></div>
                    <div class="card-title"><h4>Castor Oil</h4></div>
                    
                 
                    <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
                    <div class="btn btn-primary">Buy Now</div>
                </div>
           </div>

           <div class="col-lg-3">
            <div class="card">
                <div class="card-img"><img class="card-img-size" src="{{asset('image/p4.jpg')}}" alt=""></div>
                <div class="card-title"><h4>Castor Oil</h4></div>
                
             
                <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
                <div class="btn btn-primary">Buy Now</div>
            </div>
            
          </div>
    
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-img"><img class="card-img-size" src="{{asset('image/p5.jpg')}}" alt=""></div>
            <div class="card-title"><h4>Castor Oil</h4></div>
            
         
            <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
            <div class="btn btn-primary">Buy Now</div>
        </div>
        </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-img"><img class="card-img-size" src="{{asset('image/p1.png')}}" alt=""></div>
            <div class="card-title"><h4>Castor Oil</h4></div>
            
         
            <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
            <div class="btn btn-primary">Buy Now</div>
        
    </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-img"><img class="card-img-size" src="{{asset('image/p2.jpg')}}" alt=""></div>
            <div class="card-title"><h4>Castor Oil</h4></div>
            
         
            <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
            <div class="btn btn-primary">Buy Now</div>
        </div>
   </div>

   <div class="col-lg-3">
    <div class="card">
        <div class="card-img"><img class="card-img-size" src="{{asset('image/p3.jpg')}}" alt=""></div>
        <div class="card-title"><h4>Castor Oil</h4></div>
        
     
        <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
        <div class="btn btn-primary">Buy Now</div>
    </div>

    .

</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-img"><img class="card-img-size" src="{{asset('image/p4.jpg')}}" alt=""></div>
            <div class="card-title"><h4>Castor Oil</h4></div>
            
         
            <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
            <div class="btn btn-primary">Buy Now</div>
        </div>
        </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-img"><img class="card-img-size" src="{{asset('image/p5.jpg')}}" alt=""></div>
            <div class="card-title"><h4>Castor Oil</h4></div>
            
         
            <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
            <div class="btn btn-primary">Buy Now</div>
        
    </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-img"><img class="card-img-size" src="{{asset('image/p1.png')}}" alt=""></div>
            <div class="card-title"><h4>Castor Oil</h4></div>
            
         
            <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
            <div class="btn btn-primary">Buy Now</div>
        </div>
   </div>

   <div class="col-lg-3">
    <div class="card">
        <div class="card-img"><img class="card-img-size" src="{{asset('image/p3.jpg')}}" alt=""></div>
        <div class="card-title"><h4>Castor Oil</h4></div>
        
     
        <div class="card-desc"><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis magnam doloremque recusandae reiciendis nostrum necessitatibus maiores illum iusto molestias ipsam.</p></div>
        <div class="btn btn-primary">Buy Now</div>
    </div>
</div>
</div>

@endsection