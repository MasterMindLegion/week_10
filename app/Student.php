<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
class Student extends Model
{
    protected $table = 'students';
   
    public function image() {
        $this->belongsToMany(Image::class, 'student_image');
    }
}
