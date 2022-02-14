<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $primaryKey = 'order_id';

    protected $fillable = [
        'account_id',
        'ebook_id',
        'order_status'
    ];

    public function EBook()
    {
        return $this->hasMany(Ebook::class,'ebook_id','ebook_id');
    }
}
