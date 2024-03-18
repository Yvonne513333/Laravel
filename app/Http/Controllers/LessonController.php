<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //課程管理
    public function index(){
        // $books = Book::get();

        $data =[
            // 'books' => $books,
            // 'count' => 5,
            // 'title' => '黃昏書店',
        ];

    return Inertia::render('Test',[
        'response' => $data,
    ]);
 }
    //新增課程(用連結方式,無呈現在網頁上)
    public function addclass(){
        // $books = Book::get();

        $data =[

        ];

    return Inertia::render('Addclass',[
        'response' => $data,
    ]);
 }
    //編輯課程(用連結方式,無呈現在網頁上)
    public function editcourse(){
        // $books = Book::get();

        $data =[

        ];

    return Inertia::render('Editcourse',[
        'response' => $data,
    ]);
 }

        // 學期排課
        public function semester(){
            // $books = Book::get();

            $data =[

            ];

        return Inertia::render('Semester',[
            'response' => $data,
        ]);
     }
        // 學期排課-新增課表
        public function semesteraddclass(){
            // $books = Book::get();

            $data =[

            ];

        return Inertia::render('Semesteraddclass',[
            'response' => $data,
        ]);
     }
        // 學期排課-編輯課表
        public function semesterexitclass(){
            // $books = Book::get();

            $data =[

            ];

        return Inertia::render('Semesterexitclass',[
            'response' => $data,
        ]);
     }


        // 學期排課-編輯課表
        public function store(){
            // Book::create([
            //     'name' => '哈利波特',
            //     'price' => '500',
            //     'content' => '已更新',
            // ]);

        return Inertia::render('Dashboard');
     }
}
