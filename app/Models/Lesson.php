<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\UserLesson;

class Lesson extends Model
{
    protected $fillable = [
        'title', 'description', 'requirement', 'time', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function getCourseTitleAttribute()
    {
        return $this->course->title;
    }

    public function userLesson()
    {
        return $this->hasMany(UserLesson::class);
    }

    public function getLessonUserAttribute()
    {
        return $this->userLesson()->count();
    }
}
