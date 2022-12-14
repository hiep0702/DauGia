<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
      return $date->format('Y-m-d H:i:s');
    }

    public function session()
    {
        return $this->hasOne(Session::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
