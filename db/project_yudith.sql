-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2020 pada 11.54
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_yudith`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `keluhan_id` varchar(128) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `news_head` text DEFAULT NULL,
  `news_image` varchar(128) DEFAULT NULL,
  `messsage_content` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL,
  `date_approve` datetime DEFAULT NULL,
  `rejected_by` int(1) DEFAULT NULL,
  `is_deleted` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`keluhan_id`, `user_id`, `news_head`, `news_image`, `messsage_content`, `status`, `created`, `updated`, `approve_by`, `date_approve`, `rejected_by`, `is_deleted`) VALUES
('202010220347445f909e70be174-2', 2, 'Lorem Ipsum', '123', '<p>\r\n\r\n</p><div><h2>Apakah Lorem Ipsum itu?</h2><p><strong>Lorem Ipsum</strong> adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p></div><div><h2>Mengapa kita menggunakannya?</h2><p>Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti \"Bagian isi disini, bagian isi disini\", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat \"Lorem Ipsum\" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)</p></div><br><div><h2>Dari mana asalnya?</h2><p>Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah \"de Finibus Bonorum et Malorum\" (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", berasal dari sebuah baris di bagian 1.10.32.</p><p>Bagian standar dari teks Lorem Ipsum yang digunakan sejak tahun 1500an kini di reproduksi kembali di bawah ini untuk mereka yang tertarik. Bagian 1.10.32 dan 1.10.33 dari \"de Finibus Bonorum et Malorum\" karya Cicero juga di reproduksi persis seperti bentuk aslinya, diikuti oleh versi bahasa Inggris yang berasal dari terjemahan tahun 1914 oleh H. Rackham.</p></div><div><h2>Dari mana saya bisa mendapatkannya?</h2><p>Ada banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur humor atau kalimat yang diacak hingga nampak sangat tidak masuk akal. Jika anda ingin menggunakan tulisan Lorem Ipsum, anda harus yakin tidak ada bagian yang memalukan yang tersembunyi di tengah naskah tersebut. Semua generator Lorem Ipsum di internet cenderung untuk mengulang bagian-bagian tertentu. Karena itu inilah generator pertama yang sebenarnya di internet. Ia menggunakan kamus perbendaharaan yang terdiri dari 200 kata Latin, yang digabung dengan banyak contoh struktur kalimat untuk menghasilkan Lorem Ipsun yang nampak masuk akal. Karena itu Lorem Ipsun yang dihasilkan akan selalu bebas dari pengulangan, unsur humor yang sengaja dimasukkan, kata yang tidak sesuai dengan karakteristiknya dan lain sebagainya.</p></div>\r\n\r\n<p></p>', 1, '2020-10-22 03:47:44', '2020-10-22 03:48:07', 1, NULL, NULL, NULL),
('202010232216045f92f3b4da076-4', 4, '5 Rekor Terakhir Man United vs Chelsea di Liga Inggris Macan Dunia', '123', '<p>\r\n\r\n</p><p><strong>MANCHESTER </strong>– Manchester United akan menjamu raksasa London, Chelsea dalam pekan keenam Liga Inggris 2020-2021. Laga akan berlangsung di Stadion Old Trafford, markas <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.okezone.com/tag/manchester-united\">Man United </a>pada Sabtu (23/10/2020) pukul 23.30 WIB.</p><p>Man United kini berada di posisi ke-15 klasemen sementara Liga Inggris. Sedangkan Chelsea berada di urutan kedelapan. Namun, Man United baru memainkan empat laga, sementara The Blues sudah tiga pertandingan.</p>\r\n\r\n\r\n\r\n<p>Pasukan Ole Gunnar Solskjaer, dalam laga terkahir di Liga Inggris berhasil meraih kemenangan saat bertandang ke Stadion St James Park, kandang Newcastle United. Mereka menang dengan skor 4-1.</p><div></div><p>Baca juga: <a target=\"_blank\" rel=\"nofollow\" href=\"https://bola.okezone.com/read/2020/10/23/45/2298122/andy-cole-nilai-man-united-mulai-melangkah-menuju-kejayaan\">Andy Cole Nilai Man United Mulai Melangkah Menuju Kejayaan </a></p><p>Sementara Chelsea di laga terakhir mereka hanya berhasil meraih satu poin. Pasukan Frank Lampard ditahan imbang oleh tamunya, Southampton dengan skor 3-3, meski telah unggul lebihi dulu 2-0.</p><p>Kedua tim, Man United dan Chelsea terakhir bertemu saat semifinal Piala FA 2019-2020. The Blues saat itu unggul 2-0 atas Man United dengan sistem sekali laga di Wembley.</p><p>Namun, saat di Liga Inggris 2019-2020, Man United dua kali mempencundangi Chelsea. Man United menang dengan skor 4-0 pada pertemuan pertama dan menang 2-0 saat melawat ke markas Chelsea.</p>\r\n\r\n<br><p></p>', 1, '2020-10-23 22:16:04', '2020-10-24 02:28:21', 2, NULL, NULL, NULL),
('202010240213175f932b4d508a7-2', 2, 'Pique: Camp Nou Baru Wajib Dinamai Lionel Messi', '123', '<p>\r\n\r\n<strong>Barcelona</strong> - </p><p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/gerard-pique\">Gerard Pique</a> tak habis pikir dengan perlakukan <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/barcelona\">Barcelona</a> ke <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/lionel-messi\">Lionel Messi</a> sepanjang musim panas lalu. Pique menilai Messi pantas dihargai lebih dari yang didapatnya saat ini.</p><p>Masa depan messi jadi spekulasi sepanjang musim panas lalu seiring keinginannya untuk hengkang. Messi kabarnya sudah jengah dengan kinerja manajemen klub terutama presiden Josep Maria Bartomeu.</p><p>Kedua pihak sempat saling ngotot dengan pendapatnya masing-masing. Messi bersikeras bahwa klausul 700 juta euro dalam kontraknya tidak lagi berlaku dan dia bisa pergi cuma-cuma di tahun terakhir kontraknya, sementara Barcelona malah sebaliknya.</p>\r\n\r\n\r\n\r\n<p>Bahkan Messi sempat mengirim burofaks kepada petinggi klub yang menegaskan keseriusannya untuk hengkang. Tapi, pada prosesnya, Messi memang tidak bisa melawan Barcelona lebih keras karena merasa berutang budi banyak.</p><p>Messi akhirnya memutuskan bertahan setidaknya musim ini, seraya meninggalkan mister, apakah dia tetap lanjut di Barcelona tahun depan. Terkait drama masa depan Messi, <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/gerard-pique\">Pique</a> mengkritik keras cara klub memperlakukan pemain Argentina tersebut.</p>\r\n\r\n<br><p></p>', 1, '2020-10-24 02:13:17', NULL, 2, NULL, NULL, NULL),
('202010241232445f93bc7c6b245-4', 4, 'Mantap! Rashford Konsisten Bela Anak-anak Inggris dari Kelaparan', '123', '<p>\r\n\r\n<strong>Manchester</strong> - </p><p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/marcus-rashford\">Marcus Rashford</a> belum berhenti membantu anak-anak Inggris yang terancam kelaparan. Kini pemain <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/manchester-united\">Manchester United</a> itu menjadi sukarelawan di bank makanan.</p><p>Rashford aktif berkampanye memperjuangkan kupon makanan gratis buat anak-anak sekolah selama liburan musim panas lalu. Hal itu dilakukannya untuk membantu mereka yang kurang mampu di Inggris di tengah pandemi virus Corona.</p><p>Tidak hanya itu, Rashford juga membuat satuan tugas guna memastikan pasokan makanan ke anak-anak Inggris tetap tersalurkan. Aksi-aksi sosialnya tersebut membuat bintang 22 tahun itu diberi gelar kebangsawanan <em>Member of the British Empire</em> (MBE) dari Kerajaan Inggris.</p><div></div><div></div><div><strong>Baca juga: </strong><a target=\"_blank\" rel=\"nofollow\" href=\"https://sport.detik.com/sepakbola/liga-inggris/d-5208450/dapat-gelar-bangsawan-rashford-mau-ajak-ibunya-ketemu-sri-ratu\">Dapat Gelar Bangsawan, Rashford Mau Ajak Ibunya Ketemu Sri Ratu</a></div><p>Penghargaan MBE tak membuat <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/marcus-rashford\">Marcus Rashford</a> besar kepala dan menyudahi aktivitas sosialnya. Melansir <em>Daily Star,</em> striker Timnas Inggris itu baru-baru ini turun sebagai sukarelawan bersama ibunya, Melanie Rashford.</p><p>Rashford dan ibunya menjadi sukarelawan di lembaga penyalur makanan untuk orang-orang yang membutuhkan, FareShare. Dia juga membagikan aktivitas sosialnya itu di akun Instagram miliknya.</p><p></p>', 1, '2020-10-24 12:32:44', '2020-10-24 13:46:59', 2, NULL, NULL, NULL),
('202010241239385f93be1a594fc-4', 4, 'Solskjaer, Ada Masalah dengan Greenwood?', '123', '<p>\r\n\r\n<strong>Manchester</strong> - </p><p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/mason-greenwood\">Mason Greenwood</a> tak masuk skuad di dua laga terakhir <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/manchester-united\">Manchester United</a>. Ada apa masalah dengannya, <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/ole-gunnar-solskjaer\">Ole Gunnar Solskjaer</a>?</p><p>Greenwood mengawali musim ini dengan kurang mulus. Penyerang 19 tahun itu sempat tersandung masalah indispliner di <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/timnas-inggris\">Timnas Inggris</a>, yang membuatnya kemudian dicoret dari skuad.</p><p>Kini, Greenwood juga kesulitan di MU. Pemain yang membuat 19 gol musim lalu itu baru bermain 4 kali di semua kompetisi, dengan baru dua kali menjadi starter di <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/liga-inggris\">Liga Inggris</a>.</p><div></div><div><strong>Baca juga: </strong><a target=\"_blank\" rel=\"nofollow\" href=\"https://sport.detik.com/sepakbola/liga-inggris/d-5221478/apa-iya-mason-greenwood-lagi-kena-hukum-di-mu-ini-kata-solskjaer\">Apa Iya Mason Greenwood Lagi Kena Hukum di MU? Ini Kata Solskjaer</a></div><p>Terakhir, Greenwood tidak masuk skuad MU di dua pertandingan terakhir, yakni saat mengalahkan <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/newcastle-united\">Newcastle United</a> 2-1 di Liga Inggris, (17/10) dan menekuk <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/paris-saint_germain\">Paris Saint-Germain</a> 2-1 di Liga Champions, Rabu (21/10) dini hari WIB.</p><p>Beredar laporan bahwa Greenwood dicoret dari skuad MU karena dua kali telat datang latihan. Solskjaer, manajer tim, kemudian langsung meluruskannya.</p><p>\"Anda akan demikian (membuat target untuk diri sendiri) ketika bermain bagus, dan saya sama sekali tidak peduli dengan apa yang Mason targetkan,\" kata Solskjaer dalam konferensi pers jelang melawan Chelsea, seperti dilansir situs resmi klub.</p><p>\"Dia datang, dia bermain fantastis, dia memainkan pertandingan liga pertamanya melawan Tottenham musim lalu. Itu brilian dan dia baru saja memulainya.\"</p><p>\"Ya, dia membuat kesalahan musim panas ini dengan Timnas Inggris, dan tiba-tiba seluruh pers Inggris mengejarnya dan itu adalah sesuatu yang harus kami jaga. Dia anak yang luar biasa untuk diajak bekerja sama. Saya sudah mengecewakan Anda, tapi dia tidak pernah, bahkan tidak untuk sekadar terlambat latihan. Dia tidak pernah bermasalah di tempat latihan. Dia selalu tepat waktu,\" katanya.</p><p>Solskjaer mengaku sudah mendengar laporan soal Greenwood. Manajer asal Norwegia itu sekali lagi membela pemainnya.</p><div><strong>Baca juga: </strong><a target=\"_blank\" rel=\"nofollow\" href=\"https://sport.detik.com/sepakbola/bola-dunia/d-5206616/sudahlah-southgate-depak-saja-pemain-pemain-inggris-yang-berulah\">Sudahlah Southgate, Depak Saja Pemain-pemain Inggris yang Berulah</a></div><p>\"Saya sudah mendengar ceritanya. Sebenarnya beberapa mantan pemain United membicarakannya, tapi mereka tidak tahu betul apa yang mereka bicarakan. Kami punya fotografer di luar tempat latihan setiap hari, sehingga mereka bisa mengeceknya,\" kata Solskjaer.</p><p>\"Saya tidak tahu dari mana asal cerita ini. Saya baru saja mengatakan, dia memiliki keluarga yang baik, dia memiliki latar belakang yang baik di akademi. Dia berlatih dengan baik, dan saya tidak percaya semua cerita tentang dia yang tidak profesional.</p><p>\"Jadi itu adalah sesuatu yang harus kami tangani pada pemain lain juga. Banyak pemain lain di United yang memilikinya,\" jelas Solskjaer.</p>\r\n\r\n<br><p></p>', 1, '2020-10-24 12:39:38', '2020-10-24 13:47:08', 2, NULL, NULL, NULL),
('202010241240285f93be4c9e2bc-4', 4, 'Jadwal Liga Inggris Malam Ini: MU Vs Chelsea, Liverpool Vs Sheffield', '123', '<p>\r\n\r\n<strong>Jakarta</strong> - </p><p>Pekan keenam <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/liga-inggris\">Liga Inggris</a> bakal menghadirkan laga seru antara <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/manchester-united-vs-chelsea\">Manchester United vs Chelsea</a>. Berikut jadwal pertandingannya.</p><p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/manchester-united\">Man United</a> vs <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/chelsea\">Chelsea</a> berlangsung di Old Trafford, Sabtu (24/10/2020) malam WIB. Duel ini akan disiarkan langsung Mola TV mulai pukul 23.30 WIB lewat link ini. Jangan lupa langganan dulu paket Sports & Entertainment.</p><p>The Red Devils punya catatan oke melawan Chelsea di Liga Inggris pada musim lalu. Tim besutan Ole Gunnar Solskjaer menuntaskannya dengan kemenangan 4-0 dan 2-0.</p><div></div><div></div><p>Namun, kekalahan pada dua pertandingan tersebut berhasil dibalas oleh Chelsea pada ajang semifinal Piala FA. The Blues sukses menumpas Man United dengan kemenangan 3-1.</p><div><strong>Baca juga: </strong><a target=\"_blank\" rel=\"nofollow\" href=\"https://sport.detik.com/sepakbola/liga-inggris/d-5226486/11-fakta-jelang-mu-vs-chelsea-di-old-trafford\">11 Fakta Jelang MU Vs Chelsea di Old Trafford</a></div><p>Ada pula pertandingan antara West Ham United vs <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/manchester-city\">Manchester City</a>. Laga ini berlangsung di London Stadium, Sabtu (24/10/2020) malam WIB. Mola TV menyiarkan tayangan ini pada pukul 18.30 WIB.</p><p>Kemudian ada <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/liverpool\">Liverpool</a> menjamu Sheffield United di Anfield, Minggu (25/10) pukul 2.00 WIB. Pada musim lalu The Reds berhasil meraih dua kemenangan dari Sheffield dengan skor 1-0 dan 2-0.</p><p>Liverpool dalam kondisi yang tidak stabil belakangan ini. Dia gagal menang di dua pertandingan terakhir Liga Inggris, yakni kalah dari Aston Villa 2-7 dan imbang 2-2 melawan Everton. Di sisi lain, Sheffield baru memetik satu poin dari lima laga.</p>\r\n\r\n<br><p></p>', 0, '2020-10-24 12:40:28', NULL, NULL, NULL, 2, 1),
('202010241256005f93c1f0a9522-4', 4, 'Kevin Diks Masih Berharap Bisa Memperkuat Timnas Indonesia', '123', '<p>\r\n\r\n<strong>Jakarta</strong> - </p><p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/kevin-diks\">Kevin Diks</a> menantikan <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/pssi\">PSSI</a> untuk berdiskusi tentang wacana naturalisasi. Ia sangat berharap bisa menjadi WNI dan membela <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/timnas-indonesia\">Timnas Indonesia</a> di masa depan.</p><p>PSSI sebelumnya pernah memberi pernyataan resmi bahwa mereka sudah tak mungkin menaturalisasi Kevin Diks. Alasannya, ia sudah berusia lebih dari 20 tahun dan tak bisa diturunkan di Piala Dunia U-20 2021.</p><p>PSSI diketahui sedang fokus untuk mencari pemain keturunan berusia muda, sedangkan Kevin Diks yang sudah 24 tahun tak masuk daftar prioritas PSSI.</p><div></div><div></div><p>Selain itu, PSSI juga menyatakan bahwa Kevin Diks sudah tak mungkin dinaturalisasi karena pernah 7 kali bermain untuk <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.detik.com/tag/timnas-belanda\">Timnas Belanda U-21</a>, termasuk di kualifikasi Piala Eropa U-21 2019. Mereka meyakini, Kevin Diks sudah tak bisa memperkuat Timnas Indonesia, mengacu ke Statuta FIFA.</p><div><strong>Baca juga: </strong><a target=\"_blank\" rel=\"nofollow\" href=\"https://sport.detik.com/sepakbola/liga-indonesia/d-5221323/timnas-u-19-panggil-dua-pemain-baru-berdarah-jerman-indonesia\">Timnas U-19 Panggil Dua Pemain Baru Berdarah Jerman-Indonesia</a></div><p>\"Pasal 5 Ayat 2 Statuta FIFA menyebutkan, seorang pemain yang pernah membela sebuah negara pada kompetisi resmi FIFA tidak berhak untuk membela asosiasi lain pada pertandingan internasional,\" tulis pernyataan resmi PSSI pada Selasa (22/9) lalu.</p><p>Hasil penelusuran <strong>detikSport</strong> menemukan bahwa pernyataan PSSI di atas ternyata mengacu ke Statuta FIFA tahun 2019. Padahal, sudah ada Statuta FIFA 2020 yang isinya berbeda dengan Statuta FIFA 2019.</p><p>Pada kongres virtual yang digelar Jumat (18/9) lalu, FIFA melakukan amandemen statuta yang salah satunya merevisi syarat-syarat perpindahan seorang pemain dari satu negara ke negara lain. PSSI pun turut hadir.</p><p>Pasal 5 Ayat 2 dalam Statuta FIFA 2020 mengatur tentang syarat seorang pemain untuk membela suatu negara (Tim Nasional), bukan membatasi perpindahan pemain sebagaimana diatur di Pasal 5 ayat 2 dalam Statuta FIFA 2019. Berarti, PSSI tak merujuk ke statuta terbaru FIFA.</p>\r\n\r\n<br><p></p>', 0, '2020-10-24 12:56:00', NULL, NULL, NULL, 2, 1),
('202010241540295f93e87d9bc50-4', 4, '900 Hari Belum Jebol Gawang Real Madrid, Awas Lionel Messi Sedang Lapar!', '123', '<p>\r\n\r\n</p><h2>Balas dendam Messi</h2><div></div><p>900 hari tanpa menjebol gawang rival abadi tentu jadi catatan minor untuk pemain sekelas Messi. Biar begitu, dialah jagonya mematahkan catatan buruk seperti ini.</p><p>Messi diyakini akan memasuki laga malam nanti dengan hasrat tinggi untuk menghentikan catatan buruk dengan mencetak gol. Dia ingin balas dendam, El Clasico kali ini paling pas.</p><p>Performa Messi pun perlahan-lahan berkembang musim ini dan dia menyuguhkan permainan terbaiknya kala Barca menundukkan Ferencvaros di Liga Champions kemarin (5-1).</p>\r\n\r\n<br><p></p>', 0, '2020-10-24 15:40:29', '2020-10-24 15:40:35', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(13) DEFAULT NULL,
  `jk` int(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_provinsi` int(2) DEFAULT NULL,
  `foto_ktp` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `approve_by` int(1) DEFAULT NULL,
  `rejected_by` int(1) DEFAULT NULL,
  `is_deleted` int(1) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `no_tlp`, `jk`, `alamat`, `id_provinsi`, `foto_ktp`, `password`, `is_active`, `level`, `approve_by`, `rejected_by`, `is_deleted`, `updated`, `created`) VALUES
(2, 'Niki Dwijananto', '081214000096', 1, 'Jakarta Selatan', 31, 'user.png', '$2y$10$/4ZdG5V9h7aIiNPW0P3nFOkTVVcWV.UwAuc17AP.9ladlvtuGrebe', 1, 1, NULL, NULL, NULL, NULL, '2020-10-21 23:44:16'),
(3, 'Sutirnah', '081214000095', 2, 'Jakarta Barat', 16, 'user.png', '$2y$10$LXEwNt0JQna5EjdJqx.uqOGVSTkOcK5zO0ykOO09AUljeRH38woba', 1, 2, NULL, NULL, NULL, NULL, '2020-10-22 14:44:34'),
(4, 'Dayat', '081214000094', 1, 'Jakarta Timur', 31, 'user.png', '$2y$10$rda.yRYo7hy7Yp4chZfkuup9Dk1ghPOa9iuzM6oRAd31Ph.YnEeau', 1, 2, NULL, NULL, NULL, NULL, '2020-10-22 23:19:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah_provinsi`
--

CREATE TABLE `wilayah_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wilayah_provinsi`
--

INSERT INTO `wilayah_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(11, 'Aceh'),
(12, 'Sumatera Utara'),
(13, 'Sumatera Barat'),
(14, 'Riau'),
(15, 'Jambi'),
(16, 'Sumatera Selatan'),
(17, 'Bengkulu'),
(18, 'Lampung'),
(19, 'Kepulauan Bangka Belitung'),
(21, 'Kepulauan Riau'),
(31, 'Dki Jakarta'),
(32, 'Jawa Barat'),
(33, 'Jawa Tengah'),
(34, 'Di Yogyakarta'),
(35, 'Jawa Timur'),
(36, 'Banten'),
(51, 'Bali'),
(52, 'Nusa Tenggara Barat'),
(53, 'Nusa Tenggara Timur'),
(61, 'Kalimantan Barat'),
(62, 'Kalimantan Tengah'),
(63, 'Kalimantan Selatan'),
(64, 'Kalimantan Timur'),
(65, 'Kalimantan Utara'),
(71, 'Sulawesi Utara'),
(72, 'Sulawesi Tengah'),
(73, 'Sulawesi Selatan'),
(74, 'Sulawesi Tenggara'),
(75, 'Gorontalo'),
(76, 'Sulawesi Barat'),
(81, 'Maluku'),
(82, 'Maluku Utara'),
(91, 'Papua Barat'),
(94, 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `wilayah_provinsi`
--
ALTER TABLE `wilayah_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `wilayah_provinsi`
--
ALTER TABLE `wilayah_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
