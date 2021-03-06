<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['role_id',
        'name',
        'company_id',
        'email',
        'password',
        'slug'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setNameAttribute($value){
        $this->attributes['name']= $value;
        $this->attributes['slug']= Str::slug($value);
    }
    public function setPasswordAttribute($value){
        $this->attributes['password']= Hash::make($value);
    }

    public function role(){
        return $this->belongsTo(Role::class,'role_id')->withDefault();
    }
    public function company(){
        return $this->belongsTo(Company::class,'company_id')->withDefault();
    }

    public function scopeNotAdmin($query){
        return $query->where('company_id','!=',0);
    }
}
