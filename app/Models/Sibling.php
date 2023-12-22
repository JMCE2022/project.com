<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    use HasFactory;

    protected $table = 'siblings';
        
    protected $fillable = [
        'sibling_fullname',
        'sibling_age',
        'sibling_sex',
        'sibling_date_of_birth',
        'sibling_educational_attainment',
        'sibling_relationship',
    ];
   
  
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
