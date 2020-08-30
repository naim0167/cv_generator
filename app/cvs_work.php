<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cvs_work extends Model
{
    protected $table='cvs_work';
    protected $fillable =[
        'job_start_date','job_end_date','job_title','company_name','job_location','workdetails','cv_id'
    ];
}
