<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebooks';

    protected $primaryKey = 'ebook_id';
    
    protected $fillable = [
        'title',
        'author',
        'description',
    ];

    public function Order()
    {
        return $this->belongsToMany(Order::class,'role_id','role_id');
    }
}
