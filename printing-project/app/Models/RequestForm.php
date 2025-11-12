<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    use HasFactory;

    protected $primaryKey = 'requestFormId';

    protected $fillable = [
        'deptId', 'userId', 'receivedBy', 'forwardedBy',
        'requestedBy', 'approvedBy', 'timeIn', 'timeOut',
        'created_at', 'totalCost'
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'deptId', 'deptId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function requestJobs()
    {
        return $this->hasMany(RequestJob::class, 'requestFormId', 'requestFormId');
    }
}
