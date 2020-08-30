<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cvs_education extends Model
{
    protected $table = 'cvs_education';
    protected $fillable =[
        'education_institute','education_location','education_degree','education_subject','education_start_date','education_end_date','cv_id'
    ];
}
