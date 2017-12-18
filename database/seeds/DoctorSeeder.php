<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Ahmad Tantowi, Sp.A.',
            'alamat_doctor' => 'Bantul',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Susi Prameswari, Sp.A.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Budi Karya, Sp.A.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Shinta Romi, Sp.A.',
            'alamat_doctor' => 'Bantul',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Andi Nasution, Sp.A.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Ani Rosiana, Sp.A.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mukti Mulyo, Sp.B.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Melly Sita, Sp.B.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Riki Moris, Sp.B.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Khusus Bedah Soedirman',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Budi Mulya, Sp.B.',
            'alamat_doctor' => 'Bantul',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mukti Mulyo, Sp.B.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Pori Limbong, Sp.B.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mitha Kusmini, Sp.BS.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Elza Syarif, Sp.BS.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Budi Sudarsono, Sp.BS.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Lusi Putri, Sp.BS.',
            'alamat_doctor' => 'Bantul',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Sinta Putri, Sp.BS.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Miftah Rolly, Sp.BS.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Khusus Bedah Soedirman',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dedi Kurniawan, Sp.Ort.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dedi Ramadhan, Sp.Ort.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Fadhila Musyafira, Sp.Ort.',
            'alamat_doctor' => 'Bantul',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Lili Saputri, Sp.Ort.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mutia Rossa, Sp.Ort.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Marwan Gofur, Sp.Ort.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Suparman Basir, Sp.KK.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dwi Putri, Sp.KK.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS. Bethesda',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Sudirman Said, Sp.KK.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Suwarno Suryo, Sp.KK.',
            'alamat_doctor' => 'Bantul',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Abdul Hafiz, Sp.KK.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'pengalaman_doctor' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Andani Rahmawati, Sp.KK.',
            'alamat_doctor' => 'Sleman',
            'pengalaman_doctor' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '5'
        ]);
    }
}
