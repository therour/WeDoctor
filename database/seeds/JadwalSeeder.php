<?php

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '12:00',
            'tempat_id' => '2',
            'doctor_id' => '1'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '2',
            'doctor_id' => '1'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '6',
            'doctor_id' => '1'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '3',
            'doctor_id' => '2'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '1',
            'doctor_id' => '2'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '7',
            'doctor_id' => '2'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '4',
            'doctor_id' => '3'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '8',
            'doctor_id' => '3'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '12',
            'doctor_id' => '3'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '6',
            'doctor_id' => '4'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '10',
            'doctor_id' => '4'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '15',
            'doctor_id' => '4'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '11',
            'doctor_id' => '5'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '12',
            'doctor_id' => '5'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '16',
            'doctor_id' => '5'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '10',
            'doctor_id' => '6'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '13',
            'doctor_id' => '6'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '14',
            'doctor_id' => '6'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '5',
            'doctor_id' => '7'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '3',
            'doctor_id' => '7'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '1',
            'doctor_id' => '7'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '7',
            'doctor_id' => '8'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '4',
            'doctor_id' => '8'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '5',
            'doctor_id' => '8'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '10',
            'doctor_id' => '9'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '9',
            'doctor_id' => '9'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '9'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '10',
            'doctor_id' => '10'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '9',
            'doctor_id' => '10'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '10'
        ]);
    }
}
