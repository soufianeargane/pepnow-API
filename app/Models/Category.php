<?php

namespace App\Models;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public $fillable = ['name'];
    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
}
