<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'deptId';

    protected $fillable = ['deptName'];

    // Relationships
    public function users()
    {
        return $this->hasMany(User::class, 'deptId', 'deptId');
    }

    public function requestForms()
    {
        return $this->hasMany(RequestForm::class, 'deptId', 'deptId');
    }
}
