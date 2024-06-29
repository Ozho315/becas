<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Student extends Model
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
        'average_rating',
        'average_incomes',
        'is_disabled',
        'phone_number',
        'address',
        'profile_picture_path',
        'semester',
        'major_id',
    ];

    /**
     * Get the major that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    /**
     * The scholarshipTypes that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function scholarshipTypes(): BelongsToMany
    {
        return $this->belongsToMany(ScholarshipType::class)->withPivot('semester')->withTimestamps();
    }

    /**
     * Get the student's user.
     */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }

    /**
     * Get all of the scholarshipApplications for the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function scholarshipApplications(): HasMany
    {
        return $this->hasMany(ScholarshipApplication::class);
    }
}
