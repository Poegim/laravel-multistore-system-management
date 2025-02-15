<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Universal',
            '3MK',
            'ACEFAST',
            'Acer',
            'ACME',
            'ACURA',
            'Adata',
            'Adidas',
            'Akyga',
            'Alcatel',
            'ALLVIEW',
            'AMA Europe',
            'Amazon',
            'Andida',
            'Apple',
            'Archos',
            'ASUS',
            'ATRAX',
            'ATX',
            'AWEI',
            'Babaco',
            'BASEUS',
            'Beeyo',
            'BELINE',
            'Belkin',
            'BENKS',
            'BLACKBERRY',
            'Blackview',
            'Blue Star',
            'Blun',
            'BMW',
            'Borofone',
            'Bravis',
            'Budi',
            'Bugatti',
            'CASE-MATE',
            'CaseGadget',
            'Caselogy',
            'CAT',
            'CELLINE',
            'Celly',
            'Ceramic',
            'Choetech',
            'Comma',
            'CRONG',
            'D-R-O',
            'DC',
            'Devia',
            'Diesel',
            'DISNEY',
            'Dodge',
            'Dream Works',
            'Dudao',
            'DUXDUCIS',
            'ENAU',
            'Enzzo',
            'ERT Group',
            'ESR',
            'Ferrari',
            'Flavour Design',
            'FLAVR',
            'Forcell',
            'FORCETOP',
            'Forever',
            'FujiPower',
            'Garmin',
            'GEAR4',
            'Glamour',
            'Global Technology',
            'GoodRam',
            'Google',
            'GRIFFIN',
            'GUESS',
            'HAIER',
            'HAMA',
            'Happiness',
            'HOCO',
            'HOFI',
            'Honor',
            'HTC',
            'Huawei',
            'Hurtel',
            'ICARER',
            'iDeal Of Sweden',
            'Idrops',
            'ImroDrive',
            'IMYMAX',
            'Incipio',
            'Infinix',
            'Inne',
            'Integral',
            'IPAKY',
            'Itskins',
            'Jabra',
            'JBL',
            'JML',
            'Joyroom',
            'Just Cavalli',
            'KARL LAGERFELD',
            'Kavaro',
            'KENZO',
            'KIANO',
            'Kingston',
            'KINGXBAR',
            'KITSOUND',
            'KLTRADE',
            'Kruger&Matz',
            'Krusell',
            'LAUT',
            'Ldnio',
            'Lebara',
            'LEEF',
            'Lenovo',
            'LG',
            'Lock-Tel',
            'LUPHIE',
            'Lycamobile',
            'Manta',
            'Marvel',
            'Marvelle',
            'Maxcom',
            'Maxlife',
            'Maxton',
            'Maxximus',
            'Meizu',
            'MEMUMI',
            'Mercedes',
            'Mercury',
            'Microsoft',
            'Mobilfox',
            'MOBIOLA',
            'Mocolo',
            'MOFI',
            'Monstelo',
            'Motorola',
            'msvii',
            'MyPhone',
            'MyScreen',
            'Nemo',
            'Nexeri',
            'Nillkin',
            'Nokia',
            'NORDIC Elements',
            'OBLIQ',
            'ONEPLUS',
            'Oppo',
            'Orange',
            'Oukitel',
            'Overmax',
            'Panasonic',
            'Partner',
            'PATTERN',
            'PESTON',
            'Philips',
            'Plantronics',
            'Platinet',
            'Play',
            'PLUS',
            'Prestigio',
            'Proda',
            'Prolink',
            'PURO',
            'QILIVE',
            'QSMART',
            'Raccoon',
            'Razer',
            'Realme',
            'Rebeltec',
            'Recci',
            'REMAX',
            'Reverse',
            'Richmond & Finch',
            'RINGKE',
            'ROAR',
            'Sagem',
            'Samsung',
            'SANDISC',
            'Setty',
            'Skross',
            'Slicoo',
            'Smartwoods',
            'Sony',
            'SonyEricsson',
            'SPECK',
            'Spigen',
            'SWISSTEN',
            'Timmy',
            'T-MAX',
            'T-PHOX',
            'Tech-Protect',
            'Telefunken',
            'Telemagic',
            'TelForceOne',
            'Telkom',
            'Tellsson',
            'Telone',
            'Tempered Glass',
            'THOR',
            'Toptel',
            'Toshiba',
            'TP-LINK',
            'TRUST',
            'UAG',
            'Ugreen',
            'UNIQ',
            'Univertel',
            'URBEATS',
            'US Polo',
            'USAMS',
            'Varta',
            'Vega',
            'Vennus',
            'Vidvie',
            'Virgin Mobile',
            'Vission',
            'Vivo',
            'VOUNI',
            'Vype',
            'WIKO',
            'Wintory',
            'Wisko',
            'WK-Design',
            'WOZINSKY',
            'X-DORIA',
            'X-One',
            'XGSM',
            'Xiaomi',
            'XO',
            'Xqisit',
            'ZAPPY',
            'Zizo',
            'ZTE'
        ];

        foreach ($brands as $brand) {
            $data[] = [
                'name' => $brand,
                'slug' => Str::slug($brand, '-'),
                'user_id' => rand(1,5),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('brands')->insert($data);
    }
}
