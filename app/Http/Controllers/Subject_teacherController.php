<?php

namespace App\Http\Controllers;
use App\Models\Subject_teacher;
use Illuminate\Http\Request;

class Subject_teacherController extends Controller
{
    public function addsubject_teacher(Request $req)
    {
        $req->validate([
            'subject_id'=>'required',
            'teacher_id'=>'required'
            

        ]);
        $subject_teacher=new Subject_teacher();
        $subject_teacher->subject_id=$req->subject_id;
        $subject_teacher->teacher_id=$req->teacher_id; 
        $subject_teacher->save();
        return $subject_teacher;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function updatesubject_teacher(Request $req,$subject_teacher_id)
    {
        
        $req->validate([
            'subject_id'=>'required',
            'teacher_id'=>'required'
            
        ]);
        $subject_teacher=Subject_teacher::find($subject_teacher_id);
        $subject_teacher->subject_id=$req->get('subject_id');
        $subject_teacher->teacher_id=$req->get('teacher_id'); 
        $subject_teacher->save();
        return $subject_teacher;
        // if($result){
        //     return["result"=>"Data have been saved"];
        // }else{
        //     return["result"=>"not success"];
        // }
        

    }
    public function destroy_a_subject_teacher($subject_teacher_id){
        $subject_teacher=Subject_teacher::find($subject_teacher_id);
        return $subject_teacher->delete();
    }
}
