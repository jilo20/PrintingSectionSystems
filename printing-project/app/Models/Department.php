<?php

namespace App\Models;

use App\Models\Request;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{   
    protected $table = "departments";
    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'department', 'id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'department_id', 'id');
    }


}
