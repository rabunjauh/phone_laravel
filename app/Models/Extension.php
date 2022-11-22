<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function assign() {
        return $this->hasMany(Assign::class);
    }
}
