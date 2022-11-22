<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Department extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['employee', 'group'];

    // public function scopeFilter($query) {
    //     if($query) {
    //         dd($query);
    //     }    
        // if(request()) {
            // if(request(['searchBy']) === "name") {
                // dd(request(['searchBy']));
                // return $query->where('name', 'like', '%' . request('search') . '%');
            // }elseif(request(['searchBy']) == "isActive") {
            //     if(request(['search']) == "isActive"){
            //         return $query->where('isActive', true);
            //     }else{
            //         return $query->where('isActive', false);
            //     }
            // }
        // }
    // }

    public function employee() {
        return $this->hasMany(Employee::class);
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }
}
