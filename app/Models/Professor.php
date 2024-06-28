<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Professor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'identification_number',
        'committee_id',
    ];

    /**
     * Get the Committee that owns the Professor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Committee(): BelongsTo
    {
        return $this->belongsTo(Committee::class);
    }

    /**
     * Get the professor's user.
     */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
}
