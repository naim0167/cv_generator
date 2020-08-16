<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    protected $fillable =['firstname','lastname', 'address', 'zipcode', 'city', 'phone', 'mobile', 'cv_email',
    'birthday', 'nationality', 'language1', 'language2', 'language3','profilesummary','technicalSkills', 'personalInterest'];
}
