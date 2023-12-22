<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finder extends Model
{
    use HasFactory;

    protected $table = 'finders';
        
    protected $fillable = [
        'finder_fullname',
        'finder_age',
        'finder_sex',
        'finder_civil_status',
        'finder_occupation',
        'finder_relationship',
        'finder_others',
        'finder_problem_presented',
        'finder_background_information',
    ];
   
  
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
