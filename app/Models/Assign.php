<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function extension() {
        return $this->belongsTo(Extension::class);
    }
}
