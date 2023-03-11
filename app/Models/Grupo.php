<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable=['name','curso_id','user_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all of the cursos for the Grupo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos(): HasMany
    {
        return $this->hasMany(Course::class);
    }

}
