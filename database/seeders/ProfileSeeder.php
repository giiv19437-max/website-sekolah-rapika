<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolProfile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        SchoolProfile::create([
            'nama_sekolah' => 'SMK Negeri 1 Cijati',

            'npsn' => '20252505',

            'alamat' => 'Jl. Raya Cijati, Kecamatan Cijati, Kabupaten Cianjur, Jawa Barat 43284',

            'telepon' => null,

            'email' => null,

            'website' => null,

            'sejarah' => null,

            'visi' => 'Terwujudnya lulusan KEREN dan BERSINERGI melalui pembelajaran mendalam, penguatan karakter Pancawaluya, serta kolaborasi aktif dengan dunia kerja dan industri.',

            'misi' => "1. Menyelenggarakan pembelajaran mendalam yang berpusat pada peserta didik untuk mengembangkan kompetensi secara optimal.\n\n2. Menumbuhkan karakter religius, energik, dan nasionalis dalam kehidupan sehari-hari melalui penguatan nilai-nilai Pancawaluya.\n\n3. Mengembangkan lulusan yang kompeten dan berdaya saing sesuai dengan kebutuhan dunia kerja dan perkembangan zaman.\n\n4. Menanamkan jiwa kewirausahaan (entrepreneurship) melalui kegiatan pembelajaran dan praktik nyata.\n\n5. Menumbuhkan integritas, etos kerja, dan tanggung jawab melalui pembiasaan, keteladanan, dan budaya sekolah yang positif.\n\n6. Menguatkan kolaborasi dan kemitraan aktif dengan dunia kerja dan industri untuk meningkatkan relevansi dan kualitas lulusan.",

            'nama_kepala_sekolah' => null,
        ]);
    }
}