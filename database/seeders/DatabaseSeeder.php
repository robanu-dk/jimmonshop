<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Kategori;
use App\Models\Product;
use App\Models\Gender;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Gender::create([
            'name' => 'Akhwat'
        ]);

        Gender::create([
            'name' => 'Ikhwan'
        ]);

        User::create([
            'name' => 'Jasmine Yulis Saputri',
            'gender_id' => 1,
            'username' => 'jasmine+yulis+saputri',
            'email' => 'jasmine@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Robanu Dakhayin',
            'gender_id' => 2,
            'username' => 'robanu+dakhayin',
            'email' => 'robanu@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Admin::create([
            'name' => 'Jasmine Yulis Saputri',
            'username' => 'admin1',
            'kontak' => '6285213738460',
            'provinsi' => 'Jawa Timur',
            'daerah' => 'Surabaya',
            'kecamatan' => 'Mulyosari',
            'jalan' => 'Mahakam',
            'kodepos' => '66123',
            'email' => 'jasmine@gmail.com',
            'password' => bcrypt('1234999')
        ]);

        Admin::create([
            'name' => 'Robanu Dakhayin',
            'username' => 'admin2',
            'kontak' => '6288228400856',
            'provinsi' => 'Jawa Timur',
            'daerah' => 'Surabaya',
            'kecamatan' => 'Gubeng',
            'jalan' => 'Jojoran I',
            'kodepos' => '66112',
            'email' => 'robanu@gmail.com',
            'password' => bcrypt('password')
        ]);

        Admin::create([
            'name' => 'Admin Uji Coba',
            'username' => 'admin20',
            'kontak' => '6285213738460',
            'provinsi' => 'Jawa Timur',
            'daerah' => 'Surabaya',
            'kecamatan' => 'Mulyogandum',
            'jalan' => 'Mahiswa',
            'kodepos' => '66923',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        Kategori::create([
            'admin_id' => 2,
            'nama_kategori' => 'Sewa Zoom',
            'slug' => 'sewa+zoom',
            'keterangan' => 'Batas akhir pengajuan sewa adalah sehari sebelum acara',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 1,
            'nama_kategori' => 'Fashion',
            'slug' => 'fashion',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 2,
            'nama_kategori' => 'Hampers',
            'slug' => 'hampers',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 1,
            'nama_kategori' => 'Mug',
            'slug' => 'mug',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 1,
            'nama_kategori' => 'Kategori 1',
            'slug' => 'kategori+1',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 2,
            'nama_kategori' => 'Kategori 2',
            'slug' => 'kategori+2',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 1,
            'nama_kategori' => 'Kategori 3',
            'slug' => 'kategori+3',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Kategori::create([
            'admin_id' => 1,
            'nama_kategori' => 'Kategori 4',
            'slug' => 'kategori+4',
            'keterangan' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis fugit, iure quas itaque possimus, vero est accusantium adipisci nostrum debitis architecto numquam aliquam deserunt nam ea! Amet laborum vel iusto aspernatur molestiae fugiat, consequatur tempora, dignissimos fugit ipsam aliquam repudiandae.',
            'image' => 'Logo-jimm-on-shop.png'
        ]);

        Product::create([
            'kategori_id' => 1,
            'admin_id' => 2,
            'nama_produk' => 'SEWA ZOOM MURAH PREMIUM DAN JASA UPGRADE ZOOM PREMIUM',
            'slug' => 'sewa+zoom',
            'image' => 'sewa_zoom.png',
            'jumlah' => 8,
            'harga' => 2000,
            'deskripsi' => 'Unlimited duration record ✅<br>Live stream & Co-host fitur✅<br>Breakout room✅<br>Polling✅'
        ]);

        Product::create([
            'kategori_id' => 2,
            'admin_id' => 1,
            'nama_produk' => 'PROMO LONG TUNIK MEISYA',
            'slug' => 'promo+long+tunik+meisya',
            'image' => 'fashion.png',
            'jumlah' => 20,
            'harga' => 110000,
            'deskripsi' => 'Bahan Matt Twistcone<br>Ld 105 Fit to XL<br>FREE ONGKIR sekitar unair kampus a,b dan c'
        ]);

        Product::create([
            'kategori_id' => 3,
            'admin_id' => 1,
            'nama_produk' => 'CONTOH PRODUK 1',
            'slug' => 'contoh+produk+1',
            'image' => 'Logo-jimm-on-shop.png',
            'jumlah' => 20,
            'harga' => 11000,
            'deskripsi' => 'deskripsi'
        ]);

        Product::create([
            'kategori_id' => 4,
            'admin_id' => 2,
            'nama_produk' => 'CONTOH PRODUK 2',
            'slug' => 'contoh+produk+2',
            'image' => 'Logo-jimm-on-shop.png',
            'jumlah' => 20,
            'harga' => 11000,
            'deskripsi' => 'deskripsi'
        ]);

        Product::create([
            'kategori_id' => 1,
            'admin_id' => 2,
            'nama_produk' => 'CONTOH PRODUK 3',
            'slug' => 'contoh+produk+3',
            'image' => 'Logo-jimm-on-shop.png',
            'jumlah' => 20,
            'harga' => 11000,
            'deskripsi' => 'deskripsi'
        ]);

        Product::create([
            'kategori_id' => 2,
            'admin_id' => 2,
            'nama_produk' => 'CONTOH PRODUK 4',
            'slug' => 'contoh+produk+4',
            'image' => 'Logo-jimm-on-shop.png',
            'jumlah' => 20,
            'harga' => 11000,
            'deskripsi' => 'deskripsi'
        ]);

        Product::create([
            'kategori_id' => 3,
            'admin_id' => 2,
            'nama_produk' => 'CONTOH PRODUK 5',
            'slug' => 'contoh+produk+5',
            'image' => 'Logo-jimm-on-shop.png',
            'jumlah' => 20,
            'harga' => 11000,
            'deskripsi' => 'deskripsi'
        ]);

        Product::create([
            'kategori_id' => 4,
            'admin_id' => 2,
            'nama_produk' => 'CONTOH PRODUK 6',
            'slug' => 'contoh+produk+6',
            'image' => 'Logo-jimm-on-shop.png',
            'jumlah' => 20,
            'harga' => 11000,
            'deskripsi' => 'deskripsi'
        ]);

        Event::create([
            'nama_event' => 'KAJIAN KEWIRAUSAHAAN: Wirausaha Sebagai Peluang Memaknai Berkah Ramadhan',
            'admin_id' => 2,
            'slug' => 'kajian-kewirausahaan:-wirausaha',
            'image' => 'event-2.jpg',
            'pemateri' => 'Ustadz Hutri Agus Prayudo',
            'tanggal' => '2022-04-09',
            'waktu' => '15:20:00',
            'location' => 'Zoom Meeting',
            'kuota' => 100,
            'benefits' => '1. Ilmu yang bermanfaat<br>'
        ]);

        Event::create([
            'nama_event' => 'MEMBANGUN JIWA ENTERPRENEUR DARI SUDUT PANDANG ISLAM',
            'admin_id' => 1,
            'slug' => 'contoh-format-penampilan+1',
            'image' => 'event-1.png',
            'pemateri' => 'Dr. Gancar C. Premananto, CMA., CDM. (Ketua Departemen Manajemen FEB Universitas Airlangga)',
            'tanggal' => '2021-05-01',
            'waktu' => '15:30:00',
            'location' => 'Zoom Meeting',
            'kuota' => 200,
            'benefits' => '1. Ilmu yang bermanfaat<br>2. Sertifikat ber-SKP<br>3. Reward bagi yang beruntung<br>4. Relasi<br><br>',
        ]);

        Event::create([
            'nama_event' => 'Contoh Format Penampilan 2',
            'admin_id' => 2,
            'slug' => 'contoh-format-penampilan+2',
            'image' => 'contoh-poster.png',
            'pemateri' => 'Ustadz <<nama>>',
            'tanggal' => '2020-04-09',
            'waktu' => '15:20:00',
            'location' => 'Zoom Meeting',
            'kuota' => 150,
            'benefits' => 'Contoh',
        ]);

    }
}
