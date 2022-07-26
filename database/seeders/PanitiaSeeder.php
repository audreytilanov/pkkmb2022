<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Panitia;

class PanitiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('panitias')->delete();

      // Fakultas

      \DB::table('panitias')->insert([
        'slug' => 'sc-1',
        'nama' => 'Ni Kadek Mawar Ariestuti',
        'jabatan' => 'SC',
        'photo'=> 'sc/SC Mawar.png',
        'divisi'=> 'sc',
        'contact'=> 'https://instagram.com/mawararst_?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'sc-2',
        'nama' => 'Desak Putu Salshabila A.',
        'jabatan' => 'SC',
        'photo'=> 'sc/SC Salsha.png',
        'divisi'=> 'sc',
        'contact'=> 'https://instagram.com/salshabilaash?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'sc-3',
        'nama' => 'Nova Widya Ningsih',
        'jabatan' => 'SC',
        'photo'=> 'sc/SC Nova.png',
        'divisi'=> 'sc',
        'contact'=> 'https://instagram.com/novawidyan_15?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'ketua',
        'nama' => 'Krisna Yoga (Ketua)',
        'jabatan' => 'Ketua',
        'photo'=> 'inti/Ketua.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/krisnaysp?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'wakil-ketua-1',
        'nama' => 'Widia Septiani (Wakil Ketua I)',
        'jabatan' => 'Wakil Ketua',
        'photo'=> 'inti/Wakil Ketua 1.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/nyomanwidiii?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'wakil-ketua-2',
        'nama' => 'Doni Kurniawan (Wakil Ketua II)',
        'jabatan' => 'Wakil Ketua',
        'photo'=> 'inti/Wakil Ketua 2.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/donikurniaone?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'bendahara-1',
        'nama' => 'Larasati Dewi (Bendahara I)',
        'jabatan' => 'Bendahara',
        'photo'=> 'inti/Bendahara 1.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/larasat1?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'bendahara-2',
        'nama' => 'Nila Pricila (Bendahara II)',
        'jabatan' => 'Bendahara',
        'photo'=> 'inti/Bendahara 2.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/nilapricilaa?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'sekretaris-1',
        'nama' => 'Berlian Fatahillah (Sekretaris I)',
        'jabatan' => 'Sekretaris',
        'photo'=> 'inti/Sekre 1.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/berlianfath?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'sekretaris-1',
        'nama' => 'Ayu Pandin (Sekretaris II)',
        'jabatan' => 'Sekretaris',
        'photo'=> 'inti/Sekre 2.png',
        'divisi'=> 'inti',
        'contact'=> 'https://instagram.com/ayupandin?utm_medium=copy_link',
        'anggota'=> 'kosong',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-acara',
        'nama' => 'Hilal Rafi (Acara)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Acara.png',
        'divisi'=> 'Acara',
        'contact'=> 'https://instagram.com/hilal.rafi?utm_medium=copy_link',
        'anggota'=> 
        '<ol><li data-aos="fade-right" class="aos-init aos-animate">Kadek Sainanda Ananta Wijayanti (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ida Bagus Renal Dipa Isaka (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Debby Adiari Deviyani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Komang Suwastika Gentawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Muhamad Samsul</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Vera Leksonowati</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Carmelia May Shinta Thomas</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Dewi Anggreni</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Indah Cahya Pratiwi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Nyoman Dita Widi Adnyani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ida Ayu Tara Trijatha</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Auralia Intan Shalsagiani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ridho Askhalani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Sri Khrisnadani Wiranadhi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Dewi Kusuma Wardani</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-humas',
        'nama' => 'Adevia Candra (Humas)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Humas.png',
        'divisi'=> 'Humas',
        'contact'=> 'https://instagram.com/adevia_candra?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Kadek Rio Rendy Ramadan (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Astadwita (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Genta Taksu Wiraprana (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Erika Puspa Redyanti (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Agung Yudhiswara A.K</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Devina Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Arti Dewi Sri Maharani Adityari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dyah Ivania Atalia Pamungkas</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Tjokorda Istri Agung Dyah Astari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Audi Kirei Saraswati</li>
        <li data-aos="fade-right" class="aos-init aos-animate">A.A Ratih Maharani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Devina Gianina Siagian</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Alda Talita L.D</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Rheza Aryaputra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Komang Ayu Dirgantari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ravi Guvran</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-3d',
        'nama' => 'Iyan Rustanaya (3D)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor 3D.png',
        'divisi'=> '3D',
        'contact'=> '',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Putu Ramadhitya Ratryananda Sandhi (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Wisasmitha Manggala (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Audrey Tilanov Pramasa (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Kadek Anandia Uryandana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Wira Jaya</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Keumalahayati Nurul Imani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">G.B. Suryakusuma Ksatriadiningrat Gunananda</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Diah Wahyuning Pertiwi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dicky Umardhani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Galuh Puspa Gita</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Ngurah Bagus Ananda Maha Putra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Raphael Alvin</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kadek Ngurah Adi Wiranata</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Devi Anjani Virgunia</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Yason Tandi Palayukan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Hanna Aanisah Juliant Puteri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Damar Kencana</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-pangus',
        'nama' => 'Dewi Marella (Pangus)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Pangus.png',
        'divisi'=> 'Pangus',
        'contact'=> 'https://instagram.com/dewimarella?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">M. Nur Rizky Indrawan (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Luh Gede Ayu Indah Remdani (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Muhammad Yusransyah (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Wayan Helga Deswikasari (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Ayu Sintya Paramita Dewi (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gusti Ayu Made Denisa Ari Putri (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Roger Narendra Wardana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Faiqatun Nayyirah</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Saras Arya Pratami</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kompiang Gede Sukadharma</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Anggina Agistya Budiardianti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Yuni Puspita Sari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nyoman Raynaldi Rizky Margana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Ardelia Divayani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Putu Lanang Putra Darmana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Syifa Kurnia Febryanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nyoman Jenissa Dindaloka Wisnawa</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Made Cahyadewi Saka Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Githa Caesara Gautama</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Dwik Lisna Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Wahyu Wardana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Putu Wahyu Permana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Putu Hanggara Diatha Putra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Teng Chiau Yiin</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Allyssa Azahra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Vanny Clarita Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Juliana Dewi Mancika</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Risma Diana Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Debby Margareth Hutasoit</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Muhammad Vega Binawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Esti Utami Barsua</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Komang Mia Lestari Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Pachira Aprilia Aryantha</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Luh Made Yari Purwani Sasih</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Ayu Selena Brahmi Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Catur Ragil Putra Nanda</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Pande Komang Aubade Lenteraesai</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Alethea Prameswari Setia Wahyudy</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Alvian Marko</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Cantika Adisti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Reza Junedi Girsang</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Nyoman Eri Widiastuti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Ayu Nyoman Widyanti Arista Paramastri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Nengah Arika Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Anak Agung Diah Savitri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Trisnayanti Utami</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Agnes Simona Sengga</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Timothy Kristoforus</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Pajar Doli Soripada Marbun</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dandi Ramadhani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Erik Andri Setiawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Thalia Patricia Nugroho Setiawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Riska Wiyastini</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Hidayatul Rizka Devi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nadila Alhayrany Rambu Bangi Wongi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Novia Purnamayanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kadek Yunita Liyani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Luh Putu Winni Widyastari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Divananda Purwaningrum</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Dirga Adi Guna</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kadek Diah Pramesti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putri Dian Islami</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Galih Prayoga</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Dewa Ayu Oka Suwasthiari Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Luh Putu Riska Candra Maharani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Komang Yunikayanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Era wahyuni</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Egya Ridhona Tarigan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Komang Sri Yanisa Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Renata Sri Astika Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Cintyasih</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Candra Swasti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Gusti Putu Nicha Dhyatmika</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Pandhya Putra Kurniawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Ayu Intan Widya Permatasari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Matthew Gilbert Sinaga</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Andien Rachma Fadillah</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Anak Agung Ayu Cintya Krisna Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gede Krishna Wira Pradnyana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Agustina Setianing Budi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Wayan Evi Handayani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Eka Saputra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Bagustia Dev Natha</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nareswara Pawestri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Ketut Devi Damayanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Indah Nur Nabila</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kimi Obelix Castafiore</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Pande Putu Ayu Laksmi Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gede Made Indra Adi Kusuma</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nur Akmalina</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Candra Vali Devi Dasi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Sintya Anggreni</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Hermiasih</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Putri Prami Pratiwi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Theodorus Bielsya Chindana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Putu Dwi Adi Setyana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putri Febriyanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Soula Illiana Tera</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nico Dhemus Novanto</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Theresia Angelia Siregar</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Indah Galatia Chandra Simanjuntak</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Raisya adzraura</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Glen Kristian Tuerah</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Agnes Priscadevi Hariyanto</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Oktaviani Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">El Daffa Maxgarda Tragapantarra Hebby</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Paskalia Evans Carolina Pio</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Vinnie Deliya Shafira</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Caroline Taruliasih Manik</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gabriella savitri leandro</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Andi Muh. Farhan Alfiansah</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Samanthi Elani Valineli</li>
        <li data-aos="fade-right" class="aos-init aos-animate">steffanie amalia</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Tari Azzahra Eka Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Sharon Grace Tarigan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Piniel Siregar</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Veronica Celine Chandra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Anggia Pramaditha Zulkarnain</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Fransiska Rheynalda Hoya</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Angga Firmansyah</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Michael Koko Andrew</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dimas Yuda Prasetya</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Priskila Angeline</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Apphia Angel Stephanie Sembiring</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Alvin Lie</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Marcela Margareta Pinontoan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">David Firman Ferdinan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gilbert Alexander B Sihombing</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nayla Calista Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Helind Ursula</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Fidelia Maria Christina Lake</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Rayandri Eva Pauline Saragih</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Grisela Febiola Pinem</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Ayu Arini</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putri Lisnarsih Istifarila</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Komang Maheswari Puspita Dewi Narendra Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">ihsan alipasya pohan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Luh Tania Noviantini</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Farrel Auriel</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nathania Novenrodumetasa</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Muhammad aufa aghniya</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-mentor',
        'nama' => 'Wahyu Iqsal (Mentor)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Mentor.png',
        'divisi'=> 'Mentor',
        'contact'=> 'https://instagram.com/iiqsall?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">I Komang Adi Muliana (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Santi Puspita Dewi (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ivanna Susila (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gede Ananda Eka Diana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Firstly Erzsa Maharanny</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nadia Pranadewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nanda Kebayan Sari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Yangyang Hadi Khrisna</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ardus Watusugi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Karina Wirapradnyani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Beta Nuke Devine</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Wahyu Nadi Eka Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Amanda Gita</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gita Kusuma</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Adiva Buana</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-sekre',
        'nama' => 'Kintan Prabhasasi (Kesekretariatan)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Kesekre.png',
        'divisi'=> 'Kesekretariatan',
        'contact'=> 'https://instagram.com/iiqsall?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Putu Elsabella Putri Utami (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Neysa Arvia (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Lusca Aryanti Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Desak Putu Nicken Fatika Sari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Eiodya Andaria Barus</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Nyoman Ayu Sri Winadi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Krisna Wiranata</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nyoman Raharya Utami</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Divayani Darmika</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Wayan Riska Anggreni</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Komang Pistrikayani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Hridayani Karuna</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dinda Nur Malik Insani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Katharina Putri Manik</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Rezeky Naibaho</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Annisa Sonya Fikri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Erlita Supriyadi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dewi Wulandari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Bili Ananda Putri</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Ayu Michelle Audi Natasha Oka</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Sania Kristanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Komang Tria Wahyuni</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Ayu Sri Devi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ari Dwijayanti</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-perlengkapan',
        'nama' => 'Sakya Sanatana (Perlengkapan)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Perlengkapan.png',
        'divisi'=> 'Perlengkapan',
        'contact'=> 'https://instagram.com/sakya0?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Pande Nyoman Agus Adnyana (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ade pande apriana saputra (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Wayan Andrayuga (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Kadek Agus Juniarta</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Nyoman Cahyadi Umbu Saputra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Praditha Dwi Kristianto</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Martin Valentino Junior Sitinjank</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kevin Aldyan Farras</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Ketut Arya Aditya Nugraha</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Riski Ananta</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Anak Agung Gde Agung Krisnata Dwipayana</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Ketut Aris Dinata</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Ketut Gede Arya Pratama</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Nyoman Sadhu Waskita</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Mikael Alfredo Tarigan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gst Ngr Brahmanditha Nurartha</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Nanta Pasek Eka Putra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Bagus Santika Wijaya</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Suba Ratya Putra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Karuna Sindhu Krishna Prasad</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dewa Nyoman Tri Astawa</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gede Suarjaya</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Gibran Giantara</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Herlambang Rizky Kurnianto</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-ilmiah',
        'nama' => 'Ega Cahyani (Ilmiah)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Ilmiah.png',
        'divisi'=> 'Ilmiah',
        'contact'=> 'https://instagram.com/dwiegacahyani?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Tazkia Aulia Ramadhanti Firmansyah (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Bryan Steve Immanuel (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Luh Putu Cintya Pramesti (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Neysa Amelia Hutagalung</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dhi`fa Hafizha Pangestu</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Marcellino Adrian</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Vita Yuliawati</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Dewa Ayu Sri Sathyawati</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ilham Fauzi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Sri Kumala Dewi Oka</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ayu Pradnya Paramita</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kevin Salim Yudistira</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Josephira Anna Varestefanica</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kevin Daniel Markheshiwan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Eka Pebriyanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Imma Mutia Dewi Sindrawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Ayu Liana Waisnayanti</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Agnes Simbolon</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-rohani',
        'nama' => 'Wira Sentanu (Kerohanian)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Kerohania.png',
        'divisi'=> 'Kerohanian',
        'contact'=> 'https://instagram.com/wira.sentanu?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">I Gede Arsana Wijaya </li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ketut Arika Sugiati Dewi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Muchammad Rizqi Amirrulloh</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Diah Adnyasuari  </li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Made Oktariani Atmaja</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Putu Detha Merta Udayana </li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Rika Anindya Wahyuni</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-kesehatan',
        'nama' => 'Dandy Prema (Kesehatan)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Kesehatan.png',
        'divisi'=> 'Kesehatan',
        'contact'=> 'https://instagram.com/dandyprema?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">I Kadek Sadam Wibawa (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Ayu Dessita Maheswari (Subkoor) </li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gede Arsana Wijaya </li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Nyoman Bulan Maharani Wijaya</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kadek Ratna Amelia Sari</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Anggara Ahara Kartika</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Putu Kintan Wulandari </li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Kadek Ayuk Ari Wahyuni</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-konsumsi',
        'nama' => 'Indah Regina (Konsumsi)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Konsum.png',
        'divisi'=> 'Konsumsi',
        'contact'=> 'https://instagram.com/iindahregina?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Ni Putu Nanda Pramesti Nata Putri (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Krisna Maha Pramudya (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Manik Mustika Jayanthi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gusti Ayu Made Indah Sandyani Pramadanthi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ida Bagus Gede Eka Putra Prabawa</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Made Diva Widia Wiartha</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Imel Tarianda Putri Dakhi</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-transport',
        'nama' => 'Arisma Dinata (Transport)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Transport.png',
        'divisi'=> 'Transport',
        'contact'=> 'https://instagram.com/yihh_dde?utm_medium=copy_link',
        'anggota'=> '
        <ol><li data-aos="fade-right" class="aos-init aos-animate">Putu Hendri Yudarsana (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Johanes Nicolas Hutapea (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Gede Denny Mahendra Dwi Putra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Desak Nyoman Savita Mardani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Putu Predi Apriadi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Wayan Ryan Arta Wibawa</li></ol>',
      ]);

      \DB::table('panitias')->insert([
        'slug' => 'koor-keamanan',
        'nama' => 'Gus Tara (Keamanan)',
        'jabatan' => 'koor',
        'photo'=> 'koor/Koor Keamanan.png',
        'divisi'=> 'Keamanan',
        'contact'=> 'https://instagram.com/gustara?utm_medium=copy_link',
        'anggota'=> 
        '<ol><li data-aos="fade-right" class="aos-init aos-animate">Visto Richardo (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ida Bagus Ananta Sastrika  (Subkoor)</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kadek Verna Riana Ariwinata</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Kadek Aryawan</li>
        <li data-aos="fade-right" class="aos-init aos-animate">PUTU ERICK PERMADI</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I PUTU YUDA ANDIKA PRATAMA</li>
        <li data-aos="fade-right" class="aos-init aos-animate">KOMANG ARYA WIDURA</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I NYOMAN SWIKARA MENDA</li>
        <li data-aos="fade-right" class="aos-init aos-animate">DEWA GEDE CHANDRA TRIWIKRAMA</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I GUSTI NGURAH MARDIAWAN</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I GUSTI NGURAH DALEM SATRYA WIBAWA</li>
        <li data-aos="fade-right" class="aos-init aos-animate">IHZA RAMAHDHANI</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Moch Hadi Sutrisno</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ida Bagus Audra Nandipta Bagaskara</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gede Aryananda Pratama Yudistira</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Made Basudeva Ryadi</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I GUSTI NGURAH WAHYU TATA NUGRAHA</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I KADEK ADI DARMADI</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Hendy Clarence Soetanto</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gregorius Krisna Sandy</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ida Bagus Made Pandawa Putra</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Ni Komang Santi Cahyani</li>
        <li data-aos="fade-right" class="aos-init aos-animate">Gusti Ayu Agung Widya Paramita</li>
        <li data-aos="fade-right" class="aos-init aos-animate">I Gusti Ngurah Agung Ananta Maha Putra</li></ol>',
      ]);
    }
}
