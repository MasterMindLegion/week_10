<?php

namespace App;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
   
    public function student() {
        $this->belongsToMany(Student::class, 'student_image');
    }
}
