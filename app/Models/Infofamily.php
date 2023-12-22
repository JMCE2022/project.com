<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infofamily extends Model
{
    use HasFactory;

    protected $table = 'infofamilies';

    protected $fillable = [
        'infofamily_name_of_father',
        'infofamily_name_of_mother',
        'infofamily_age_of_father',
        'infofamily_age_of_mother',
        'infofamily_address',
        'infofamily_occupation',
        'infofamily_occupation_mother',
        'children_id', // Assuming you have a foreign key field
    ];

    // Relationships
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
