<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OutgoingLetter extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'letter_number',
        'letter_date',
        'recipient',
        'subject',
        'category',
        'summary',
        'status',
        'priority',
        'file_number',
        'instruction_number',
        'package_number',
        'file_path',
        'storage_disk',
        'original_filename',
        'file_mime',
        'file_size',
        'gdrive_file_id',
        'gdrive_file_name',
        'user_id',
    ];

    protected $casts = [
        'letter_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
