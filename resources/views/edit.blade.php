@extends('App.app')
@section('maincontent')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            @foreach ($key as $item)
                
            @endforeach
            @if('messagekey')

            <h3 class="alert alert-danger" >{{session('messagekey')}}</h3>



            @endif
            <form method="post" action="{{url('/update/'.$item->id)}}">
                @csrf
                <input type="text" value="{{$item->name}}" name="name" id="" class="form-control" placeholder="Enter Your Name">
                <input type="email" value="{{$item->email}}" name="email" id="" class="form-control" placeholder="Enter Your email">
                <input type="phone" value="{{$item->phone}}" name="number" id="" class="form-control" placeholder="Enter Your Mobile">
                <textarea name="mssg" value="{{$item->message}}" id="" class="form-control" cols="30" rows="10"
                    placeholder="Write your message:"></textarea>
            
                <button class="btn btn-primary">Update </button>
            
                <a href="{{url('/view')}}">View Data</a>
            </form>
        </div>
    </div>
</div>

@endsection
@section('keyTitle', 'ContactPage');