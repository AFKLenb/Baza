<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cum extends Model
{
    use HasFactory;

    protected $table = 'cums';

    protected $fillable = [
        'name', 'text', 'image', 'price', 'rating', 'quantity', 'is_active', 'collection_id'
    ];

    public function collection(){
        return $this->belongsTo(Collection::class, 'collection_id', 'id');
    }
}
