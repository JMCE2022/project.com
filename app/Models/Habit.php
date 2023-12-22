<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory; 

    protected $table = 'habits';
        
    protected $fillable = [
        'habit_bedwetting',
        'habit_thumb_sucking',
        'habit_nail_biting',
        'habit_others',
        'habit_measles',
        'habit_chickenpox',
        'habit_mumps',
        'habit_allergy',
        'habit_convulsions',
        'habit_primary_complex',
        'habit_other_specify',
        'habit_motor_development',
        'habit_toilet_training',
       
    ];
   
  
    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
