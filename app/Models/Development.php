<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    protected $table = 'developments';
        
    protected $fillable = [
        'development_birth_history',
        'development_birth_weight',
        'development_birth_height',
        'development_describe_abnormalities',
       
    ];
   
   
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
