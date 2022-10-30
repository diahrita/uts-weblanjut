<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'nama_barang' => 'SKINTIFIED 5X Cerramide Barrier Moisture Gel',
                'foto' => 'skintific.png',
                'harga' => '50000',
                'stok' => '56',
                'review' => 'Kulit jadi cerah, bahannya cepat meresap, cocok di kulit normal dan kulit kering',
            ],
            [
                'nama_barang' => 'NPURE CICA Day Cream',
                'foto' => 'npure.png',
                'harga' => '140000',
                'stok' => '15',
                'review' => 'Totally recommend this product buat yg kulitnya gampang berjerawat dan sensitif. Pemakaian di minggu pertama pun udah berasa hasilnya. Teksturnya nggak lengket dan cepat meresap di kulit',
            ],
            [
                'nama_barang' => 'AVOSKIN Your Skin Bae Serum',
                'foto' => 'avoskin.jpeg',
                'harga' => '138000',
                'stok' => '28',
                'review' => 'Tekstur serum bagus dan tidak lengket, namun hasil pemakaian kurang terlihat signifikan (sudah habis 1 botol serum), but overall worth to buy dengan harga yang relatif terjangkau',
            ],
            [
                'nama_barang' => 'Scarlett Whitening Acne Serum',
                'foto' => 'scarlett.png',
                'harga' => '60000',
                'stok' => '35',
                'review' => 'Serum ini diformulasikan 99,9% oil-free, makanya sangat oke dipakai oleh pemiliki kulit berminyak hingga berjerawat. Tekstur produknya pun cair sekali dan berwarna bening, sangat mudah diaplikasikan ke seluruh wajah. Scarlett Acne Serum mengandung active ingredients yang bagus untuk mengatasi permasalahan jerawat dan breakout',
            ],
            [
                'nama_barang' => 'Senka - Perfect Whip',
                'foto' => 'senka.jpeg',
                'harga' => '60000',
                'stok' => '11',
                'review' => 'Has repurchased million times! foamnya banyak banget apalagi kalo make foaming net, bikin foamnya jadi lebih banyak dan lebih cepet. setelah dibilas, kulit wajah gak terasa ketarik tapi tetep lembab. worth to buy!',
            ]
        ]);
    }
}
