<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $fillable = [	'firstName',	'lastName',	'telephone',	'email',	'department_id',
        'pathCV',	'pathDoc', 'info'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
