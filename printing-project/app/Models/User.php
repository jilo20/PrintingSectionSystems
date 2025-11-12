<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'userId';

    protected $fillable = ['fname', 'lname', 'email', 'password', 'deptId', 'role'];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'deptId', 'deptId');
    }

    public function requestForms()
    {
        return $this->hasMany(RequestForm::class, 'userId', 'userId');
    }
}
