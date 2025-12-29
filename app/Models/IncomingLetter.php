<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingLetter extends Model
{
    protected $fillable = [
        'index_code',
        'received_date',
        'sender',
        'subject',
        'letter_date',
        'letter_number',
        'forwarded_to',
        'instruction',
        'file_path',
        'user_id',
    ];

    /**
     * Get the user that owns the letter.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
