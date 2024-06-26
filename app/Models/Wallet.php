<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'type',
    ];

    const CREDIT = 'credit';
    const DEBIT = 'debit';

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
