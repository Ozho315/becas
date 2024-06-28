<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScholarshipApplication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'documents',
        'scholarship_type_id',
        'student_id',
        'committee_id',
    ];

    /**
     * Get the committee that owns the ScholarshipApplication
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function committee(): BelongsTo
    {
        return $this->belongsTo(Committee::class);
    }
}
