<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Request extends Model
{
    protected $table = 'requests'; // optional if your table name matches plural convention

    protected $fillable = [
        'description',       // details of the request (e.g., "Print flyers")
        'quantity',          // number of copies or items
        'paper_size',        // e.g., A4, A3, Letter
        'color_type',        // e.g., Black & White, Colored
        'binding',           // e.g., Stapled, Ring bound, None
        'total_pages',       // total number of pages (for cost calculation)
        'total_cost',        // computed total cost
        'status',            // e.g., Pending, In Progress, Completed, Cancelled
        'requestedBy',       // name or user ID of the requester
        'forwardedBy',       // person who forwarded it
        'receivedBy',        // person who received/handled it
        'deptId',            // foreign key for Department
        'remarks',           // optional notes or feedback
        'approved_at',       // timestamp when approved
        'completed_at',      // timestamp when completed
    ];

    // Relationships
    public function department()
    {
        return $this->belongsTo(Department::class, 'deptId', 'id');
    }
}
