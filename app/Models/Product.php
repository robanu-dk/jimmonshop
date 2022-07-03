<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['admin','kategori'];

    // protected $fillable = [
    //     'id_admin','id_kategori'
    // ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('nama_produk','like','%' . request('search') . '%')
                  ->orWhere('harga','like','%' . request('search') . '%')
                  ->orWhere('deskripsi','like','%' . request('search') . '%')
        );
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function pembelians()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
