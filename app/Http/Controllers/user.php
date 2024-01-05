<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function about(Request $d){
        return view('about');
    }

    public function form_submit(Request $d){

    $a  = $d->input('username');
    $b  = $d->input('password');
    $c = \DB::table('user')->where('username',$a)->where('password',$b)->get();
    //dd(count($c));exit();
    if (count($c)>0) {
       return view('index', compact('c'));
    } else {
        return ('wrong');
    }
    
    // $c = \DB::table('user')->insert(['username'=>$a,'password'=>$b]);
    // $c = \DB::table('user')->where('id',$id)->delete();
    // $c = \DB::table('user')->where('id',$id)->update(['username'=>$a,'password'=>$b]);
    // $c = \DB::table('user')->get();
    
    }   
}
    