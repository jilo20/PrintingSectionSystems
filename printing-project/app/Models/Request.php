<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Request extends Model
{
    protected $table = 'requests'; // optional if your table name matches plural convention

    protected $fillable = [
        'description',
        'forwarded_by',
        'received_by',
        'requested_by',
        'status',
        'service_type',
        'original',
        'copies',
        'type_of_paper',
        'is_b2b',
        'department_id',
        'total_cost',
        'date_created',
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'deptId', 'id');
    }
}
