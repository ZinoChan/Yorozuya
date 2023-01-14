<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    
    protected $fillable = ['company', 'position', 'logo', 'location', 'website', 'description', 'contract', 'expertise', 'expertiseTags', 'role', 'roleTags'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters["search"] ?? false) {
            $query->where("position", "like", "%" . request("search") . '%')->orWhere('description', 'like', '%' . request('search') . '%')->orWhere('role', 'like', '%' . request('search') . '%');
        }
    }
}
