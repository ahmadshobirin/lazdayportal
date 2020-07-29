<?php

use Illuminate\Database\Seeder;

class AllSeederDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name"     => "admin",
                "email"    => "admin@admin.com",
                "password" => app("hash")->make("admin123"),
                "created_at" => date('now'),
            ]
        ];

        $category = [
            [
                "name" => "Teknologi",
                "created_at" => date('now'),
            ],
            [
                "name" => "Olahraga",
                "created_at" => date('now'),
            ],
            [
                "name" => "Terbaru",
                "created_at" => date('now'),
            ],
            [
                "name" => "Bisnis",
                "created_at" => date('now'),
            ],
            [
                "name" => "Entertaiment",
                "created_at" => date('now'),
            ],
            [
                "name" => "Sports",
                "created_at" => date('now'),
            ],
        ];

        $news = [
            [
                "title" => "30 Tahun Menunggu, Liverpool Akhirnya Juara Liga Inggris Lagi",
                "content" =>
                    "Penantian itu berakhir bagi Liverpool. Setelah 30 tahun lamanya, klub Merseyside itu akhirnya bisa menjadi juara Liga Inggris lagi.

                    Liverpool memastikan menyegel gelar juara Liga Inggris 2019/2020. Keberhasian itu diraih usai Manchester City, selaku rival terdekat, kalah 1-2 dari Chelsea di pekan ke-31, Jumat (26/6/2020) dini hari WIB.

                    Kekalahan membuat City cuma mengoleksi 63 poin di peringkat kedua klasemen Liga Inggris hingga pekan ke-31. Raihan The Citizens takkan bisa mengejar Liverpool di 7 laga tersisa, sebab Mohamed Salah dkk sudah mengoleksi 86 poin.

                    Keberhasilan ini menjadi sejarah bagi Liverpool. Anak asuh Juergen Klopp akhirnya bisa mencicipi trofi juara Liga Inggris lagi, setelah menunggu selama 30 tahun.

                    Ya, terakhir kali Liverpool menjadi juara kasta tertinggi Inggris terjadi pada musim 1989/1990. Ketika itu, format turnamennya masih bernama Divisi Satu.

                    Sejak era Premier League dimulai pada musim 1992/1993, Liverpool selalu kesulitan menjadi juara. Hanya empat kali Si Merah mendekati trofi juara, ketika menjadi runner up di musim 2000/2001, 2008/2009, 2013/2014, dan terakhir 2018/2019.

                    Keberhasilan di musim 2019/2020 membuat Liverpool bisa melengkapi statusnya, dengan juga menjadi juara di era Premier League. Jika ditotal, Liverpool kini punya 19 gelar juara liga, yakni 18 dari Divisi Satu dan satu gelar Premier League.

                    Selamat Liverpool!",
                "image" => "https://akcdn.detik.net.id/community/media/visual/2020/05/01/bb87a84a-177e-4613-b388-d01d73b01b6a_169.jpeg?w=700&q=80",
                "creator" => "admin",
                "created_at" => date('now'),
                "news_tag" => ["Olahraga"]
            ],
            [
                "title" => "Matteo Guendouzi 'Diasingkan' Arsenal",
                "content" =>
                    "Matteo Guendouzi kabarnya diasingkan Arsenal. Gelandang Prancis itu berlatih sendiri, dan kabarnya bakal dilepas The Gunners.

                    Guendouzi sempat menjadi sorotan, saat Arsenal 1-2 dari Brighton & Hove Albion di Amex Stadium, 26 Juni 2020. Ketika itu, gelandang 21 tahun itu ribut dengan Neal Maupay.

                    Meski terhindar dari sanksi FA, Guendouzi kabarnya membuat manajer Mikel Arteta kesal. Mantan pemain Lorient itu tak dibawa dalam empat laga setelahnya.

                    Laporan terakhir menurut The Athletic, seperti dilansir Daily Star, Guendouzi sudah tak berlatih bersama rekan-rekannya. Ia berlatih sendiri, terpisah dari Pierre-Emerick Aubameyang dkk.

                    Ada kabar Arsenal akan mempertimbangkan melepasnya di bursa transfer musim panas ini. Guendouzi akan coba ditukar dengan pemain lain, dan akan berbicara dengannya dalam waktu dekat.

                    Guendouzi membuat ulah bukan cuma di Arsenal. Di Lorient, ia juga sempat bersitegang di ruang ganti, yang membuatnya ditepikan selama tiga bulan",
                "image" => "https://akcdn.detik.net.id/community/media/visual/2019/09/03/0db538d3-ee51-4036-a9dd-2ac413aefe40_169.jpeg?w=700&q=80",
                "creator" => "admin",
                "created_at" => date('now'),
                "news_tag" => ["Olahraga"]
            ],
            [
                "title" => "Pogba ke King: Tak Perlu Tarik-tarik Baju, Nanti Dikasih Kok",
                "content" =>
                    "Paul Pogba berkelakar ke Joshua King, mantan rekan setimnya yang kini berada di tim lawan, gara-gara insiden tarik baju di pertandingan.
                    Pada akhir pekan Manchester United yang dibela Paul Pogba meraih kemenangan 5-2 atas Bournemouth, timnya Joshua King saat ini. Sebagai bintang MU, Pogba pun dapat perhatian khusus dari lawan.

                    Kawalan dari lawan itu salah satunya didapatkan Pogba dari King. Yang menarik, Pogba dan King pernah main bareng di akademi Manchester United sebelum pisah jalan di 2012.

                    Nah, pada satu ketika dalam pertandingan, Paul Pogba terlihat sampai ditarik bajunya oleh King. Foto kejadian itu pun dijadikan materi kelakar oleh Pogba di Instagram Story.

                    'Bro, aku sudah bilang akan memberimu bajuku, tidak perlu menariknya seperti itu hahahah,' tulis Paul Pogba.'",
                "image" => "https://akcdn.detik.net.id/community/media/visual/2020/07/07/paul-pogba-joshua-king_169.jpeg?w=700&q=80",
                "creator" => "admin",
                "created_at" => date('now'),
                "news_tag" => ["Olahraga"]
            ],
            [
                "title" => "Deretan Negara yang Kembali Lockdown karena Lonjakan Corona",
                "content" =>"Pandemi virus corona masih menjadi ancaman dunia meski tren penularan virus serupa SARS itu beranjak menurun di beberapa negara dan kawasan.
                Banyak negara telah mulai melonggarkan kebijakan pembatasan pergerakan dan kembali membuka kegiatan perekonomian serta bisnis secara bertahap setelah tren penularan Covid-19 menurun.

                Namun, beberapa negara justru harus kembali \"menutup diri\" dan menerapkan penguncian wilayah atau lockdown setelah kembali menemukan lonjakan penularan baru corona.
                Berikut daftar negara yang kembali menerapkan lockdown dan serangkaian kebijakan pembatasan pergerakan akibat dihantui ancaman gelombang kedua corona.

                China

                Usai menerapkan lockdown nasional selama tiga bulan akibat Covid-19, pemerintah China kembali membuka kegiatan perekonomian dan bisnis, seperti sejumlah tempat wisata ikonik, hingga sekolah secara bertahap pada Mei lalu.

                China lantas memutuskan menerapkan lockdown di sebagian wilayah Beijing setelah ratusan virus corona baru terdeteksi kembali muncul di area pasar tradisional ibu kota.

                Lonjakan kasus baru itu berasal dari pasar grosir Xinfadi. Klaster di pasar itu terjadi setelah tiga pedagang dan dua pengunjung pasar dinyatakan positif corona.

                Awal pekan ini, pihak berwenang China juga kembali melaporkan lonjakan kasus virus corona baru yakni 61 infeksi. Komisi Kesehatan Nasional mencatat sebanyak 57 kasus penularan lokal dan 4 imported case.

                Ini merupakan penghitungan harian tertinggi kasus baru sejak 14 April, ketika negara itu mencatat 89 infeksi dalam sehari.

                sebagian besar kasus penularan lokal ditemukan di Xinjiang yang merupakan tempat tinggal etnis minoritas Muslim Uighur. Penyebaran terjadi di ibu kota Xianjiang, Urumqi dan telah meluas hingga ke kota tetangga.

                Selain di wilayah itu, sebanyak 14 kasus juga dicatat di Kota Dalian, Provinsi Liaoning. Kemudian dua kasus lokal ditemukan di Provinsi Jilin yang berada dekat perbatasan Korea Utara.

                Berdasarkan statistik Worldometer per Rabu (29/7), China tercatat memiliki 84.060 kasus Covid-19 dengan 4.634 kematian.

                Australia

                Serupa dengan China, Australia memutuskan mengisolasi negara bagian Victoria setelah menemukan lonjakan kasus corona baru hingga mencapai tiga digit infeksi per hari pada awal Juli lalu.

                Dalam dua pekan sejak diberlakukan lockdown, Victoria beberapa kali juga mencatat rekor kasus harian sebanyak 217, 363, dan 275.

                Australia juga menerapkan lockdown terhadap Ibu Kota Victoria, Melbourne, selama enam pekan demi mengendalikan virus corona yang melonjak lagi di wilayah tersebut.

                Pemerintahan Perdana Menteri Scott Morisson bahkan mengerahkan personel militer dan polisi untuk menjaga perbatasan negara bagian Victoria dan memastikan warga tetap tinggal di rumah selama masa isolasi.

                Australia bahkan melaporkan rekor infeksi corona baru sebanyak 502 kasus dalam sehari pada Rabu (22/7). Sebanyak 484 kasus dari total 502 infeksi corona baru itu terdapat di Victoria.

                Dengan begitu saat in ada lebih dari 3.408 kasus corona aktif dan 44 kematian di Victoria.

                Berdasarkan statistik Worldometer per hari ini, Australia tercatat memiliki 15.580 kasus corona dengan 176 kematian.

                Spanyol

                Spanyol kembali memberlakukan lockdown di wilayah Catalonia setelah kasus penularan corona baru kembali melonjak di daerah tersebut sejak pertengahan Juli lalu.

                Pemerintah wilayah Catalonia mengatakan kepada sekitar 140 ribu penduduknya terutama di dan sekitar kota Lerida di timur laut untuk kembali melakukan isolasi dan hanya boleh meninggalkan rumah untuk bekerja atau melakukan aktivitas penting saja. Seminggu sebelumnya, pemerintah Catalan telah membatasi warga untuk bepergian dari dan ke negara bagian El Segria. Sebab, wilayah dengan populasi 210 ribu itu telah mengalami penambahan penularan Covid-19.

                Otoritas kesehatan Catalan juga terus memantau wabah di Hospitalet, sebuah kota padat penduduk di wilayah metropolitan Barcelona yang lebih besar. Secara total, timur laut Catalonia melaporkan lebih dari 800 kasus baru pada Minggu.

                Spanyol baru membuka lockdown nasional pada pertengahan Juni lalu setelah tiga bulan berada dalam penguncian wilayah demi mengendalikan virus yang telah secara resmi merenggut lebih dari 28.300 jiwa.

                Per hari ini, berdasarkan statistik Worldometer, Spanyol tercatat memiliki 327.690 kasus dengan 28.436 kematian.

                Malaysia

                Pemerintah Malaysia berencana menerapkan kembali kebijakan penguncian wilayah jika kasus baru virus corona melonjak hingga 100 pasien per hari.

                Malaysia saat ini tengah berada dalam tahap pemulihan dan sudah tak menerapkan perintah pengawasan pergerakan (MCO) ketat. Hampir seluruh kegiatan bisnis dan ekonomi telah berjalan kembali dengan tetap menerapkan protokol kesehatan ketat.

                Namun, pihak berwenang Malaysia kembali mendeteksi lonjakan kasus corona baru dalam beberapa pekan terakhir.
                Pada Selasa (28/7), Malaysia mencatat 39 kasus corona baru, di mana 28 infeksi di antaranya merupakan penularan lokal. Puluhan kasus baru corona juga ditemukan setiap harinya dalam sepekan terakhir.

                Penemuan kasus baru ini muncul setelah Kementerian Kesehatan sempat mengumumkan nol kasus corona baru pada 1 Juli lalu untuk pertama kalinya sejak Maret.

                Vietnam

                Pemerintah Vietnam memutuskan menutup (lockdown) kota ketiga terbesar di negara itu, Da Nang, selama dua pekan setelah terjadi penularan virus corona (Covid-19) terhadap 15 orang.

                Seperti dilansir Associated Press, Selasa (28/7), kasus infeksi Covid-19 di Da Nang dilaporkan terjadi secara lokal. Penyebaran itu terdeteksi setelah selama tiga bulan tidak ada penambahan kasus di Vietnam.

                Menurut data, 15 orang yang positif Covid-19 adalah pasien dan petugas kesehatan di rumah sakit Da Nang.

                Pemerintah Vietnam menutup sementara seluruh tempat usaha di Da Nang dan menerapkan kebijakan jaga jarak.",
                "image" => "https://akcdn.detik.net.id/visual/2020/07/09/pemerintahan-india-tekan-penyebaran-corona-2_169.jpeg?w=650",
                "creator" => "admin",
                "created_at" => date('now'),
                "news_tag" => ["Terbaru"]
            ],
            [
                "title" => "Cara Mudah Cek Produk BPOM secara Online dan Manual",
                "content" =>
                    "Masyarakat harus menjadi konsumen cerdas dengan melakukan cek produk BPOM secara online mandiri. Badan Pengawas Obat dan Makanan atau Badan POM telah memfasilitasi sistem tersebut sebagai upaya untuk melindungi keselamatan konsumen dari bahan kimia berbahaya pada produk kecantikan dan pangan.
                    Hal itu tentu saja memudahkan konsumen untuk mengetahui aman tidaknya suatu produk yang akan dikonsumsi atau digunakan ke tubuh. Terlebih saat ini marak beredar kosmetik maupun makanan yang mengandung zat berbahaya di pasaran.

                    Syaratnya pun tergolong mudah, konsumen hanya perlu input nomor registrasi, nama produk, merek, hingga nama pendaftar. Berbekal itu, konsumen sudah dapat mengetahui apakah produk tersebut sudah terdaftar secara resmi atau belum di situs resmi BPOM.

                    Dengan mengecek produk BPOM secara online, masyarakat dapat mencocokkan nomor BPOM yang tertera di produk kemasan hanya melalui genggaman smartphone.

                    Selain itu, BPOM bertugas dan memiliki fungsi sesuai dengan Peraturan Presiden Nomor 80 Tahun 2017 tentang Badan Pengawas Obat dan Makanan. BPOM berhak memberikan label resmi pada segala jenis obat, obat tradisional, suplemen kesehatan, kosmetik, hingga produk pangan olahan.

                    Oleh sebab itu, ada baiknya konsumen perlu memahami dengan baik bagaimana prosedur atau cara cek produk BPOM secara online.
                    Pasalnya, jika sebuah produk tidak ada nomor registrasi dari BPOM, artinya produk tersebut wajib diwaspadai keamanannya karena dikhawatirkan berisiko berbahaya bagi keselamatan dan kesehatan orang yang mengkonsumsinya.",

                "image" => "https://akcdn.detik.net.id/visual/2018/12/12/2e35542b-6af3-4b8b-b37e-2511301bb51a_169.jpeg?w=650",
                "creator" => "admin",
                "created_at" => date('now'),
                "news_tag" => ["Teknologi"]
            ],
        ];

        DB::table('users')->insert($users);
        DB::table('category')->insert($category);

        foreach ($news as $key => $value) {
            $newsId = DB::table("news")->insertGetId([
                "title" => $value['title'],
                "content" => $value['content'],
                "image" => $value['image'],
                "creator" => $value['creator'],
                "created_at" => $value['created_at'],
            ]);

            foreach ($value['news_tag'] as $value) {
                $categoryId = DB::table("category")->where("name", $value)->first()->id;

                DB::table("tag_category_news")->insert([
                    "news_id" => $newsId,
                    "category_id" => $categoryId,
                    "category" => $value,
                ]);
            }
        }
    }
}
