<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{
    use HasFactory;
    use HasTranslations;
    Public $translatable = ['Name'];

    protected $fillable=['Name','Notes'];

    public function Classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function Sections()
    {
        return $this->hasMany(Section::class, 'Grade_id');
    }
}
