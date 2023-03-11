<?php

namespace App\Models;

use App\Models\Kit;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['name','kit_id'];


    public function kits()
    {
        return $this->belongsToMany(Kit::class);
    }

}
