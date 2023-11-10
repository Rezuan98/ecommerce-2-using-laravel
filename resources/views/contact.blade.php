@extends('App.app')

@section('keyTitle', 'ContactPage');
@section('maincontent')

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="text-center mt-5">Contact With Us</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if('messagekey')

            <h3 class="alert alert-danger" >{{session('messagekey')}}</h3>



            @endif

                <form method="post" action="{{url('/insert')}}">
                    @csrf
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name">
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter Your email">
                    <input type="phone" name="number" id="" class="form-control" placeholder="Enter Your Mobile">
                    <textarea name="mssg" id="" class="form-control" cols="30" rows="10"
                        placeholder="Write your message:"></textarea>

                    <button class="btn btn-primary">Send Us</button>

                    <a href="{{url('/view')}}">View Data</a>
                </form>

            </div>
            <div class="col-lg-5">
                <h1> Our Location</h1>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.292726877478!2d91.10019587417429!3d22.791614724909724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3754af712aaac0b7%3A0x4bab3d112f6b6f3f!2sNoakhali%20Science%20and%20Technology%20University!5e0!3m2!1sen!2sbd!4v1691156839199!5m2!1sen!2sbd"
                    width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>



@endsection
