<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $table = 'recommendations';
        
    protected $fillable = [
        'recommendation_recommendation',
        'recommendation_plan_of_action',
        'recommendation_action_taken',
        
        
       
    ];
    

    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
