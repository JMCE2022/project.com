<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $table = 'guardians';
        
    protected $fillable = [
        'guardian_fullname',
        'guardian_age',
        'guardian_sex',
        'guardian_date_of_birth',
        'guardian_educational_attainment',
        'guardian_relationship',
    ];
   
 
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
