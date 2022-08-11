<?php

namespace Database\Seeders;

use App\Models\Adepartment;
use Illuminate\Database\Seeder;

class AdepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adepartments = [
            [
                'nama' => 'DEPARTEMEN INFRASTRUKTUR & HARDWARE',
                'kedudukan' => 'Departemen Infrastruktur dan Hardware adalah unit kerja struktural setingkat Departemen 
                dalam organisasi Divisi Teknologi Informasi yang berkedudukan langsung di bawah Kepala
                Divisi Teknologi Informasi serta dipimpin oleh seorang Kepala Departemen lnfrastruktur dan
                Hardware.',
                'organisasi1' => 'Biro Jaringan & Hardware',
                'organisasi2' => 'Biro Pengelolaan Sistem Aplikasi dan Helpdesk Service',
                'tugas1' => 'Menjabarkan, menyusun strategi pelaksanaan kebijakan Divisi Teknologi Informasi beserta
                program kerjanya dalam bidang jaringan dan hardware teknologi informasi dan komunikasi
                secara terintegrasi di lingkungan perusahaan dalam mendukung keberlangsungan strategi
                usaha yang dikembangkan oleh Perusahaan.',
                'tugas2' => 'Merencanakan, mengkoordinir & melaksanakan, mengevalusi serta melakukan perbaikan
                terhadap kegiatan dalam bidang yang menjadi tanggung jawabnya',
                'fungsi1' => 'Pengembangan dan evaluasi hardware teknologi informasi yang digunakan perusahan.',
                'fungsi2' => 'Pengembangan dan evaluasi sistem jaringan (networking) yang digunakan
                perusahaan.',
                'fungsi3' => 'Mengikuti perkembangan teknologi komputerisasi yang sesuai dengan kebutuhan
                perusahaan, guna menjamin kondisi kehandalan sistem informasi dan sisi hardware
                dan networking yang selalu dalam kondisi terupdate.',
                'fungsi4' => 'Memberikan sosialisasi kepada seluruh user terkait dengan jaringan dan hardware
                yang perlu dimutakhirkan disesuaikan dengan perkembangan teknologi dan kebutuhan
                perusahaan.',
                'fungsi5' => 'Perawatan, perbaikan dan penyelesaian segala permasalahan terkait infrastruktur dan
                hardware',
                'fungsi6' => 'Pembuatan buku panduan operasional untuk kepentingan perawatan dan trouble
                shooting jaringan dan hardware.'
            ],
            [
                'nama' => 'DEPARTEMEN PENGEMBANGAN APLIKASI & INTEGRASI',
                'kedudukan' => 'Departemen Pengembangan Aplikasi dan Integrasi adalah unit kerja struktural setingkat 
                Departemen dalam organisasi Divisi Teknologi Informasi yang berkedudukan langsung di bawah Kepala Divisi Teknologi Informasi 
                serta dipimpin oleh seorang Kepala Departemen Pengembangan Aplikasi dan Integrasi',
                'organisasi1' => 'Biro Pengembangan Aplikasi & Integrasi',
                'organisasi2' => 'Biro Penelitian & Pengembangan',
                'tugas1' => 'Menjabarkan, menyusun strategi pelaksanaan kebijakan Divisi Teknologi Informasi beserta program kerjanya dalam bidang 
                teknologi informasi dan komunikasi secara terintegrasi di lingkungan Perusahaan dalam mendukung keberlangsungan strategi usaha yang dikembangkan oleh Perusahaan.',
                'tugas2' => 'Merencanakan, mengkoodinir & melaksanakan, mengevalusi serta melakukan perbaikan terhadap kegiatan dalam bidang yang menjadi tanggung jawabnya',
                'fungsi1' => 'Perancangan, pengelolaan dan evaluasi penanganan lntegrasi dan Pengembangan aplikasi sesuai dengan kebijakan dan bisnis perusahaaan',
                'fungsi2' => 'Penelitian dan pengembangan perangkat teknologi informasi guna menyesuaikan diri dengan perkembangan teknologi dan mengakomodir perubahan kebutuhan
                perusahaan sesuai dengan kebijakan dan bisnis perusahaan',
                'fungsi3' => 'Perancangan, pengelolaan dan evaluasi manajemen pengetahuan (Knowledge Management sesuai dengan kebijakan dan bisnis perusahaan',
                'fungsi4' => 'Menerima masukan/saran dan menjalankan/mengekseskusi pengembangan aplikasi dan integrasi untuk meningkatkan kinerja sistem informasi',
                'fungsi5' => 'Dokumentasi atas pengembangan aplikasi dan integrasi dan sosialisasi atas hasil pengembangan aplikasi dan integrasi',
                'fungsi6' => 'Mengikuti perkembangan teknologi informasi dengan segala aspeknya untuk disesuaikan dengan kebutuhan perusahaan guna menjamin kehandalan sistem informasi dari sisi sistem aplikasi agar mampu beradaptasi terhadap perubahan',
            ],
        ];
        Adepartment::insert($adepartments);
    }
}
