<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Paguyuban;

class PaguyubanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('paguyubans')->delete();

      \DB::table('paguyubans')->insert([
        'slug' => 'IMSU',
        'nama' => 'IMSU (Ikatan Mahasiswa Sumatera Utara',
        'keterangan' => 'IMSU atau Ikatan Mahasiswa Sumatera Utara merupakan salah satu paguyuban yang menaungi kelompok mahasiswa yang berasal dari Sumatera Utara di lingkungan Universitas Udayana. ',
        'contact' => 'CP : Ketua Imsu (carlos) 081383409981',
        'logo' => 'IMSU.png',
      ]);

      \DB::table('paguyubans')->insert([
        'slug' => 'IKMM',
        'nama' => 'IKMM (Ikatan Keluarga Seluruh Mahasiswa Minang)',
        'keterangan' => 'Ikatan Keluarga Mahasiswa Minang Bali (IKMM Bali) adalah paguyuban yang anggotanya terdiri dari mahasiswa yang tengah menempuh perkuliahan di Bali, yang berasal dari suku minangkabau atau memiliki keturunan darah minang dan juga orang-orang yang tempat tinggalnya berasal dari sumatera barat, riau dan jambi. ',
        'contact' => 'CP IKMM : 082288703169 (WA)/ @614nffuy (Line)<br>Instagram : @ikmm.bali',
        'logo' => 'IKMM.png',
      ]);

      \DB::table('paguyubans')->insert([
        'slug' => 'PAMANAHAN',
        'nama' => 'PAMANAHAN (Paguyuban Mahasiswa Tanah Pasundan Bali)',
        'keterangan' => 'PAMANAHAN atau Paguyuban Mahasiswa Tanah Pasundan Bali merupakan salah satu paguyuban yang menaungi kelompok mahasiswa yang berasal dari Jawa Barat di lingkungan Universitas Udayana.',
        'contact' => 'Instagram: pamanahanbali <br> Email: pamanahan91@gmail.com <br> CP: 08111352724 (felisha)',
        'logo' => 'PMNHN.png',
      ]);

      \DB::table('paguyubans')->insert([
        'slug' => 'GAJAYANA',
        'nama' => 'GAJAYANA (Keluarga Jawa Udayana',
        'keterangan' => 'Paguyuban GAJAYANA adalah perkumpulan mahasiswa yang berasal dari wilayah Provinsi Jawa Timur, Jawa Tengah, dan Yogyakarta.',
        'contact' => 'CP Gajayana : +62 881-0375-7752 (Ike Rahayu) <br>Social Media : Instagram @gajayanabali',
        'logo' => 'GAJAYANA.png',
      ]);

      \DB::table('paguyubans')->insert([
        'slug' => 'KMOSSAK',
        'nama' => 'KMOSSAK (Komoenitas Mahasiswa Sasak)',
        'keterangan' => 'Paguyuban KMOSSAK adalah salah satu paguyuban yang ada di Universitas Udayana yang merupakan perkumpulan mahasiswa khususnya berasal dari Lombok yang berkuliah di Pulau Bali, Paguyuban ini dibuat dengan tujuan saling menyatukan dan membantu sesama mahasiswa Lombok maupun luar daerah yang membutuhkan bantuan terutama yang baru pertama kali ke Bali.',
        'contact' => 'CP Organisasi KMOSSAK: 087755099723 <br>
        Social Media : Instagram @kmossakbali',
        'logo' => 'KMOSSAKA.png',
      ]);

      \DB::table('paguyubans')->insert([
        'slug' => 'PMBD',
        'nama' => 'PMBD  (Perhimpunan Mahasiswa Bima Dompu-Bali)',
        'keterangan' => 'Perhimpunan Mahasiswa Bima Dompu atau biasa di singkat PMBD Bali ialah paguyuban atau organisasi mahasiswa Bima dan Dompu wilayah bali yang berasaskan kekeluargaan, PMBD memiliki Motto "Maja Labo Dahu Nggahi Rawi Pahu".',
        'contact' => 'CP : 08533891769 (Agus) <br>
        Social Media : Instagram @pmbd_bali',
        'logo' => 'PMBD.png',
      ]);



      \DB::table('paguyubans')->insert([
        'slug' => 'IKAMI',
        'nama' => 'IKAMI (Ikatan Keluarga Mahasiswa Sulawesi Selatan)',
        'keterangan' => 'IKAMI Sulsel rumah kita, bangunlah dengan cinta. Rumah bagi para mahasiswa pelajar asal maupun keturunan Sulawesi Selatan. Berdiri sejak 1961 lalu tersebar di seluruh Indonesia sehingga menjadikan IKAMI Sulsel adalah organisasi mahasiswa daerah terbesar di Indonesia.',
        'contact' => 'CP IKAMI : 081947626567  (Ridwan) <br>
        Social Media : Instagram @ikamibali',
        'logo' => 'IKAMI.png',
      ]);

      \DB::table('paguyubans')->insert([
        'slug' => 'IMMAPA',
        'nama' => 'IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)',
        'keterangan' => 'Paguyuban GAJAYANA adalah perkumpulan mahasiswa yang berasal dari wilayah Provinsi Jawa Timur, Jawa Tengah, dan Yogyakarta.',
        'contact' => 'CP Gajayana : +62 881-0375-7752 (Ike Rahayu) <br>
        Social Media : Instagram @gajayanabali',
        'logo' => 'IMMAPA.png',
      ]);
    }
}
