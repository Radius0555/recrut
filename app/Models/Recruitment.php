<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $fillable = [	'firstName',	'lastName',	'telephone',	'email',	'area',
        'pathCV',	'pathDoc', 'info'];
}
