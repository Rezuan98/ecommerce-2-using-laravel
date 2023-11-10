@extends('App.app')

@section('keyTitle', 'ViewPage');

@section('maincontent')

<div class="container">
    <div class="row">
        <div class="col-lg-8">

           <h2 class="alert alert-warning"> {{@session('messagekey')}}</h2>

            <table class="table">
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Edit</th>
                <th>Delete</th>
            
                <tbody>
                   @foreach ($userinfo as $item)
            
                   <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->message}}</td>
                    <td><a href="{{url('/edit/'.$item->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="{{url('/delete/'.$item->id)}}"><button class="btn btn-warning">Delete</button></a></td>
                </tr>
                       
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection