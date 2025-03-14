<?php

namespace App\Models;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $casts = [];

    protected $hidden = ['name'];

    function permissions(){
        return $this->belongsToMany(Permission::class);
    }


}
