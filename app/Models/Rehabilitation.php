<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehabilitation extends Model
{
    use HasFactory;

    protected $table = 'rehabilitations';
        
    protected $fillable = [
        'rehabilitation_resore_develop',
        'rehabilitation_improve',
        'rehabilitation_reintegrate',
        'rehabilitation_placed',
        'rehabilitation_refer',
        'rehabilitation_transfer',
        
       
    ];
   

    public function children()
    {
        return $this->belongsTo(Children::class);
    }
}
