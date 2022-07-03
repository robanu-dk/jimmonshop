<?php

namespace App\Models;

// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // use Sluggable;

    protected $guarded = ['id'];
    protected $with = ['admin'];

    /**
    * The attributes that are mass assignable.
    *
    * @var array<string, date, time>
    */
    // protected $fillable = [
    //     'admin_id',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //
    ];

    /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationship
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
