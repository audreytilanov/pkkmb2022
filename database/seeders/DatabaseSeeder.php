<?php

namespace Database\Seeders;

use App\Models\Ukm;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\OrmawaSeeder;
use Database\Seeders\FakultasSeeder;
use Database\Seeders\PaguyubanSeeder;
use Database\Seeders\ForumAgamaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            FakultasSeeder::class,
            PaguyubanSeeder::class,
            ForumAgamaSeeder::class,
            OrmawaSeeder::class,
        ]);
        Ukm::create([
            'slug' => 'udayana-science-club',
            'nama' => 'Udayana Science Club',
            'foto' => 'usc.jpg',
            'deskripsi' =>'UKM USC adalah UKM bidang penalaran yang menjadi wadah diskusi, riset, dan pengembangan interdisipliner dalam merealisasikan lingkungan intelektual inklusif, kritis, proaktif, dan progresif di dalam Kehidupan universitas',
            'prestasi' => 'Finalis Esai MMC 2020',
            'kontak' => 'Ketua 		: Alrich Rovananda Brata<br>No telp 	: 087709157772<br>Id Line		: 15alrichie<br>E-mail		: alrichrichie15@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'udayana-debating-society',
            'nama' => 'Udayana Debating Society',
            'foto' => 'uds.jpg',
            'deskripsi' =>'UDS itu ukm yang berfokus di public speaking dalam Bahasa indonesia dan Bahasa Inggris. Kami melatih mahasiswa untuk berpikir kritis, menyuarakan opini dengan terstruktur dan menambah wawasan mengenai isu-isu dunia serta meningkatkan percaya diri terutama dalam public speaking dan debate. UDS sudah memberikan hasil dengan mengikuti lomba debat di tingkat regional dan nasional serta memenangkan perlombaan debat nasional seperti RASCIO dan NUDC serta regional seperti ArgUMentum, ALSA UNUD, KDMI tingkat regional, NUDC regional dan lain-lain.',
            'prestasi' => '1. Juara 1 RASCIO UNUD 2018<br>
            2. Juara 2 KDMI regional 2019<br>
            3. 2nd Runner-up NUDC Novice category 2019<br>
            4. 6th Best speaker NUDC Novice Category 2019 (Aldy Danupoyo)<br>
            5. 8th Best Speaker NUDC Novice Category 2019 (Dita Tilotami)<br>
            6. 1st place ArgUMentum debating Championship Universitas Mataram 2019<br>
            7. 2nd place NUDC Novice Category 2020<br>
            8. 15th Best Speaker NUDC Novice Category (Ayu Bintang Rena Sanjiwani Budhiarta)<br>
            9. 50 Breaking Adjudicator KDMI 2020 (Bagus Tryaji Pangestu)<br>
            ',
            'kontak' => 'Ketua		: Athalia Beshorah Aritorang<br>No telp		: 085591917827<br>Id Line		: Ldyarwen<br>E-mail		: aritorangthalia@gmail.com<br>
            '
        ]);

        Ukm::create([
            'slug' => 'psht',
            'nama' => 'Pencak Silat Persaudaraan Setia Hati Terate',
            'foto' => 'psht.png',
            'deskripsi' =>'Pencak Silat Persaudaraan Setia Hati Terate atau yang disingkat PSHT didirikan oleh Ki Hadjar Hardjo Oetomo pada tahun 1922 di Desa Pilangbango, Kecamatan Kartoharjo, Kabupaten Madiun Jawa Timur. Pencak Silat PSHT resmi menjadi UKM di Universitas Udayana pada tanggal 20 Januari 2020. Tujuan dari pencak silat PSHT adalah “Mendidik dan menjadikan manusia berbudi pekerti luhur, tahu benar dan salah serta bertakwa kepada Tuhan Yang Maha Esa.  Adapun prinsip yang diajarkan dalam UKM Pencak Silat PSHT yaitu meliputi : Persaudaraan, Olahraga, Pencak Silat, Seni Budaya, Ke Rohanian.',
            'prestasi' => 'Juara 2 Tanding Putra Kelas B di Kejuaraan Ganesha Open Tahun 2019 (UNDIKSHA)<br>
            Juara 3 Tanding Putra Kelas C di Kejuaraan Airlangga Cup VI Tahun 2019 (Universitas Airlangga Surabaya)<br>
            Juara 1 Tanding Purta Dewasa Kelas C di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            Juara 1 Tanding Putri Dewasa Kelas C di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            Juara 2 Tanding Putra Dewasa Kelas B di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            Juara 2 Tanding Putra Dewasa Kelas D di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            Juara 2 Tanding Putri Dewasa Kelas A di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            Juara 3 Tanding Putra Dewasa Kelas A di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            Juara 3 Tanding Putri Dewasa Kelas B di Kejuaraan Banyuwangi International Campionship Tahun 2020<br>
            ',
            'kontak' => 'Ketua	: Moch. Aji Ardiyansyah<br>No telp	:081232032388<br>Id Line	: cipu0419<br>	<br>E-mail	: ajiardiyansyah04@gmail.com
            
            '
        ]);

        Ukm::create([
            'slug' => 'jegeg-bagus',
            'nama' => 'Jegeg Bagus Udayana',
            'foto' => 'jegeg.jpg',
            'deskripsi' =>'UKM Jegeg Bagus Udayana disahkan pada tahun 2019, Jegeg Bagus merupakan sebuah ajang yang menjadi cerminan bagi masyarakat Bali khususnya di kalangan remaja. Ajang ini memiliki peran penting dalam mempersiapkan dan membina generasi muda untuk mampu melestarikan nilai – nilai luhur agama, adat istiadat, serta seni dan budaya bangsa. Universitas Udayana memiliki sebuah visi yaitu terwujudnya perguruan tinggi yang unggul, mandiri, dan berbudaya. Dalam mewujudkan visi tersebut Universitas Udayana menyediakan berbagai fasilitas untuk mengembangkan potensi yang di miliki oleh seluruh mahasiswa, salah satunya dalam ajang Jegeg Bagus. Pemilihan Jegeg Bagus Universitas Udayana merupakan langkah awal yang ditempuh dalam membina persatuan antara finalis Jegeg Bagus dari masing–masing fakultas yang ada di Universitas Udayana sehingga dapat menghasilkan Jegeg Bagus yang berkualitas yang nantinya mampu bersaing dan membawa nama baik Universitas Udayana di tingkat regional, nasional maupun internasional.',
            'prestasi' => 'Finalis Jegeg Bagus Udayana 2019<br>
            Jegeg Udayana 2019<br>
            Finalis Jegeg Bagus Udayana 2019<br>
            Finalis Jegeg Bagus Udayana 2018<br>
            Top 10 JBU 2019<br>
            Top 5 Bagus Udayana, Bagus Photogenic Udayana 2019<br> 
            Bagus Berbakat JBU 2018<br>
            Top 5 JBU 2018<br>
            Top 10 JBU 2019<br>
            Bagus Udayana 2019<br>
            RU I Jegeg Udayana 2019<br>
            Top 10 JBU 2019<br>
            Jegeg Berbakat 2019<br>
            Bagus Berbakat JBU 2018<br>
            RU I Bagus Udayana<br>
            Bagus Berbakat JBU 2018<br>
            Finalis Bagus Udayana 2018<br>
            Finalis Bagus Udayana 2018<br>
            Finalis Bagus Udayana 2018<br>
            Jegeg Udayana 2018<br>
            Finalis Jegeg Bagus Udayana 2018<br>
            RU I Jegeg Udayana 2018<br>
            Bagus FEB 2018<br>
            RU I Jegeg Udayana 2018<br>
            RU I Bagus Udayana 2018<br>
            RU II Bagus Udayana 2018<br>
            Bagus Berbakat JBU 2018<br>
            Top 5 Jegeg Bagus Udayana 2018<br>
            ',
            'kontak' => 'Ketua		: I Gede Arya Juniardana<br> 	
            No telp		:087850281689<br>
            Id Line		:aryaardanna_<br>	
            E-mail		:aryardanna010@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'robotec',
            'nama' => 'Robotec',
            'foto' => 'robotec.jpg',
            'deskripsi' =>'UKM Robotec adalah unit kegiatan mahasiswa di Universitas Udayana yang terfokus pada pengembangan dan riset di bidang robotika, elektronika, informatika dan mekatronika. UKM Robotec selalu berusaha mengikuti perkembangan teknologi robotika dengan mengikuti lomba – lomba di skala regional dan nasional. Mahasiswa yang bergabung dalam UKM Robotec akan diajarkan dari hal dasar sampai detail mengenai robot. Sistem pengajaran akan difokuskan pada minat mahasiswa, apakah itu hardware, design maupun program. UKM Robotec selalu melakukan riset rutin di bidang robot Line Follower, SumoBot, Robot Pemadam Api, Robot Abu, Robot Bioloid, dan robot lainnya yang sesuai dengan perkembangan jaman',
            'prestasi' => 'Lolos Nasional Kontes Robot ABU Indonesia<br>
            Juara 1 dan 3 Line Follower Technocorner<br>
            Juara 2 dan 3 Line Follower PNBRC<br>
            Juara 2 Lomba Inovasi PNBRC<br>
            ',
            'kontak' => 'Ketua	: Yohanes Andre Setiawan<br>	
            No telp:087761424265'
        ]);

        Ukm::create([
            'slug' => 'uyec',
            'nama' => 'Udayana Young Entrepreneur Community',
            'foto' => 'uyec.jpg',
            'deskripsi' =>'UKM Kewirausahaan atau Udayana Young Entrepreneur Community (UYEC) adalah Organisasi Kemahasiswaan Intra Universitas yang berstatus independen. UKM Kewirausahaan mewadahi minat dan bakat mahasiswa dalam bentuk kewirausahaan. Adapun kegiatan yang sering diadakan oleh UYEC adalah<br> 
            1. Mini talkshow Perekrutan anggota baru sekaligus memperkenalkan ukm uyec lebih dalam lagi 2. Uyec Link Webinar terkait Kewirausahaan yang bertujuan meningkatkan pengetahuan dan jiwa kewirausahaan. Uyec link diadakan <br>
            2 kali, yang pertama sudah dilaksanakan pada 30 Mei 2021 dan yang kedua direncanakan pada bulan November
            3. Festival Nasional Wirausaha Muda Udayana (FNWMU).merupakan lomba Proposal Bisnis tingkat nasional untuk berkompetisi dengan mahasiswa seluruh Indonesia. Kegiatan ini sedang berjalan dan puncak acara pada tanggal 21 Agustus 2021 <br>
            4. Unit Bisnis Usaha bersama yang dilakukan oleh fungsionaris dengan menjual produk sendiri maupun dari anggota dan alumni sekaligus menjaga hubungan antara fungsio, anggota, dan alumni. Kegiatan ini dilakukan untuk meningkatkan soft skill kewirausahaan dengan praktik langsung di lapangan.<br>
            5. Uyec CareUYEC Care adalah baksos yang diadakan sebagai kepedulian ukm uyec dengan masyarakat sekitar, uyec care pada tahun ini sudah dilaksanakan pada 30 Juni 2021 di Panti Asuhan Dharma Jati 1, kegiatan berupa belajar bersama menanam dan mewarnai pot dan pemberian sembako
            ',
            'prestasi' => 'National Business Plan Juara 1 Undiksha dan harapan 1 di Kopma UNUD tahun 2019<br>
            ',
            'kontak' => 'Ketua		: I Putu Arya Kusuma Wijaya<br>
            No telp		:085738867484	<br>
            Id Line		: aryakusuma_16	<br>
            E-mail		:aryakusumawijaya60@gmail.com<br>
            '
        ]);

        Ukm::create([
            'slug' => 'menwa',
            'nama' => 'Mahasiswa Akademika',
            'foto' => 'pers_akademika.jpg',
            'deskripsi' =>'Pers Mahasiswa Akademika merupakan bagian dari unit kegiatan mahasiswa yang bergerak khusus di bidang jurnalisme pada tingkat universitas di Universitas Udayana. Kelahiran Pers Mahasiswa Akademika diawali dengan kegelisahan mahasiswa Unud pada medio 1980-an akan kehadiran sebuah media yang bisa menyalurkan minat jurnalistik mahasiswa. Sebagai sebuah komunitas pers mahasiswa, kegiatan utama Akademika adalah penerbitan media. Terbitan yang diciptakan Akademika secara umum berupa tulisan online, majalah, buku, buletin dan tabloid. Karya jurnalistik yang diciptakan lainnya yaitu berupa audiovisual, karikatur, infografis, dan riset populer.<br>
            Utamanya terbitan Akademika adalah media untuk mengangkat isu-isu populer sekitar kehidupan mahasiswa. Isu-isu yang diangkat merupakan isu hangat dan disajikan dengan gaya khas idealis mahasiswa. Namun seiring dengan waktu, akademika turut berpatisipasi pada isu yang berkembang baik di regional maupun nasional. Ruang lingkup karya jurnalistik yang diciptakan pun beragam, mulai dari sosial, budaya, ekonomi, politik dan hukum, pendidikan, lingkungan dan lainnya. <br>
          Selain penerbitan, Pers Akademika kerap membuat program kerja untuk mewadahi dan menghimpun insan-insan jurnalis yang dikenal dengan nama Bali Journalist Week (BJW) dan Gejur (Gema Jurnalistik). Tidak hanya itu, pada perayaan hari ulang tahun (HUT) Pers Akademika juga turut hadir dengan beberapa kegiatan yang memfasilitasi kreativitas dari seluruh anggota. Pada tahun 2021 dirancang sebuah kegiatan bernama Jelajah Jurnalistik (Jejur), yang secara garis besar merupakan gerakan turun kelapangan untuk mengangkat isu yang terjadi di masyarakat secara langsung. Adapun menuju masa regenerasi anggota, Pers Akademika akan mengadakan PJTD (Pelatihan Jurnalistik Tingkat Dasar) bagi mahasiswa yang ingin belajar jurnalistik sekaligus bergabung sebagai keluarga besar kami.<br>
          ',
            'prestasi' => 'Lomba favorit dalam ajang lomba lintas medan tingkat nasional di Universitas Trunojoyo Madura (2017)<br>
            Kursus Dinas Staf KMXII (2017)<br>
            Juara Umum dalam ajang lomba ketangkasan Dasar Nasional di Universitas Muhammadiyah Yogyakarta (2018)<br>
            Siswa 2 terbaik dalam kegiatan kursus pelatih nasional angkatan XXXI Satmenwa 803 Universitas Brawijaya (2018)<br>
            Peserta terbaik dalan latihan kepemimpinan putri (LAPINTRI) (2018)<br>
            Kursus Kader Pelaksana Nasional (2019)<br>
            Peserta terbaik SUSKAPIN XXXVI<br>
            11k Solo Open UNS 2019<br>
            
            ',
            'kontak' =>'Ketua	: Muhammad Wahyu Maulana Fajri<br>	
            No telp	:0878519602875	<br>
            Id Line	: wahyu_maulana21	<br>
            E-mail	:Maulahlan01@gmail.com<br>
            '
        ]);

        Ukm::create([
            'slug' => 'basket',
            'nama' => 'Bola Basket',
            'foto' => 'basket.jpg',
            'deskripsi' =>'UKM Bola Basket merupakan suatu kegiatan forum komunikasi antar generasi muda khususnya lingkungan Universitas Udayana yang memiliki kesamaan minat dalam olahraga basket. Selain dari forum komunikasi, UKM Bola Basket Universitas Udayana juga menjadi wadah para pemuda-pemudi berbakat dalam lingkungan Universitas Udayana dalam mengembangkan skill teamwork dan individual masing-masing anggota maupun sebagai wadah untuk menyalurkan hobi berolahraga untuk tetap menjaga kesehatan dan kebugaran jasmani.<br>',
            'prestasi' => 'Juara 1 Campus League Putri 2011<br>
            Juara 2 Campus League Putra 2011<br>
            Juara 1 Campus League Putra 2012<br>
            Juara 2 Campus League Putri Regional Jember 2012<br>
            Juara 3 Nasional Campus League Putri 2013<br>
            Juara 1 Lima Regional Timur 2013<br>
            Juara 3 Equilibrum Basketball League Putri 2018<br>
            Juara 2 Liga Bali Putri 2019<br>',
            'kontak' => 'Ketua: Stanita Nataya<br>	
            No telp:087871365201<br>	
            Id Line:stnatayaa_<br>	
            E-mail:stnataya9@gmail.com
            '
        ]);

        Ukm::create([
            'slug' => 'badminton',
            'nama' => 'Badminton',
            'foto' => 'badminton.jpg',
            'deskripsi' =>'Kami adalah ukm olahraga yang menjadi wadah bagi mahasiswa yang memiliki minat/ketertarikan atau keterampilan bermain bulutangkis, untuk meningkatkan dan mengasah keterampilan dalam bermain bulutangkis.<br>',
            'prestasi' => 'Dalam waktu dekat belum ada dikarenakan tidak ada lomba saat pandemic<br>',
            'kontak' => 'Ketua	: William Halim Darmawan<br>	
            No telp	:081808932239	<br>
            Id Line	:desyfajarsri	<br>
            E-mai	l:whalim91@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'wushu',
            'nama' => 'Wushu',
            'foto' => 'wushu.jpg',
            'deskripsi' =>'Unit Kegiatan Mahasiswa Wushu Universitas Udayana lahir pada tanggal 22 Desember 1998, dan merupakan UKM ke-20 yang disahkan melalui Ketetapan Musyawarah Mahasiswa Universitas Udayana tahun 1998. UKM Wushu Universitas Udayana beralamat di Jl. Dr. Goris no. 10 Gedung Student Center - lantai dasar, Denpasar, Bali. UKM Wushu Universitas Udayana juga terdaftar sebagai Sasana di bawah naungan Pengurus Besar Wushu Indonesia.<br>',
            'prestasi' => '6 perak dan 5 perunggu di Bupati Tabanan cup<br>
            1 emas, 7 perak, 2 perunggu, dan 2 harapan I di Kejuaraan wushu Provinsi Bali, Buleleng<br>
            Harapan III Piala rektor UNNES cup 2019 kategori Nan Quan Senior Putra
            Peringkat 5 Kejuaraan Piala presiden pa pon 2019
            <br>',
            'kontak' => 'Ketua	: Anom Adhi Baskara	<br>
            No telp	:085858367085	<br>
            Id Line	: anomadhi76	<br>
            E-mail	:anomadhi37@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'pd',
            'nama' => 'Perisai Diri',
            'foto' => 'perisai.jpg',
            'deskripsi' =>'Unit Kegiatan Mahasiswa Perisai Diri Universitas Udayana dirintis pada tanggal 30 April 1974 atas petunjuk dari Bapak Made Suwetja dimana beliau adalah perintis dan pembina Perisai Diri Bali. Motto Perisai Diri adalah “Pandai Silat Tanpa Cidera”. Adapun program Kerja UKM Perisai Diri Universitas Udayana diantaranya, Latihan Rutin (setiap hari Kamis dan Minggu), Kemah Bhakti Pengembangan dan Latihan Mahasiswa (KBPLM), Ujian Kenaikan Tingkat, Latihan Penyegaran dan Pemusatan Latihan Persiapan Kejuaraan (TC), serta keikutsertaan UKM Perisai Diri dalam kejuaraan-kejuaraan di tingkat daerah, nasional maupun internasional.<br>',
            'prestasi' => '3 Perak Dan 1 Perunggu pada KEJURDA " Laga antar Bintang" Pada Tingkat Provinsi.<br>
            Kejuaraan Nangun Sat Kerthi Loka Open 2020 tingkat Provinsi meraih 1 emas, 2 perak, dan 3 Perunggu<br>
            Kejuaraan Kerapihan Teknik Perisai Diri 2020 tingkat Provinsi mewakili Universitas Udayana meraih 2 perunggu<br>
            Kejuaraan Kerapihan Teknik Berpasangan dan Tunggal IPSI Tahun 2021 tingkat Provinis mewakili Universitas Udayana meraih 1 perunggu<br>',
            'kontak' => 'Ketua	: I Wayan Gede Mariawan	<br>
            No telp	:082235366382	<br>
            Id Line	:gede_mariawan<br>
            E-mail	:gedemariawan56@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'gate-ball',
            'nama' => 'Gate Ball',
            'foto' => 'gateball.jpg',
            'deskripsi' =>'Organisasi olahraga ini bernama Unit Kegiatan Mahasiswa Gateball Universitas Udayana, untuk selanjutnya disingkat UKM Gateball Unud. UKM Gateball Unud didirikan di Denpasar pada tanggal 28 Juni 1995.UKM ini adalah organisasi yang bersifat terbuka untuk menampung aspirasi dari para anggota dan mahasiswa pecinta Gateball. Olahraga gatebal merupan olahraga yang santai dan menyenangkan.Tujuan UKM Gateball Unud untuk mensosialisasikan dan mengembangkan olahraga Gateball di Universitas Udayana dengan meningkatkan kualitas dan kuantitas pemain, wasit, serta pengurus, baik bertaraf nasional maupun internasional.<br>',
            'prestasi' => '-<br>',
            'kontak' => 'Ketua	: Moh. Rizky Ananda Putra	<br>
            No telp	: 085858605072	<br>
            Id Line	: rizky3100	<br>
            E-mail	:rizkiananda1300@gmail.com
            <br>'
        ]);

        Ukm::create([
            'slug' => 'sepakbola',
            'nama' => 'Sepak Bola',
            'foto' => 'sepakbola.jpg',
            'deskripsi' =>'UKM Futsal dan Sepak Bola Unud merupakan UKM yang menjadi wadah mahasiswa Unud dalam menyalurkan hobi nya dalam futsal dan sepak bola. Tak hanya mengembangkan potensi mahasiswa melalui berbagai latihan rutin, UKM futsal dan Sepak Bola Unud juga aktif berpartisipasi dalam berbagai kompetisi di tingkat provinsi ataupun nasional.<br>',
            'prestasi' => 'Tahun 2019 juara regional Bali<br> 
            Juara 3 dalam putaran nasional Liga Mahasiswa Piala Menpora U21 di Yogyakarta
            <br>',
            'kontak' => 'Ketua	: Arif Farisurrahman (FARIS)<br>	
            No telp	:085792852658	<br>
            Id Line	:arifarisurahman_	<br>
            E-mail	:ariffarisurrahman@gmail.com      
            <br>'
        ]);

        Ukm::create([
            'slug' => 'gbu',
            'nama' => 'Generasi Bidik Misi Udayana',
            'foto' => 'gbu.jpg',
            'deskripsi' =>'UKM GBU  adalah akronim dari Unit Kegiatan Mahasiswa Genenasi BidikMisi Udayana yang merupakan organisasi kemahasiswaan bagi penerima bidikmisi dan KIP-Kuliah yang dideklarasikan dan didirikan student centre Universitas Udayana pada hari Rabu, 12 Maret 2014. UKM GBU didirikan atas dasar kebutuhan mahasiswa dan alumni Bidikmisi untuk mempersatukan semangat serta cita-cita mahasiswa bidikmisi di lingkungan Universitas Udayana.
            Untuk menunjang sistem pendidikan nasional dan sebagai dasar pemberdayaan dan pengembangan Universitas Udayana Maka Mahasiswa Bidikmisi menghimpun diri dalam UKM GBU (Generasi Bidikmisi Udayana). Yang akan menjadi sebagai Wadah Komunikasi dalam lingkungan bidikmisi Universitas Udayana baik tingkat regional maupun Nasional.<br>',
            'prestasi' => '-<br>',
            'kontak' => 'Ketua	: Octorio Abel Tasman	<br>
            No telp	:089606052060	<br>
            Id Line	: abeltasman45/089606052060	<br>
            E-mail	:abeltasman45@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'kopma',
            'nama' => 'Koperasi Mahasiswa Udayana',
            'foto' => 'kopma.jpg',
            'deskripsi' =>'UKM Koperasi Mahasiswa Universitas Udayana sebagai salah satu organisasi kemahasiswaan yang ada di Universitas Udayana. Melalui UKM Koperasi Mahasiswa Universitas Udayana, mahasiswa dapat membentuk jiwa berorganisasi serta bersosialisasi, sebagai bekal dan pendukung dari ilmu-ilmu yang diterima di bangku perkuliahan sehingga menjadi generasi yang berkompetensi pada saat terjun ke masyarakat. UKM Koperasi Mahasiswa Universitas Udayana merupakan organisasi yang memiliki ciri khas dan kelebihan dibandingkan organisasi lain, yaitu selain bergerak dalam organisasi, UKM Koperasi Mahasiswa Universitas Udayana juga bergerak dalam bidang usaha.<br>',
            'prestasi' => 'Juara 1 dalam Lomba Karya Tulis tentang Perkoperasian di FE Universitas Indonesia pada bulan Januari 2015.<br>
            Menjadi tuan rumah dalam penyelenggaraan Internasional Cooperative Aliance yaitu perkumpulan Cooperative Campus se-Asia Pasifik di di Gedung Agrokompleks pada bulan September 2014. <br>
            Besar dalam Jambore Kopma Nasional 2016 yang diadakan Forum Komunikasi Koperasi Mahasiswa Indonesia dengan Kopma Universitas Sebelas Maret, Solo pada 6 - 9 Oktober 2016.<br>
            Juara 3 Business Plan dalam Jambore Kopma Nasional 2017 yang diadakan Forum Komunikasi Koperasi Mahasiswa Indonesia dengan Kopma BS UPI Bandung pada 6 - 9 September 2017. <br>
            Peserta Kopma Terkoperatif dalam Jambore Kopma Nasional 2017 Forum Komunikasi Koperasi Mahasiswa Indonesia dengan Kopma BS UPI Bandung<br>
            juara 1 Lomba Karya Tulis Ilmiah Koperasi Student Cooperative Fair 2017 yang diadakan Koperasi Kesejahteraan Mahasiswa Universitas Sultan Ageng Tirtayasa pada 16 Oktober 2017. <br>
            Juara 2 Lomba Debat Jambore Kopma Nasional 2019 Oleh  Forum Komunikasi Koperasi Mahasiswa Indonesia dengan Universitas Negeri Malang tanggal  16 – 19 September 2019 <br>
            Masuk dalam 10 besar Genta Visual Jambore Kopma Nasional 2020 yang diadakan Forum Komunikasi Koperasi Mahasiswa Indonesia dengan Kopma UIN Syarif Hidayatullah Jakarta pada 12-13 Desember 2020.<br>
            Juara Umum 3 dalam ajang Kopma Fair 2021 yang dilaksanakan oleh Kopma Padang Bulan UIN Malang pada 4 April 2021
            <br>',
            'kontak' => 'Ketua	: Dwi Laksono	<br>
            No telp	:085768098744	<br>
            Id Line	:duipeyok	<br>
            E-mail	:laksonolono@gmail.com
            <br>'
        ]);

        Ukm::create([
            'slug' => 'pramuka',
            'nama' => 'Pramuka',
            'foto' => 'racana.jpg',
            'deskripsi' =>'UKm Pramuka Racana Udayana-Mahendradatta merupakan salah satu organisasi kemahasiswaan yang berada di lingkungan Universitas Udayana. UKM Pramuka Racana Udayana - Mahendradatta Universitas Udayana didirikan di Denpasar tanggal 5 Mei 1985. UKM Pramuka Racana Udayana - Mahendradatta Universitas Udayana memiliki program 2 tahunan yang sekaligus menjadi big event dari UKM Pramuka itu sendiri. Program tersebut yakni Gempita Aksi Anak Pramuka atau lebih dikenal Taksaka dan Gelapata. Selain itu, masih banyak program-program dari UKM Pramuka yang menarik dan tentukan sesuai dengan Tri Satya dan Dasa Dharma Pramuka juga Tri Dharma Perguruan Tinggi.<br>',
            'prestasi' => 'Juara 2 Nasional Milennial Scout Competition <br>
            Juara 3 Nasional Scout Trainer Competition  <br>
            3.Juara 3 Regional Lomba Story Telling Kwarda Bali <br> 
            Finalis Regional Lomba Esai Kwarda Bali  <br>
            10 besar Finalis LKTI GALIPATRA 2020  <br>
            Juara 2 Nasional  Lomba Film Pendek Taksaka National Competition<br>',
            'kontak' => 'Ketua	: Amaylia Farah Firdhaus<br>	
            No telp	:085606196584	<br>
            Id Line	: amfafi01	<br>
            E-mail	:amayliafirdhaus@gmail.com            
            <br>'
        ]);

        Ukm::create([
            'slug' => 'pmi',
            'nama' => 'KSR-PMI',
            'foto' => 'pmi.jpg',
            'deskripsi' =>'“KSR” (Korps Sukarela), yaitu lembaga kemahasiswaan yang mengkoordinir para mahasiswa dari Universitas Udayana untuk mengamalkan Tri Dharma Perguruan Tinggi melalui aksinya membantu kegiatan-kegiatan Palang Merah Indonesia (PMI). UKM KSR-PMI Unit Unud merupakan Unit Kegiatan Mahasiswa yang bergerak di bidang kemanusiaan. UKM KSR-PMI Unit Unud menyediakan wadah untuk menyalurkan aspirasi teman-teman mahasiswa di bidang kemanusiaan. Lembaga kemahasiswaan ini berada dibawah dua bimbingan yaitu Universitas Udayana dan PMI Kabupaten Badung, sehingga dalam pelaksanaan kegiatannya terarah dan terkoordinir.<br>
            UKM KSR-PMI Universitas Udayana sejauh ini turut serta aktif dalam TDB Gunung Agung (2018), TDB Banjir Bandang NTT (2021), Aktif dalam partisipasi lomba yang diadakan KSR PT lainnya, dan masih banyak lagi kegiatan yang dilaksanakan dan diselenggarakan oleh KSR-PMI Universitas Udayana
            .<br>',
            'prestasi' => '-<br>',
            'kontak' => 'Ketua	: Ni Made Utami Maharani<br>	
            No telp	: 0895615238780	<br>
            Id Line	:nimd.utamimaharani	<br>
            E-mail	:utamimaharani45@gmail.com<br>'
        ]);

        Ukm::create([
            'slug' => 'betako',
            'nama' => 'Betako',
            'foto' => 'merpati.jpg',
            'deskripsi' =>'UKM PPS BETAKO Merpati Putih adalah Perguruan Pencak Silat Beladiri Tangan Kosong yang  ada di Universitas Udayana. UKM PS BETAKO Merpati Putih Universitas Udayana disahkan menjadi salah satu UKM di Universitas Udayana pada tanggal 8 Oktober 1988. UKM PPS BETAKO Merpati Putih  hadir untuk membina bakat Mahasiswa di Universitas Udayana dalam bidang olahraga Pencak Silat, sehingga mahasiswa yang memiliki bakat dalam bidang beladiri khususnya pencak silat dapat mengasa kemampuannya sehingga dapat mengikuti kejuaraan baik itu di tingkat regional, nasional maupun internasional. Selain melatih mahasiswa dalam olahraga beladiri, juga melatih bagaimana untuk mengambil suatu tindakan, sesuai dengan makna yang terkandung dalam kata “Merpati Putih” yaitu “Mersudi Patitising Tindak Pusakane Titising Hening”. Yang dalam bahasa Indonesia memiliki arti "Mencari sampai mendapat Kebenaran dengan Ketenangan".  Sehingga diharapkan seorang Anggota Merpati Putih akan menyelaraskan hati dan pikiran dalam segala tindakannya guna menjadi seorang yang memiliki harkat dan martabat yang baik sebagai warga negara Indonesia
            .<br>',
            'prestasi' => 'Juara 1 tanding kelas D tingkat mahasiswa kejuaraan nasional jogjakarta championship 6<br>
            Juara 2 seni tunggal tangan kosong tingkat mahasiswa kejuaraan nasional jogjakarta championship 4 <br>
            Juara 2 tanding kelas B kejuaraan internasional tingkat mahasiswa bali championship 1<br>
            Juara 2 tanding kelas D kejuaraan internasional tingkat mahasiswa bali championship<br>
            Juara 3 tanding kelas A kejuaraan nasional tingkat mahasiswa jogjakarta championship 4<br>
            Juara 3 tanding kelas A kejuaraan internasional tingkat mahasiswa bali championship 1<br>
            Juara 3 tanding (perempuan) kelas B kejuaraan internasional tingkat bali championship 1<br>
            Juara 3 tanding kelas D  tingkat mahasiswa kejuaraan nasional surabaya championship 1<br>
            <br>',
            'kontak' => 'Ketua	: Sergius Gon	<br>
            No telp	:01393749224	<br>
            Id Line	:shergius	<br>
            E-mail	:gonsergius46@gmail.com<br>
            <br>'
        ]);

        Ukm::create([
            'slug' => 'kesenian',
            'nama' => 'Kesenian',
            'foto' => 'kesenian.jpg',
            'deskripsi' =>'UKM Kesenian lahir pada tanggal 25 November 1989 yang memiliki 4 Divisi yaitu Divisi Musik, Divisi Paduan Suara, Divisi Tari Daerah dan Divisi Tari modern. UKM Kesenian memfasilitasi mahasiswa dalam beroraganisasi serta melatih kemampuan soft skill mahasiswa dalam bidang Kesenian.
            .<br>',
            'prestasi' => '1.	Divisi Musik <br>
            -	Juara 3 cover song virtual competition kharna fest Universitas Warmadewa<br>
            -	Mengisi acara ABG di TVRI <br>
            -	Mengisi acara di Hotel TS Suite<br>
            -	Mengisi acara di Food Frolic Festive <br>
            -	Mengisi acara di ECBC Teknik<br>
            2.	Divisi Paduan Suara <br>
            -	Peringkat ke-4 Lomba Paduan Suara The 15th National Folklore Festival (NFF) Fakultas Ekonomi dan Bisnis Universitas Indonesia 2021<br>
            -	Pengisi acara Bali Journalist Week 2021 di Gedung Dharma Negara Alaya<br>
            -	Pengisi Acara Rutin Wisuda Universitas Udayana<br>
            -	Pengisi Acara Dies Natalis Universitas Udayana<br>
            -	Pengisi Acara Langgam Nasional XXXIII/2021 Marching Band Udayana<br>
            3.	Divisi Tari Daerah <br>
            -	Mengisi acara pada setiap Wisuda (offline) dan Pengukuhan Guru Besar (offline) Universitas Udayana<br>
            -	Pengisi Acara Pembukaan dan Penutupan PIMNAS 2019<br>
            -	Pengisi acara pembukaan Student Day Universitas Udayana 2020<br>
            -	Pengisi acara garapan kontomporer pembukaan Dies Natalis Universitas Udayana ke-58 tahun 2020<br>
            -	Pengisi acara di Pengadilan Negeri Denpasar dalam rangka Audiensi dan Pelaksanaan Evaluasi Pelayanan Publik Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi tahun 2020<br>
            -	Juara 3 Lomba Tari Kontemporer Tingkat umum SE-BALI 2020<br>
            -	Juara 1 Lomba Tari Nelayan Tingkat Perguruan Tinggi SE-PROVINSI BALI tahun 2021<br>
            -	Juara harapan 3 Tari Nelayan Tingkat Perguruan Tinggi SE- PROVINSI BALI tahun 2021<br>
            -	Kolaborasi dalam pembuatan Tari Kontemporer bersama UKM PRAGINA ITB STIKOM BALI Tahun 2020<br>
            -	Kolaborasi penggarapan Tari bersama UKM STANA Universitas Mahasaraswati dalam acara MAKRAB UKM STANA Tahun 2021<br>
            -	Kolaborasi dengan yayasan We Love With Love dan Sanggar Tari Bali Warini tahun 2021<br>
            -	Diskusi dan Bedah Karya Tari "Lampah Nini" Bersama komunitas Manubadaart tahun 2021<br>
            -	Pelaksanaan Workshop Tari Cendrawasih bersama bapak Walikota Denpasar dan seniman legendaris Ibu Suasthi Widjaja Bandem tahun 2021<br>
            4.	Divisi Tari Modern<br>
            -	Juara 1 lomba dance group Fisiphoria Olympic 2021<br>
            -	Juara Harapan 1 Kpop Dance Cover Saraswati Production 2021<br>
            -	Juara favorit Kpop dance cover HI-FESTA 2021<br>
            -	Best Fav Dance cover competition K-Cover Movement 3 2020<br>
            -	Juara Fav Kpop Dance Cover sundaykpopdc 2021<br>
            -	Pelaksanaan Workshop Tari Modern Genre Kpop & Hiphop 2021<br>
            -	Pengisi di Acara ABG TVRI Bali 2021<br> 
            -	Pengisi di Acara Our Monthly Gigs Batch 2 BEM Universitas Udayana 2021<br>
            -	Pengisi di Acara ITversary 2021<br>
            -	Pengisi di Acara Jegeg Bagus FISIP 2021<br>
            -	Pengisi di Acara Grand Closing BEM Kabinet Reparasi Cita 2020<br>
            -	Pengisi di Acara MULAN UKM kesenian Udayana 2021<br>
            -	Pengisi di Acara Grand Closing Fosil Fakultas Kelautan Udayana 2021 <br>
            -	Pengisi di Acara Taksaka 2021<br>
            -	Pengisi di Acara Penutupan pesta olahraga seni sosial ilmiah FKP UNUD 2021<br>
            
            <br>',
            'kontak' => 'Ketua	: Sagung Thata 	<br>
            No telp	:082147477574	<br>
            Id Line	:Agungthata	<br>
            E-mail	:sagungthatap@gmail.com
            <br>'
        ]);

        Ukm::create([
            'slug' => 'teater-orok',
            'nama' => 'Teater Orok',
            'foto' => 'teater.jpg',
            'deskripsi' =>'Teater Orok Noceng merupakan salah satu Unit Kegiatan Mahasiswa (UKM) di lingkungan Universitas Udayana. UKM ini berfokus pada bidang seni khususnya seni teater/pertunjukan. Teater Orok meliputi berbagai kegiatan seperti drama, musikalisasi puisi, pantomime, operet, dan maaih banyak lagi. Teater Orok Berdiri sejak tahun 2000, Teater Orok selalu eksis dalam berkarya di sela-sela proses kemahasiswaan berlangsung. Memiliki nama Orok yang berfilosofiskan generasi yang akan selalu lahir kembali muda dan terus beregenerasi dalam menghasilkan karya karya yang senantiasa menghibur semua kalangan. Teater Orok aktif berkarya baik dalam lingkup kampus bahkan hingga nasional. Teater Orok menjadi wadah kreatif mahasiswa yang menunjukan bahwa mahasiswa tidak hanya terpaku pada hal akademik, tetapi juga masih bisa berkarya menyalurkan minat dan bakatnya. Segala penjuru fakultas tergabung di dalam Teater Orok yang mana pemikiran-pemikiran yang berbeda membuat suatu kesatuan yang tidak pernah mengecewakan dalam setiap karya-karya yang dihasilkan Teater Orok.<br>',
            'prestasi' => '-	Juara 2 Lomba Baca Puisi Tingkat Nasional Pekan Sastra 2021 <br>
            -	Juara 1 Lomba Drama Monolog Tingkat Provinsi Bali Day’s Of Laws 2021
            <br>',
            'kontak' => 'Ketua	: Kadek Ryo Aryawan	<br>
            No telp	:081353794200	<br>
            Id Line	:ryoarywn	<br>
            E-mail	:ryoarywn69@gmail.com                    
            <br>'
        ]);

        Ukm::create([
            'slug' => 'udayana-focus',
            'nama' => 'Udayana Focus',
            'foto' => 'fokus.jpg',
            'deskripsi' =>'Unit Kegiatan Mahasiswa, UKM ”Udayana Focus” Universitas Udayana hadir sebagai wadah bagi fotografer, videografer, animator, dan juga produser kampus yang ada di dalam lingkungan civitas akademika Universitas Udayana.<br>',
            'prestasi' => 'Juara 1 Lomba Video Kreatif Tingkat Nasional bertema "Cendikiawan Bermedia (Kritis di Era Krisis)" ANTARIKSA (Ajang Kreativitas Komunikasi UNISA), Juara 1 Vlog Competition ARTSPIRASI 6 STMIK STIKOM Indonesia 2021.
            <br>',
            'kontak' => 'Ketua	: I Nyoman Cahya Wibawa Suadi Putra	<br>
            No telp	:081338927905	<br>
            Id Line	:cahyawibawa	<br>
            E-mail	:udayanafocus@gmail.com                               
            <br>'
        ]);

        Ukm::create([
            'slug' => 'weimana',
            'nama' => 'Weimana',
            'foto' => 'weimana.png',
            'deskripsi' =>'UKM Weimana Universitas Udayana adalah salah satu penggiat perancangan otomotif khususnya kendaraan hemat energi yang akan selalu aktif dalam melakukan riset, perancangan serta pengembangan kendaraan berbasis energi listrik yang irit, aman, serta ramah lingkungan. Nama Weimana berasal dari berasal dari nama kendaraan pada kisah Mahabharata yang dapat digunakan di darat, air, maupun di udara yang bernama “WEIMANA.” Pada kisah Mahabharata, “WEIMANA” digambarkan sebagai kendaraan yang kuat, efisien dan canggih pada masanya. Oleh karena itu, pemilihan nama “WEIMANA” diharapkan dapat memberikan motivasi serta sejalan dengan semangat yang kami bawa sebagai UKM. UKM Otomotif WEIMANA Udayana dibagi menjadi 6 divisi yaitu desain kreatif, desain manufaktur, chassis, body elekrikal dan kesekretariatan dan humas. Divisi-divisi ini akan melakukan persiapan riset serta perancangan untuk mengikuti perlombaan di tingkat nasional dan internasional.<br>',
            'prestasi' => '-	Juara II Kategori Poster Urban KMHE 2020<br>
            -	Juara II Fun Race KMHE 2019<br>
            -	Juara I Kategori Video Kontes Mobil Hemat Energi Urban 2018<br>
            -	Juara Umum I Kompetisi Mobil Listrik Indonesia 2018 (PolBan, Bandung)<br>
            -	Juara I Kategori Slalom Kompetisi Mobil Listrik Indonesia 2018 (PolBan, Bandung)<br>
            -	Juara I Kategori Percepatan Kompetisi Mobil Listrik Indonesia 2018 (PolBan, Bandung)<br>
            -	Juara II Kategori Daya Tanjak Kompetisi Mobil Listrik Indonesia 2018 (PolBan, Bandung)<br>
            -	Juara II Kategori Kecepatan/waktu tempuh Kompetisi Mobil Listrik Indonesia 2018 (PolBan, Bandung)<br>
            -	Juara III Kategori Efisiensi Kompetisi Mobil Listrik Indonesia 2018 (PolBan, Bandung) <br>
            -	Juara I Kategori Slalom Kompetisi Mobil Listrik Indonesia 2017 (PolBan, Bandung)   <br>         
            <br>',
            'kontak' => 'Ketua	: I Nyoman Bima Permana	<br>
            No telp	:081805665500	<br>
            E-mail	:inyomanbimapermana@gmail.com      <br>                                   
            <br>'
        ]);

        Ukm::create([
            'slug' => 'marching-band',
            'nama' => 'Marching Band',
            'foto' => 'marching.jpg',
            'deskripsi' =>'Sejarah terbentuknya Unit Kegiatan Mahasiswa (UKM) Marching Band Universitas Udayana awal mulanya berdiri dengan nama lengkap Kesatuan Drum Band Universitas Udayana. Kesatuan Drum Band Universitas Udayana merupakan satu-satunya  komunitas marching band tertua di pulau Dewata, Bali yang didirikan sejak tahun 1978 oleh Rektor Universitas Udayana, Prof. Dr. Ida Bagus Oka (Rektor pada masa itu). Pada tanggal 30 November 1978 terbentuklah anggota angkatan pertama yang terdiri tidak kurang dari 110 orang mahasiswa-mahasiswi di lingkungan Universitas Udayana. Bapak Benjamin Mangkoedilaga, seorang dosen yang luar biasa dari Fakultas Hukum Universitas Udayana, juga banyak berperan pada saat itu sebagai salah seorang pemrakarsa berdirinya Marching Band Universitas Udayana. Beliau turut menjadi pengasuh atau Pembina karena pengalaman beliau di bidang tersebut dan kebetulan saat itu beliau juga mengasuh organisasi yang sama di Universitas Indonesia.<br>
            Rektor UNUD saat itu didampingi oleh Menteri Pemuda dan Olahraga (1978-1988) yaitu Bapak Abdul Gafur, menyaksikan penyerahan seperangkat alat Drum Band oleh Bapak Dr. Ir. Purnomo Sidhi Hajisarosa kepada pihak Universitas secara simbolis melalui penyerahan tunggul kehormatan dan Bapak Menteri PU berkenaan sebagai Gita Pati (Drum Mayor). Peristiwa tersebut dipakai sebagai tonggak sejarah berdirinya Kesatuan Drum Band Universitas Udayana (KDB UNUD). Masa-masa awal terbentuknya KDB UNUD, pelatihnya dibantu oleh Korp Musik Kodam IX/Udayana yaitu Serka Purwitha dan Serka Dewa Made Alit.<br>
            Setelah lebih dari dua dekade sudah berdiri, KDB UNUD yang akhirnya berubah nama menjadi Unit Kegiatan Mahasiswa (UKM) Marching Band Universitas Udayana, yang sering disebut dengan UKM Marching Band Universitas Udayana. UKM Marching Band Universitas Udayana kemudian mampu mensejajarkan posisinya dengan band-band top lainnya di Indonesia. Meskipun dengan tenaga pelatih lokal dan dana yang selalu terbatas, namun dengan semangat dan daya juang yang tinggi Marching Band Universitas Udayana tetap mampu menghasilkan prestasi yang luar bisa. UKM Marching Band Universitas Udayana Bali memiliki eksistensi yang mengesankan dengan segudang prestasi. Dari prestasi-prestasi yang diraih, UKM Marching Band Universitas Udayana selalu dipercaya sebagai ikon untuk menampilkan pagelaran musik dengan unsur seni dan budaya dalam berbagai momen yang diselenggarakan oleh berbagai kalangan baik dari perusahaan maupun instansi pemerintahan, dalam momen yang bersifat regional, nasional, maupun internasional.<br>
            Dengan tujuan memasyarakatkan Marching Band di Bali pada khususnya dan Indonesia pada umumnya, dengan membentuk generasi muda penerus bangsa yang sehat jasmani dan rohani serta menjunjung tinggi sportifitas, kejujuran, keberanian dan kesucian, dan selalu menjaga serta melestarikan kekayaan budaya Bangsa Indonesia berdasarkan Pancasila, UKM Marching Band Universitas Udayana tumbuh menjadi UKM yang selalu mampu mengukir prestasi dan mengharumkan nama Almamater, Pulau Bali dan Negara Kesatuan Republik Indonesia. Hingga saat ini Marching Band Universitas Udayana tetap eksis dan mampu membuktikan diri di kompetisi tingkat nasional dan internasional. Berbagai prestasi yang sangat membanggakan telah dipersembahkan baik kepada almamater maupun kepada provinsi Bali pada umumnya.<br>
        <br>',
            'prestasi' => 'Tahun 1981-1991	:<br>
            Intens mengikuti KTDJ hingga berganti nama menjadi GPMB<br>
           Tahun 1992		:<br>
            -Ranking 7 Mega Final GPMB X 1992<br>
             -Busana Team Terbaik<br>
             -Juara III Solo Horn<br>
           Tahun 1993		:<br>
            -Ranking 5 Mega Final GPMB XI 1993<br>
             -Juara III Duet Horn<br>
             -Juara III Solo Percussion<br>
             -Juara I Kostum drum Major<br>
             -Juara III Field Commander<br>
           Tahun 1994		:<br>
            -Ranking 11 Mega Final GPMB XII 1994<br>
             -Juara II Solo Horn<br>
             -Juara I Babak Penyisihan Divisi Sekolah GPMB XII 1994<br>
           Tahun 1997		:<br>
            -Juara II Babak perempat Final GPMB XV 97<br>
             -Juara III Babak Semi Final GPMB XV 97<br>
             -Ranking 8 Babak Mega Final GPMB XV 97<br>
             -Ranking 3 Divisi Sekolah GPMB XV 97<br>
           Tahun 2000		:<br>
            -Runner Up Duet Horn<br>
             -Ranking 11 Babak Mega Final GPMB XVI 2000<br>
             -Ranking 3 Divisi Sekolah GPMB XVI 2000<br>
           Tahun 2002		:<br>
            -Juara I Babak Penyisihan Divisi Sekolah GPMB XVIII 2002<br>
             -Juara II Babak Semi Final GPMB XVIII 2002<br>
             -Juara I Babak Final GPMB XVIII 2002<br>
             -Field Commander Terbaik<br>
             -Juara III Colour Guard Performance<br>
             -Juara I Music Analysis Horn Line<br>
             -Juara I Music Analysis Percussion Line <br>
              -Juara II Display and Showmanship<br>
             -Juara III Marching Manouvering<br>
             -Juara I General Effect<br>
           Tahun 2003		:<br>
            -Ranking III Divisi Sekolah GPMB 2003<br>
             -Juara II General Effect<br>
             -Terbaik II Kostum Team<br>
             -Juara III Marching Manouvering<br>
             -Juara III Music Analysis Horn Line<br>
             -Juara II Display and Showmanship<br>
           Tahun 2004		:<br>
            -Peringkat IV Babak Final Divisi sekolah GPMB 2004<br>
             -Terbaik II Display and Showmanship<br>
             -Terbaik II Kostum Team<br>
             -Terbaik II Field Commander<br>
             -Terbaik III Marching Manouvering<br>
           Tahun 2007		<br>
            -Field Commander Terbaik<br>
             -Juara II Display and Showmanship<br>
             -Juara II Marching Manouvering<br>
             -Juara II Music Analysis Percussion Line<br>
             -Juara Umum III Divisi Umum GPMB XXIII/2007<br>
             -Best University GPMB XXIII/2007<br>
           Tahun 2008		: <br>
           -Predikat “Band Of The Year 2008/2009”<br>
           Tahun 2009		: <br>
           -Juara II Color Guard<br>
            -Juara III Display & Showmanship<br>
            -Juara II General Efect<br>
            -Juara IIIBusana Unit<br>
            -Best University GPMB XXV/2009<br>
            -Juara Umum IV Divisi Umum GPMB XXV/2009<br>
           Tahun 2011		: <br>
           -Juara I Color Guard<br>
            -Juara II Field Commander<br>
           -The Best Creative Team<br>
            -Best University GPMB XXVII/2011<br>
             -Juara Umum III Divisi Umum GPMB XXVII/2011<br>
           Tahun 2013		: <br>
           -Juara I Street Parade World Class<br>
            -Juara I Marching Show Band Open Class<br>
            -“Thailand World Music Championships (TWMC) 2013”<br>
           Tahun 2014		:<br>
            -Juara II Organisasi Kepemudaan Berprestasi Tingkat<br> 
           Nasional Piala Kemenpora RI <br>
           Tahun 2015	:<br>
            -Juara 1 Perkusi GPMB XXXI / 2015<br>
            -Juara 1 Musik GPMB XXXI / 2015<br>
            -Juara 1 Visual Effect GPMB XXXI / 2015 <br>
            -Juara 1 Front Ensamble GPMB XXXI / 2015<br>
            -Juara 3 Field Comander GPMB XXXI / 2015<br>
            -Juara 3 Color Guard GPMB XXXI / 2015<br>
            -Juara 3 Field Music GPMB XXXI / 2015<br>
            -GPMB 2015 Team Spirit Award<br>
            -Juara Umum 2 Divisi Satu GPMB XXXI / 2015<br>
           Tahun 2016	: <br>
           -Juara 2 Drum Battle<br>
           -Juara 1 Percussion Street Parade “Jember Open Marching Competition (JOMC) V/2016”<br>
           Tahun 2017	:<br>
            -Juara 2 Marching Show Open Class IDCC<br>
           -Juara 4 Street Parade IDCC<br>
           -Juara 4 Drum Battle IDCC<br>
            -“Indonesia Drum Corps Championship (IDCC) 2017”   <br>               
            <br>',
            'kontak' => 'Ketua	: Made Dwi Amertani Cahyaningsih <br>	
            ‪No telp	:08873368902	‬‬<br>
            Id Line	:dwitaniac	<br>
            E-mai	:dwitania61999@gmail.com                                             
            <br>'
        ]);
    }
}

