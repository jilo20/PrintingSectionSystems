<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Requests extends Model
{
    protected $fillable = [
        "description","forwardedBy","receivedBy","requestedBy","status","deptId"
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'deptId', 'id');
    }
}
