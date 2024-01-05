<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function about(Request $d){
        return view('admin/about');
    }

    public function form_submit(Request $d){

    $a  = $d->input('username');
    $b  = $d->input('password');
    $c = \DB::table('admin')->where('username',$a)->where('password',$b)->get();
    //dd(count($c));exit();
    if (count($c)>0) {
       return view('admin/index');
    } else {
        return ('wrong');
    }
    
    // $c = \DB::table('user')->insert(['username'=>$a,'password'=>$b]);
    // $c = \DB::table('user')->where('id',$id)->delete();
    // $c = \DB::table('user')->where('id',$id)->update(['username'=>$a,'password'=>$b]);
    // $c = \DB::table('user')->get();
    
    } 


    //when click employee manage url in header

    public function employee_manage(Request $d){
        $a = \DB::table('reg_form')->get();
        return view('admin/employee_manage',['sam'=>$a]);
    }

    public function update_employee(Request $d){
        $a = $d->id;
        $b = \DB::table('reg_form')->where('id',$a)->get();
        return view('admin/employee_edit',['aalamathu'=>$b]);
    }
    public function emp_update(Request $d){
        $id = $d->input('id');
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
      
        \DB::table('reg_form')->where('id',$id)->update(['name'=>$a,'f_name'=>$b,'age'=>$c,'dob'=>$e,'phone'=>$g,'email'=>$h,'degree'=>$i,'passing_year'=>$j,'department'=>$k,'position'=>$l]);
        return redirect('employee_manage');
    }


     public function emp_delete(Request $d){
        $id = $d->input('id');
      
        \DB::table('reg_form')->where('id',$id)->delete();
        return redirect('employee_manage');
    }

    // public function attendance(Request $d){

    //     return view('admin/attendance');

    // }

    public function dep_filter(Request $d)
    {
        $arr = [];
        $a = $d->input('id');
        // return $a;
        $b =\DB::table('reg_form')->where('position','Teamleader')->where('department',$a)->get();

        if ($a == 'WebDevelopment') {
           $cc =\DB::table('reg_form')->where('position','Developer')->where('department',$a)->get();
        }
        if ($a == 'Graphicdesign') {
            $cc =\DB::table('reg_form')->where('position','Designer')->where('department',$a)->get();
        }
        if ($a == 'Digitalmarketing') {
            $cc =\DB::table('reg_form')->where('position','Marketer')->where('department',$a)->get();
        }
        
        array_push($arr, $b);
        array_push($arr, $cc);


 
        return $arr;
    }


    public function pro_details(Request $d){


    $a  = $d->input('title');
    $b  = $d->input('task_dpt');
    $c  = $d->input('task_amn');
    $e  = $d->input('task_tl');
    $g = implode(',',$d -> input('task_mem'));     
    $h  = $d->input('task_start');
    $i  = $d->input('task_end');
    $j  = $d->input('overview');
    $k  = $d->input('client');
    $l  = $d->input('budget');

    

    $f = \DB::table('pro_details')->insert(['title'=>$a,'task_dpt'=>$b,'task_amn'=>$c,'task_tl'=>$e,'task_mem'=>$g,'task_start'=>$h,'task_end'=>$i,'overview'=>$j,'client'=>$k,'budget'=>$l]);
    return redirect('new_project');
 }

  public function manage_project(Request $d){
        $a = \DB::table('pro_details')->get();
        return view('admin/manage_project',['sam'=>$a]);
    }

 public function update_project(Request $z){
    
        $a = $z->id;
        $b = \DB::table('pro_details')->where('id',$a)->get();
        
        $v = $b[0]->task_tl;

        $h = $b[0]->task_dpt;
       
        if ($h == 'WebDevelopment') {
           $ch =\DB::table('reg_form')->where('position','Developer')->where('department',$h)->get();
        }
        if ($h == 'Graphicdesign') {
            $ch =\DB::table('reg_form')->where('position','Designer')->where('department',$h)->get();
        }
        if ($h == 'Digitalmarketing') {
            $ch =\DB::table('reg_form')->where('position','Marketer')->where('department',$h)->get();
        }

        if ($h == 'WebDevelopment') {
           $team =\DB::table('reg_form')->where('position','Teamleader')->where('department',$h)->get();
        }
        if ($h == 'Graphicdesign') {
            $team =\DB::table('reg_form')->where('position','Teamleader')->where('department',$h)->get();
        }
        if ($h == 'Digitalmarketing') {
            $team =\DB::table('reg_form')->where('position','Teamleader')->where('department',$h)->get();
        }
        
        return view('admin/edit_project',['ak'=>$b,'sam1'=>$ch,'leader'=>$team]);
    }


    public function project_edit(Request $d){
        $id = $d->input('id');
        $a  = $d->input('title');
        $b  = $d->input('task_dpt');
        $cc  = $d->input('task_amn1');

        $e  = $d->input('task_tl');
        $g  = implode(',',$d -> input('task_mem'));
        $h  = $d->input('task_start');
        $i  = $d->input('task_end');
        $j  = $d->input('overview');
        $k  = $d->input('client');
        $l  = $d->input('budget');
      
        \DB::table('pro_details')->where('id',$id)->update([
            'title'=>$a,
            'task_dpt'=>$b,
            'task_amn'=>$cc,
            'task_tl'=>$e,
            'task_mem'=>$g,
            'task_start'=>$h,
            'task_end'=>$i,
            'overview'=>$j,
            'client'=>$k,
            'budget'=>$l
        ]);
        return redirect('manage_project');
    }


   public function project_delete(Request $d){
        $id = $d->input('id');
      
        \DB::table('pro_details')->where('id',$id)->delete();
        return redirect('manage_project');
    }







}

  