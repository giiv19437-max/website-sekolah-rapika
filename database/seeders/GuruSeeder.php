<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('guru')->insert([
            [
                'nama' => 'RINA SUSANA, S. Pd',
                'nippk' => '197601072025212031',
                'nuptk' => '7033754654300003',
            ],
            [
                'nama' => 'AI NURHASANAH, S. Pd',
                'nippk' => '199007152025212172',
                'nuptk' => '8047768669230253',
            ],
            [
                'nama' => 'MEGA NURUNNISA, S. Pd',
                'nippk' => '198809202025212107',
                'nuptk' => '5252766667230183',
            ],
            [
                'nama' => 'SILVI DANU RESVITA, S.T',
                'nippk' => '198901042025212122',
                'nuptk' => '6436767668230182',
            ],
            [
                'nama' => 'ASEP MUHLIS, S. Pd.I',
                'nippk' => '199311092025211125',
                'nuptk' => '4441771672130113',
            ],
            [
                'nama' => 'YAYUP HINDRYANI, S Pd',
                'nippk' => '199403232025212198',
                'nuptk' => '7655772673230122',
            ],
            [
                'nama' => 'BANI FUDOLY, S.T',
                'nippk' => '199107262025211081',
                'nuptk' => '4058769670130163',
            ],
            [
                'nama' => 'MIA RUSMIATI, S. Pd',
                'nippk' => '198812142025212102',
                'nuptk' => '9546766667230133',
            ],
            [
                'nama' => 'ISNAN WIRANURSYEHA, S. Pd',
                'nippk' => '199104292025211123',
                'nuptk' => '2761769670130172',
            ],
            [
                'nama' => 'YANI CAHYANI, S. Pd',
                'nippk' => '198802022025212177',
                'nuptk' => '3534766667230382',
            ],
            [
                'nama' => 'ENDE ISKANDAR, S.TP',
                'nippk' => '199705072025211093',
                'nuptk' => '4839775676130012',
            ],
            [
                'nama' => 'RAHMAT SETIAWAN, S. T',
                'nippk' => '199805242025211068',
                'nuptk' => '1856775676130012',
            ],
            [
                'nama' => 'SITI RAHMAWATI, S. Pd.I',
                'nippk' => '199007052025212168',
                'nuptk' => '9037768669231223',
            ],
            [
                'nama' => 'WAHYUDIN, S. Tr. Kom',
                'nippk' => '199405032025211134',
                'nuptk' => '3835772673130112',
            ],
            [
                'nama' => 'KAMALIA, SE',
                'nippk' => '199601212025212124',
                'nuptk' => null,
            ],
            [
                'nama' => 'M. YOGA AGUNG N, M.MPd',
                'nippk' => '199805082025211085',
                'nuptk' => '7840776677130012',
            ],
            [
                'nama' => 'JAJANG RIDWAN, ST',
                'nippk' => '198312062025211079',
                'nuptk' => '6538761664110013',
            ],
            [
                'nama' => 'ANDRI MUHOIR, ST',
                'nippk' => '199802132025211062',
                'nuptk' => '3545776677130002',
            ],
        ]);
    }
}