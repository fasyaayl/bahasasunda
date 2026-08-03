<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        $materials = [

            // =========================
            // PEMULA
            // =========================

            [
                'title' => 'Kosakata Dasar Bahasa Sunda',
                'category' => 'pemula',
                'description' => 'Mengenal kosakata Bahasa Sunda yang sering digunakan sehari-hari.',
                'content' => '
<h4>Kosakata Dasar</h4>

<p>Berikut beberapa kosakata Bahasa Sunda beserta artinya:</p>

<ul>
    <li><strong>Imah</strong> = Rumah</li>
    <li><strong>Cai</strong> = Air</li>
    <li><strong>Ucing</strong> = Kucing</li>
    <li><strong>Lauk</strong> = Ikan</li>
    <li><strong>Sakola</strong> = Sekolah</li>
    <li><strong>Isuk</strong> = Pagi</li>
    <li><strong>Peuting</strong> = Malam</li>
    <li><strong>Maca</strong> = Membaca</li>
    <li><strong>Nulis</strong> = Menulis</li>
    <li><strong>Sare</strong> = Tidur</li>
</ul>

<p>Contoh kalimat:</p>

<p><strong>Abdi angkat ka sakola.</strong><br>
Artinya: Saya pergi ke sekolah.</p>
',
                'order' => 1,
            ],

            [
                'title' => 'Salam dan Ungkapan Sehari-hari',
                'category' => 'pemula',
                'description' => 'Belajar salam dan ungkapan sederhana dalam Bahasa Sunda.',
                'content' => '
<h4>Salam dalam Bahasa Sunda</h4>

<ul>
    <li><strong>Wilujeng enjing</strong> = Selamat pagi</li>
    <li><strong>Wilujeng siang</strong> = Selamat siang</li>
    <li><strong>Wilujeng wengi</strong> = Selamat malam</li>
    <li><strong>Hatur nuhun</strong> = Terima kasih</li>
    <li><strong>Punten</strong> = Permisi / Maaf</li>
    <li><strong>Mangga</strong> = Silakan</li>
</ul>

<p>Contoh percakapan:</p>

<p>
<strong>A:</strong> Wilujeng enjing.<br>
<strong>B:</strong> Wilujeng enjing.<br>
<strong>A:</strong> Dupi anjeun damang?<br>
<strong>B:</strong> Alhamdulillah, damang.
</p>
',
                'order' => 2,
            ],

            [
                'title' => 'Anggota Keluarga',
                'category' => 'pemula',
                'description' => 'Mengenal sebutan anggota keluarga dalam Bahasa Sunda.',
                'content' => '
<h4>Anggota Keluarga</h4>

<ul>
    <li><strong>Bapa</strong> = Ayah</li>
    <li><strong>Indung</strong> = Ibu</li>
    <li><strong>Lanceuk</strong> = Kakak</li>
    <li><strong>Adi</strong> = Adik</li>
    <li><strong>Aki</strong> = Kakek</li>
    <li><strong>Nini</strong> = Nenek</li>
</ul>

<p>Contoh:</p>

<p><strong>Abdi gaduh hiji adi.</strong><br>
Artinya: Saya mempunyai satu adik.</p>
',
                'order' => 3,
            ],

            // =========================
            // MENENGAH
            // =========================

            [
                'title' => 'Kalimat Sehari-hari',
                'category' => 'menengah',
                'description' => 'Belajar memahami dan membuat kalimat Bahasa Sunda.',
                'content' => '
<h4>Contoh Kalimat</h4>

<p><strong>Abdi bade angkat ka sakola.</strong><br>
Saya akan pergi ke sekolah.</p>

<p><strong>Ibu nuju masak di dapur.</strong><br>
Ibu sedang memasak di dapur.</p>

<p><strong>Bapa nuju damel.</strong><br>
Ayah sedang bekerja.</p>

<p><strong>Abdi resep maca buku.</strong><br>
Saya suka membaca buku.</p>

<p><strong>Mangga calik heula.</strong><br>
Silakan duduk terlebih dahulu.</p>

<h4 class="mt-4">Kata Penting</h4>

<ul>
    <li><strong>Bade</strong> = Akan / mau</li>
    <li><strong>Nuju</strong> = Sedang</li>
    <li><strong>Angkat</strong> = Pergi</li>
    <li><strong>Calik</strong> = Duduk</li>
    <li><strong>Damel</strong> = Bekerja</li>
</ul>
',
                'order' => 4,
            ],

            [
                'title' => 'Keterangan Waktu',
                'category' => 'menengah',
                'description' => 'Mengenal kata-kata yang digunakan untuk menunjukkan waktu.',
                'content' => '
<h4>Keterangan Waktu</h4>

<ul>
    <li><strong>Kamari</strong> = Kemarin</li>
    <li><strong>Ayeuna</strong> = Sekarang</li>
    <li><strong>Isukan</strong> = Besok</li>
    <li><strong>Isuk</strong> = Pagi</li>
    <li><strong>Beurang</strong> = Siang</li>
    <li><strong>Sonten</strong> = Sore</li>
    <li><strong>Wengi</strong> = Malam</li>
</ul>

<p>Contoh:</p>

<p><strong>Kamari abdi angkat ka Bandung.</strong><br>
Kemarin saya pergi ke Bandung.</p>

<p><strong>Isukan abdi bade diajar.</strong><br>
Besok saya akan belajar.</p>
',
                'order' => 5,
            ],

            [
                'title' => 'Kecap Gaganti',
                'category' => 'menengah',
                'description' => 'Mengenal kata ganti orang dalam Bahasa Sunda.',
                'content' => '
<h4>Kecap Gaganti Jalma</h4>

<ul>
    <li><strong>Abdi</strong> = Saya</li>
    <li><strong>Anjeun</strong> = Anda / kamu</li>
    <li><strong>Anjeunna</strong> = Dia</li>
    <li><strong>Urang</strong> = Saya / kita, tergantung konteks</li>
</ul>

<p>Contoh:</p>

<p><strong>Abdi resep diajar Basa Sunda.</strong><br>
Saya suka belajar Bahasa Sunda.</p>

<p><strong>Anjeunna parantos sumping.</strong><br>
Dia sudah datang.</p>
',
                'order' => 6,
            ],

            // =========================
            // LANJUTAN
            // =========================

            [
                'title' => 'Undak-Usuk Basa Sunda',
                'category' => 'lanjutan',
                'description' => 'Memahami penggunaan ragam bahasa sesuai lawan bicara dan situasi.',
                'content' => '
<h4>Undak-Usuk Basa Sunda</h4>

<p>
Dalam Bahasa Sunda, pemilihan kata dapat disesuaikan dengan lawan bicara
dan situasi percakapan.
</p>

<p>Contoh beberapa kosakata:</p>

<ul>
    <li><strong>Dahar</strong> = Makan</li>
    <li><strong>Tuang</strong> = Makan dalam ragam yang lebih halus pada konteks tertentu</li>
    <li><strong>Indit</strong> = Pergi</li>
    <li><strong>Angkat</strong> = Pergi dalam ragam yang lebih halus</li>
    <li><strong>Diuk</strong> = Duduk</li>
    <li><strong>Calik</strong> = Duduk dalam ragam yang lebih halus</li>
</ul>

<p>Contoh:</p>

<p><strong>Mangga calik heula.</strong><br>
Silakan duduk terlebih dahulu.</p>
',
                'order' => 7,
            ],

            [
                'title' => 'Babasan Bahasa Sunda',
                'category' => 'lanjutan',
                'description' => 'Mengenal ungkapan tetap atau babasan dalam Bahasa Sunda.',
                'content' => '
<h4>Babasan</h4>

<p>
Babasan merupakan ungkapan yang memiliki makna tertentu
dan tidak selalu dapat dimaknai secara harfiah.
</p>

<ul>
    <li>
        <strong>Gedé hulu</strong><br>
        Hartina: sombong.
    </li>

    <li>
        <strong>Hampang leungeun</strong><br>
        Hartina: suka membantu.
    </li>

    <li>
        <strong>Panjang leungeun</strong><br>
        Hartina: suka mengambil barang milik orang lain.
    </li>
</ul>

<p>Contoh:</p>

<p>
<strong>Urang ulah jadi jalma gedé hulu.</strong><br>
Kita jangan menjadi orang yang sombong.
</p>
',
                'order' => 8,
            ],

            [
                'title' => 'Paribasa Bahasa Sunda',
                'category' => 'lanjutan',
                'description' => 'Belajar memahami beberapa peribahasa Bahasa Sunda.',
                'content' => '
<h4>Paribasa Sunda</h4>

<p>
<strong>Cikaracak ninggang batu, laun-laun jadi legok.</strong>
</p>

<p>
Hartina: pekerjaan atau usaha yang dilakukan terus-menerus
dapat memberikan hasil.
</p>

<hr>

<p>
<strong>Ka cai jadi saleuwi, ka darat jadi salebak.</strong>
</p>

<p>
Hartina: hidup rukun, kompak, dan bekerja bersama-sama.
</p>

<hr>

<p>
<strong>Ulah ngaliarkeun taleus ateul.</strong>
</p>

<p>
Hartina: jangan menyebarkan perkara yang dapat menimbulkan masalah.
</p>
',
                'order' => 9,
            ],
        ];

        foreach ($materials as $material) {
            Material::updateOrCreate(
                [
                    'title' => $material['title'],
                ],
                $material
            );
        }
    }
}