<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'company', 'position', 'logo', 'location', 'website', 'description', 'contract', 'expertise', 'expertiseTags', 'role', 'roleTags'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters["search"] ?? false) {
            $query->where("position", "like", "%" . request("search") . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('role', 'like', '%' . request('search') . '%');
        }
    }

    //Relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
