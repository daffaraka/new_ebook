<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   
  

    
    protected $primaryKey = 'account_id';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'role_id',
        'gender_id',
        'display_picture_link',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Gender()
    {
        return $this->belongsTo(Gender::class,'gender_id','gender_id');
    }

    public function Role()
    {
        return $this->belongsTo(Role::class,'role_id','role_id');
    }



    
    // public function users()
    // {
    //     return $this->hasMany(transaction::class);
    // }
}
