<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class crud extends Controller
{
    public function OnInsert(Request $req){

        $request=$req->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'mssg' => 'required',
        ]);
     
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req ->input('number');
        $mssg = $req ->input('mssg');

        $insert = DB::insert('insert into laravel(name,email,phone,message) values(?,?,?,?)',[$name,$email,$phone,$mssg]);
     if($insert){
        return redirect()->back()->with('messagekey','Data insert success');
       
     }
     else{
        return redirect()->back()->with('messagekey','Data insert failed');
    }
    }

    public function OnSelect(){

        $select = DB::select('select * from laravel');
        return view('view',['userinfo'=>$select]);
    }

    public function OnDelete($id){
        $deleted = DB::delete('delete from laravel where id=?',[$id]);


        if($deleted){
            return redirect()->back()->with('messagekey','Data delete success');
           
         }
         else{
            return redirect()->back()->with('messagekey','Data  delete failed');
        }
    }

    public function OnEdit($id){

        $edit = DB::select('select * from laravel where id =?',[$id]);

        return view('edit',['key'=>$edit]);
    }

    public function OnUpdate(Request $req,$id){
        
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req ->input('number');
        $mssg = $req ->input('mssg');
       

        $update = DB::select('UPDATE laravel SET name=?,email=?,phone=?,message=? where id=?',[$name,$email,$phone,$mssg,$id]);

        

        if($update){
            return redirect()->back()->with('messagekey','Data update  failed');
           
         }
         else{
            return redirect()->back()->with('messagekey','Data  update success');
        }
    }

}
