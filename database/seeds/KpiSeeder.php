<?php

use App\Kpi;
use Illuminate\Database\Seeder;

class KpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                [
                    'text'          => 'Dosen bertingkah laku sopan terhadap semua mahasiswa, dosen, pegawai, dan semua sivitas akademika di Universitas Telkom.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen ramah dalam berkomunikasi terhadap semua mahasiswa, dosen, pegawai, dan semua sivitas akademika di Universitas Telkom.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen berpenampilan rapi.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen berpenampilan bersih.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen motivasi mahasiswa  untuk berpartisipasi dalam proses pembelajaran.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen memperlakukan semua mahasiswa secara adil, memberikan perhatian dan bantuan sesuai kebutuhan masing-masing, tanpa memperdulikan faktor personal.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen mau membagi pengalaman dan memberikan masukan kepada mahasiswa terkait mata kuliah ajarnya.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen memberikan materi perkuliahan yang sesuai dengan kurikulum yang berlaku, dan menuntaskan materi hingga akhir masa perkuliahan.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen mau menjawab pertanyaan dari mahasiswa terkait materi perkuliahan yang disampaikan dikelas hingga tuntas.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen selalu membagikan file materi perkuliahan kepada mahasiswa sebagai bahan pembelajaran mahasiswa di luar perkuliahan.',
                    'kpi_type_id'   => 1
                ],
                [
                    'text'          => 'Dosen berperilaku baik dalam menjalankan profesinya sesuai dengan kode etik sebagai dosen.',
                    'kpi_type_id'   => 2
                ],
                [
                    'text'          => 'Dosen memberikan penilaian terhadap mahasiswa secara obyektif dan adil, tanpa ada pengaruh personal.',
                    'kpi_type_id'   => 2
                ],
                [
                    'text'          => 'Dosen berperan aktif dalam pengembangan ilmu pengetahuan dan teknologi yang di lakukan oleh Universitas Telkom',
                    'kpi_type_id'   => 2
                ],
                [
                    'text'          => 'Dosen menjunjung tinggi profesionalitas dalam bekerja dan tidak melibatkan urusan pribadi saat dalam bekerja.',
                    'kpi_type_id'   => 2
                ],
                [
                    'text'          => 'Dosen senantiasa menjunjung tinggi nama baik Universitas Telkom',
                    'kpi_type_id'   => 2
                ],
                [
                    'text'          => 'Dosen bersedia menerima masukan dari mahasiswa dan mengakui kesalahannya apabila berbuat salah',
                    'kpi_type_id'   => 2
                ],
                [
                    'text'          => 'Dosen selalu datang tepat waktu dalam perkuliahan.',
                    'kpi_type_id'   => 3
                ],
                [
                    'text'          => 'Dosen mengelola tugas akademiknya tepat waktu sesuai dengan beban kerjanya.',
                    'kpi_type_id'   => 3
                ],
                [
                    'text'          => 'Dosen memberitahu lebih awal jika tidak dapat melaksanakan perkuliahan dan memberikan kelas pengganti / tugas tambahan kepada mahasiswa.',
                    'kpi_type_id'   => 3
                ],
                [
                    'text'          => 'Dosen memiliki rasa bertanggung jawab atas mahasiswa bimbingannya.',
                    'kpi_type_id'   => 3
                ],
                [
                    'text'          => 'Dosen menjaga dan memelihara sarana dan prasarana milik Universitas Telkom ketika menggunakannya dalam pelaksanaan perkuliahan.',
                    'kpi_type_id'   => 3
                ],
                [
                    'text'          => 'Dosen memberikan contoh tentang menjaga kebersihan kepada semua warga Universitas Telkom.',
                    'kpi_type_id'   => 3
                ],
                [
                    'text'          => 'Apakah dosen menguasai setiap mata kuliah yang di ajarkannya kepada mahasiswa?',
                    'kpi_type_id'   => 4
                ],
                [
                    'text'          => 'Apakah mahasiswa mampu mengerti penjelasan materi perkuliahan dari dosen saat sedang dijelaskan di kelas?',
                    'kpi_type_id'   => 4
                ],
                [
                    'text'          => 'Apakah sistematika pembelajaran di sampaikan dengan baik oleh dosen?',
                    'kpi_type_id'   => 4
                ],
                [
                    'text'          => 'Bagaimana tingkat penerimaan mahasiswa atas contoh-contoh penerapan materi perkuliahan yang disampaikan oleh dosen?',
                    'kpi_type_id'   => 4
                ],
                [
                    'text'          => 'Apabila mahasiswa mengajukan pertanyaan, bagaimana kepuasan mahasiswa atas jawaban dari dosen?',
                    'kpi_type_id'   => 4
                ],
                [
                    'text'          => 'Bagaimana tingkat kepuasan mahasiswa atas sistem penilaian yang diberikan dosen baik dalam ujian maupun tugas mandiri?',
                    'kpi_type_id'   => 4
                ],
                [
                    'text'          => 'Bagaimana tingkat kepuasan mahasiswa atas tugas yang diberikan dosen dalam relevansinya dengan mata kuliah yang diajarkan?',
                    'kpi_type_id'   => 4
                ],
            ];

        foreach ($data as $key => $value) {
            Kpi::create($value);
        }
    }
}
