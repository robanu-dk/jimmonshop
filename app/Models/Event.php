<?php

namespace App\Models;

// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Authenticatable
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
    //     'slug',
    //     'nama_event',
    //     'image',
    //     'pemateri',
    //     'tanggal',
    //     'waktu',
    //     'location',
    //     'benefits',
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

    // Search
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']?? false, function($query, $search){
            return $query->where('nama_event','like','%' . $search . '%')
                        ->orWhere('pemateri','like','%' . $search . '%')
                        ->orWhere('tanggal','like','%' . $search . '%')
                        ->orWhere('location','like','%' . $search . '%');
        });
    }

    // Relationship
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function registerEvent()
    {
        return $this->hasMany(RegisterEvent::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
