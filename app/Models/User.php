<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function booted(){
        static::creating(function($model){
            $model->created_by = Auth::id();
            $model->updated_by = Auth::id();
        });

        static::saving(function($model){
            $model->updated_by = Auth::id();
        });
    }

    public function bpa(){
        return $this->hasMany(BrandPersonalityAaker::class, 'created_by', 'updated_by');
    }

    public function bpar(){
        return $this->hasMany(BrandPersonalityAakerResult::class, 'created_by');
    }

    public function level(){
        return $this->hasMany(LevelUmkm::class, 'user_id');
    }

    public function marketer(){
        return $this->hasMany(Marketer::class, 'user_id');
    }

    public function profile(){
        return $this->hasMany(Profile::class, 'user_id');
    }

    public function strategi(){
        return $this->hasMany(StrategiDigital::class, 'user_id');
    }
}
