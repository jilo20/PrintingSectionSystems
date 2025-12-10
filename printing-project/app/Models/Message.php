<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Table name (optional if it follows Laravel convention)
    protected $table = 'messages';

    // Primary key (optional if 'id')
    protected $primaryKey = 'messageId';

    // Auto-incrementing (true by default)
    public $incrementing = true;

    // Data type of primary key
    protected $keyType = 'int';

    // Mass assignable attributes
    protected $fillable = [
        'senderId',
        'receiverId',
        'content',
        'isRead',
    ];

    // Cast isRead to boolean automatically
    protected $casts = [
        'isRead' => 'boolean',
    ];

    // Relationships

    // Sender of the message
    public function sender()
    {
        return $this->belongsTo(User::class, 'senderId', 'userId');
    }

    // Receiver of the message
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiverId', 'userId');
    }
}
