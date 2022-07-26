<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\ForumAgama;

class ForumAgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('forum_agamas')->delete();

      \DB::table('forum_agamas')->insert([
        'slug' => 'FPMHD',
        'nama' => 'FPMHD  (Forum Persaudaraan Mahasiswa Hindu Dharma Universitas Udayana)',
        'keterangan' => 'Forum Persaudaraan Mahasiswa Hindu Dharma Universitas Udayana yang disingkat FPMHD-Unud merupakan organisasi mahasiswa Hindu dharma ditingkat Universitas Udayana yang dibentuk pada tanggal 28 Juni 1992.',
        'contact' => 'CP : +62 878-6181-5138 <br>
        Instagram: @fpmhd_unud',
        'logo' => 'FPMHD.png',
      ]);

      \DB::table('forum_agamas')->insert([
        'slug' => 'KBMK',
        'nama' => 'KBMK (Keluarga Besar Mahasiswa Kristen Universitas Udayana)',
        'keterangan' => 'KBMK UNUD (Keluarga Besar Mahasiswa Kristen Universitas Udayana) merupakan organisasi Kristen yang didirikan sebagai salah satu wadah pertumbuhan iman yang berasaskan Alkitab. KBMK Unud ada untuk mempersiapkan mahasiswa Kristen Protestan menjadi alumni yang takut akan Tuhan dan dapat menjadi berkat dalam keluarga, gereja, bangsa dan negara, serta dunia',
        'contact' => 'CP : 082399625257 (Friska) <br>
        Instagram: @kbmkunud',
        'logo' => 'Protestan.png',
      ]);
      

      \DB::table('forum_agamas')->insert([
        'slug' => 'FPMI',
        'nama' => 'FPMI (Forum Persatuan Mahasiswa Islam)',
        'keterangan' => 'Sesuai dengan namanya yakni forum persatuan mahasiswa islam universitas udayana FPMI mempunyai tugas sebagai organisasi tempat berkumpulnya mahasiswa muslim yang ada di Udayana untuk bersama-sama mempelajari dan menyebarkan nilai-nilai islam dan menjadi sebuah keluarga besar mahasiswa muslim di Udayana. FPMI bergerak dalam bidang dakwah islamiyah, lahir dan berkembang dari civitas akademik mahasiswa muslim Universitas Udayana secara lintas sektoral, suku dan ras. ',
        'contact' => 'CP : +62 821-4557-1094  (Dimas) <br>
        Instagram: @ukkifpmiunud',
        'logo' => 'FPMI.png',
      ]);

      \DB::table('forum_agamas')->insert([
        'slug' => 'KMK',
        'nama' => 'KMK (Keluarga Mahasiswa Katolik St.Albertus Agung Universitas Udayana)',
        'keterangan' => 'KMK atau Keluarga Mahasiswa Katolik St. Albertus Agung Universitas Udayana merupakan salah satu forum agama yang menanungi kelompok mahasiswa beragama Katolik di lingkungan Universitas Udayana. ',
        'contact' => 'CP : 081238123746  (Yoseph) <br>
        Instagram: @kmkst.albertusagung',
        'logo' => 'KMK.png',
      ]);

      \DB::table('forum_agamas')->insert([
        'slug' => 'FKMBU',
        'nama' => 'FKMBU (Forum Keluarga Mahasiswa Buddhis Universitas Udayana)',
        'keterangan' => 'Forum Keluarga Mahasiswa Buddhis Universitas Udayana atau FKMBU merupakan organisasi dibawah naungan Universitas Udayana yang mewadahi seluruh mahasiswa dan civitas akademika Buddhis di lingkungan Universitas Udayana. Dalam pelaksanaannya, FKMBU mengadakan berbagai program kerja dalam bidang dhamma dan pendidikan, bidang sosial kemasyarakatan, bidang minat dan bakat, dan bidang lainnya dengan tujuan untuk mempererat tali persaudaraan dan rasa kekeluargaan sebagai sesama mahasiswa Buddhis di lingkungan Universitas Udayana. ',
        'contact' => 'CP : 081246703520  (Dessy Ratna) <br>
        Instagram: @fkmbu_unud',
        'logo' => 'FKMBU.png',
      ]);
    }
}
