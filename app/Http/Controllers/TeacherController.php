<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
        //教師列表
        public function teacherlist(){
    
            $data =[
    
            ];
    
        return Inertia::render('Teacherlist',[
            'response' => $data,
        ]);
     }
        // 新增教師
        public function addt(){

            $data =[

            ];

        return Inertia::render('Addteacher',[
            'response' => $data,
        ]);
     }

           //編輯教師(用連結方式,無呈現在網頁上)
           public function editteacher(){

            $data =[
    
            ];
    
        return Inertia::render('Editteacher',[
            'response' => $data,
        ]);
     }

     // 新增教師
     public function addteacher(Request $request) {
        // dd($request->all());
        $teacherData = $request->all();

        $teachers = Teacher::create([
            'teachers_id' => $teacherData['teachers_id'],
            'teachers_name' => $teacherData['teachers_name'],
            'teachers_describe' => $teacherData['teachers_describe'],
            ]
        );
        return Inertia::render('Teacherlist', [
            'response' => $teachers,
        ]);
    }
}
