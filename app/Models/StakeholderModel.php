<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StakeholderModel extends Model
{
    use HasFactory;

    private static $stakeholder = [
        [
            'id' => 1,
            'slug' => 'tentang+organisasi',
            'title' => 'Tentang Organisasi',
            'name' => 'Biro Usaha Milik JIMM (BUMJ)',
            'image' => 'logo-tentang-organisasi.jpeg',
            'excerpt' => 'BUMJ memiliki kepanjangan Biro Usaha Milik JIMM
                          merupakan biro yang terdapat di organisasi mahasiswa yang berada di Fakultas Sains dan
                          Teknologi (FST)....',
            'description' => 'BUMJ memiliki kepanjangan Biro Usaha Milik JIMM
                              merupakan biro yang terdapat di organisasi mahasiswa yang berada di Fakultas Sains dan
                              Teknologi (FST) yang bernama JIMM. BUMJ bergerak di bidang yang berkaitan dengan usaha dan
                              kewirausahaan. BUMJ sendiri memiliki event yang berupa kajian-kajian terkait kewirausahaan.
                              Selain itu, BUMJ juga menjual beberapa produk secara online melalui instagramnya yaitu @jimmonshop_.'
        ],
        [
            'id' => 2,
            'slug' => 'tentang+jimmonshop',
            'title' => 'Tentang jimmonshop',
            'name' => 'jimmonshop',
            'image' => 'Logo-jimm-on-shop.png',
            'excerpt' => 'jimmonshop merupakan aplikasi berbasis website jual-beli dimana target pasarnya adalah
                          masyarakat umum terutama remaja. Proses transaksi....',
            'description' => 'jimmonshop.com merupakan aplikasi berbasis website jual-beli dimana target pasarnya adalah
                              masyarakat umum terutama remaja. Proses transaksi atau pembelian dilakukan secara online dan
                              selanjutnya barang yang dipesan akan dikirimkan ke tempat pembeli.'
        ]
    ];

    public static function information()
    {
        return collect(self::$stakeholder);
    }

    public static function detailInformation($slug)
    {
        $information = static::information(request());

        return $information->firstWhere('slug',$slug);

    }

    public static function scopeFilter($query, $filter)
    {
        $query->when($filter ?? false, function($query, $search){
            return $query->where('title','like','%' . $search . '%');
        });
    }

}
