<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::createMany([
            [
               "name" => "SMA Negeri 1",
               "latitude" => "-6.9387784",
               "longitude" => "106.928701",
               "npsn" => "20221559",
               "alamat" => "Jl. Rh. Didi Sukardi No.124, Citamiang, Kec. Citamiang, Kota Sukabumi, Jawa Barat 43143",
               "foto" => "images/myJsO73RdJA06A3WTsJIlDTMumUYTmfxdCoDtKS6.jpg",
               "description" => "SMA Negeri 1",
           ],
           [
               "name" => "SMA Negeri 2",
               "latitude" => "-6.9056852",
               "longitude" => "106.9147573",
               "npsn" => "20221560",
               "alamat" => "Jl. Karamat No.93, Karamat, Kec. Gunungpuyuh, Kota Sukabumi, Jawa Barat 43122",
               "foto" => "images/47ZCIcfyci6hXzOcjzTrv6lpvRyJY0jFFEkXWzJb.jpg",
               "description" => "SMA Negeri 2",
           ],
           [
               "name" => "SMA Negeri 3",
               "latitude" => "-6.9220308",
               "longitude" => "106.942062",
               "npsn" => "20221561",
               "alamat" => "Jl. Ciaul Baru No.21, RT.1/RW.7, Subangjaya, Kec. Cikole, Kota Sukabumi, Jawa Barat 43116",
               "foto" => "images/3S6WzZzTrXQ7ME8lwwzeBssASdCG35clir812p6r.jpg",
               "description" => "SMA Negeri 3",
           ],
           [
               "name" => "SMA Negeri 4",
               "latitude" => "-6.9194617",
               "longitude" => "106.9292316",
               "npsn" => "20221562",
               "alamat" => "Jl. Ir. H. Juanda No.8, Cikole, Kec. Cikole, Kota Sukabumi, Jawa Barat 43113",
               "foto" => "images/fek2WY9qqkCy5t3otQh3NUpPRvTaL4QLsykf14H7.jpg",
               "description" => "SMA Negeri 4",
           ],
           [
               "name" => "SMA Negeri 5",
               "latitude" => "-6.9456097",
               "longitude" => "106.9492325",
               "npsn" => "20221563",
               "alamat" => "Jl. Sarasa No.1, Babakan, Kec. Cibeureum, Kota Sukabumi, Jawa Barat 43165",
               "foto" => "images/zt5O7QjHyoR7fp6fiUDxFblx3vH2pqApilfGhrJI.jpg",
               "description" => "SMA Negeri 5",
           ],
           [
               "name" => "SMA Mardi Yuana",
               "latitude" => "-6.920794",
               "longitude" => "106.9299699",
               "npsn" => "20221590",
               "alamat" => "JL. R.E Martadinata No. 54 Sukabumi, Kebonjati, Kec. Cikole, Kota Sukabumi",
               "foto" => "images/BQlIhIWAAoQR3WmZbrnKB1ltxn7PCfur7WiCijmL.jpg",
               "description" => "SMA Mardi Yuana",
           ],
           [
               "name" => "SMA Muhammadiyah",
               "latitude" => "-6.9183022",
               "longitude" => "106.9330715",
               "npsn" => "20221591",
               "alamat" => "JL. R. Syamsudin SH. NO. 59 Sukabumi, Cikole, Kec. Cikole Kota Sukabumi",
               "foto" => "images/AAEOwlh3IESPa3QOH1uJJGMkIdZHRxDg0lMNlTlE.jpg",
               "description" => "SMA Muhammadiyah",
           ],
           [
               "name" => "SMA Pesantren Terpadu Hayyatan Thayyibah",
               "latitude" => "-6.9041541",
               "longitude" => "106.915484",
               "npsn" => "20221587",
               "alamat" => "JL. Kramat NO. 123 SukabumiI, Gunung Puyuh, Kec. Gunung Puyuh Kota Sukabumi",
               "foto" => "images/tjcmIuaNMKgU7XFCR0eXNgWyENDkvQlNnjQcljDb.jpg",
               "description" => "SMA Pesantren Terpadu Hayyatan Thayyibah",
           ],
           [
               "name" => "SMA IT Al Izzah",
               "latitude" => "-6.949068",
               "longitude" => "106.9424623",
               "npsn" => "69916542",
               "alamat" => "Kp. Cibungur , Limusnunggal, Kec. Cibeureum, Kota Sukabumi",
               "foto" => "images/sbXHK6CxA7KWjmhNw5zfZ0B1DUJXuCvruN6jrXJ8.jpg",
               "description" => "SMA IT Al Izzah",
           ],
           [
               "name" => "SMA Al Azhar",
               "latitude" => "-6.9490667",
               "longitude" => "106.90954",
               "npsn" => "69983844",
               "alamat" => "Jl. Subang Jaya, RT.03/RW.04, Subangjaya, Kec. Cikole",
               "foto" => "images/ZfHYwEIqFvERmq1SRKKysbZuTVd10M52IOCNB1PJ.jpg",
               "description" => "SMA Al Azhar",
           ],
       ]);
    }
}
