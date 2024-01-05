<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insert extends Controller
{
    // public function about(Request $d){
    //     return view('about');
    // }

    public function reg_submit(Request $d){
    
    $a  = $d->input('name');
    $b  = $d->input('f_name');
    $c  = $d->input('age');
    $e  = $d->input('dob');
    $g  = $d->input('phone');
    $h  = $d->input('email');
    $i  = $d->input('degree');
    $j  = $d->input('passing_year');
    $k  = $d->input('department');
    $l  = $d->input('position');

      
    //$f = \DB::table('reg_form')->where('name',$a)->where('f_name',$b)->where('age',$c)->where('date_birth',$e);
    // $e = \DB::table('user')->where('username',$a)->where('password',$b)->get();
    // //dd(count($c));exit();
    // if (count($c)>0) {
    //    return view('index', compact('c'));
    // } else {
    //     return ('wrong');
    // }
    
    $f = \DB::table('reg_form')->insert(['name'=>$a,'f_name'=>$b,'age'=>$c,'dob'=>$e,'phone'=>$g,'email'=>$h,'degree'=>$i,'passing_year'=>$j,'department'=>$k,'position'=>$l,]);
    return redirect('add_employee');
    // $c = \DB::table('user')->where('id',$id)->delete();
    // $c = \DB::table('user')->where('id',$id)->update(['username'=>$a,'password'=>$b]);
    // $c = \DB::table('user')->get();
    
    }   

}
  