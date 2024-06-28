<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScholarshipType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'committee_id'
    ];

    /**
     * The students that belong to the ScholarshipType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class)->withPivot('semester')->withTimestamps();
    }

    /**
     * Get the committee that owns the ScholarshipType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function committee(): BelongsTo
    {
        return $this->belongsTo(Committee::class);
    }
}
