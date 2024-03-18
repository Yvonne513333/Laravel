<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
        // 允許更新的欄位(設定白名單的概念)
        protected $fillable = [
            'teachers_id',
            'teachers_name',
            'teachers_email',
            'teachers_password',
            'teachers_describe',
            'teachers_courses_id',
        ];
}
