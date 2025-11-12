<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestJob extends Model
{
    use HasFactory;

    protected $primaryKey = 'jobId';

    protected $fillable = [
        'requestFormId', 'paperType', 'copies', 'originals', 'description', 'service_type',
        'isB2B', 'isFilm', 'cost'
    ];

    // Relationships
    public function requestForm()
    {
        return $this->belongsTo(RequestForm::class, 'requestFormId', 'requestFormId');
    }
}
