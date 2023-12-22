<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $table = 'childrens';

    protected $fillable = [
        'case_number',
        'full_name',
        'sex',
        'age',
        'religion',
        'date_of_birth',
        'place_of_birth',
        'educational_attainment',
        'region',
        'province',
        'city',
        'barangay',
        'street_address',
        'present_health_condition',
        'physical_characteristic',
        'created_by',
        'is_deleted',
    ];
    

    static public function getChildren()
    {
        return self::select('childrens.*')

            ->where('is_deleted', '=', 0)
            ->orderBy('id', 'desc');
           
    }
    static public function getArchive()
    {
        return self::select('childrens.*')
            
            ->where('is_deleted', '=', 1)
            ->orderBy('id', 'desc');
            
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
    public function infofamily()
    {
        return $this->hasOne(Infofamily::class);
    }
    public function sibling()
    {
        return $this->hasMany(Sibling::class);
    }
    public function guardian()
    {
        return $this->hasOne(Guardian::class);
    }
    public function finder()
    {
        return $this->hasOne(Finder::class);
    }
    public function habit()
    {
        return $this->hasOne(Habit::class);
    }
    public function development()
    {
        return $this->hasOne(Development::class);
    }
    public function rehabilitation()
    {
        return $this->hasOne(Rehabilitation::class);
    }
    public function recommendation()
    {
        return $this->hasOne(Recommendation::class);
    }
}
