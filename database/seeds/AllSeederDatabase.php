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
                "password" => "admin123",
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
