<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notebook extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
