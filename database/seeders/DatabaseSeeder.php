<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Znacky;
use App\Models\Materialy;
use App\Models\Produkty;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Znacky::create(['nazev' => 'Audi']);
        Znacky::create(['nazev' => 'Ford']);
        Znacky::create(['nazev' => 'Škoda']);
        Znacky::create(['nazev' => 'Citroen']);
        Znacky::create(['nazev' => 'Volkswagen']);
        Znacky::create(['nazev' => 'Dodge']);
        Znacky::create(['nazev' => 'BMW']);
        Znacky::create(['nazev' => 'Mercedes-Benz']);
    
        Materialy::create(['nazev' => 'Plast']);
        Materialy::create(['nazev' => 'Plech']);
        Materialy::create(['nazev' => 'Hliník']);
    
        Produkty::create([
            'nazev' => 'AUDI A1 Allstreet (GBH)',
            'znacky_id' => Znacky::where('nazev', 'Audi')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id, 
            'kod' => 'MM04452',
            'cena' => 4840.00,
            'description' => 'Kryt pod motor AUDI A1 Allstreet (GBH) - Plech je vyroben z 2mm plechu s maximální přesností. Garantuje vysokou mechanickou a chemickou odolnost vůči ledu, vodě, prachu, kamení, blátu a posypových materiálů.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor AUDI A3',
            'znacky_id' => Znacky::where('nazev', 'Audi')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id, 
            'kod' => 'PM00014',
            'cena' => 968.00,
            'description' => 'Kryt pod motor AUDI A3 Hatchback (8L1) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor CITROËN C3 II',
            'znacky_id' => Znacky::where('nazev', 'Citroen')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00868',
            'cena' => 1331.00,
            'description' => 'Kryt pod motor CITROËN C3 II (SC_) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor VOLKSWAGEN TOURAN (1T1, 1T2)',
            'znacky_id' => Znacky::where('nazev', 'Volkswagen')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00439',
            'cena' => 993.00,
            'description' => 'Kryt pod motor VOLKSWAGEN TOURAN (1T1, 1T2) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor VOLKSWAGEN BEETLE Kabriolet (5C7, 5C8)',
            'znacky_id' => Znacky::where('nazev', 'Volkswagen')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00506',
            'cena' => 968.00,
            'description' => 'Kryt pod motor VOLKSWAGEN BEETLE Kabriolet (5C7, 5C8) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor VOLKSWAGEN BORA Kombi (1J6)',
            'znacky_id' => Znacky::where('nazev', 'Volkswagen')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00015',
            'cena' => 993.00,
            'description' => 'Kryt pod motor VOLKSWAGEN BORA Kombi (1J6) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor DODGE CALIBER',
            'znacky_id' => Znacky::where('nazev', 'Dodge')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MM03811',
            'cena' => 4684.00,
            'description' => 'Kryt pod motor DODGE CALIBER - Plech je vyroben z 2mm plechu s maximální přesností. Garantuje vysokou mechanickou a chemickou odolnost vůči ledu, vodě, prachu, kamení, blátu a posypových materiálů. Náš kryt motoru prodlužuje životnost motorové části jako je například: alternátor, čerpadlo, řemeny a napínací kladky, řídící jednotky a elektroinstalace.'
        ]);
        Produkty::create([
            'nazev' => 'FORD KUGA III Kryt pod motor',
            'znacky_id' => Znacky::where('nazev', 'Ford')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MM04465',
            'cena' => 5929.00,
            'description' => 'Kryt pod motor FORD KUGA III - Plech je vyroben z 2mm plechu s maximální přesností.'
        ]);
        Produkty::create([
            'nazev' => 'FORD TRANSIT CUSTOM V362 Bus (F3) Kryt pod palivovou nádrž AdBlue',
            'znacky_id' => Znacky::where('nazev', 'Ford')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MX04452',
            'cena' => 4266.00,
            'description' => 'Kryt pod palivovou nádrž AdBlue FORD TRANSIT CUSTOM V362 Bus (F3) - Plech je vyroben z 2mm plechu s maximální přesností. Garantuje vysokou mechanickou a chemickou odolnost vůči ledu, vodě, prachu, kamení, blátu a posypových materiálů. Náš kryt motoru prodlužuje životnost motorové části jako je například: alternátor, čerpadlo, řemeny a napínací kladky, řídící jednotky a elektroinstalace.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor FORD B-MAX Van (JK)',
            'znacky_id' => Znacky::where('nazev', 'Ford')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MM00638',
            'cena' => 3598.00,
            'description' => 'ryt pod motor FORD B-MAX Van (JK) - Plech je vyroben z 2mm plechu s maximální přesností. '
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor SKODA CITIGO',
            'znacky_id' => Znacky::where('nazev', 'Škoda')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM03448',
            'cena' => 1331.00,
            'description' => 'Kryt pod motor SKODA CITIGO - Plast je vyroben z 3mm polyethylenového základů. '
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor SKODA OCTAVIA I Hatchback (1U2)',
            'znacky_id' => Znacky::where('nazev', 'Škoda')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MM00843',
            'cena' => 3653.00,
            'description' => 'Kryt pod motor SKODA OCTAVIA I Hatchback (1U2) - Plech je vyroben z 2mm plechu s maximální přesností. Garantuje vysokou mechanickou a chemickou odolnost vůči ledu, vodě, prachu, kamení, blátu a posypových materiálů. '
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor SKODA FABIA I Hatchback (6Y2)',
            'znacky_id' => Znacky::where('nazev', 'Škoda')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00432',
            'cena' => 968.00,
            'description' => 'Kryt pod motor SKODA FABIA I Hatchback (6Y2) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům. Náš kryt motoru prodlouží životnost motorových součástek, jako jsou např.: alternátor, čerpadlo, řemeny, napínací kladky, řídící jednotky a elektroinstalace.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor SKODA PRAKTIK VAN',
            'znacky_id' => Znacky::where('nazev', 'Škoda')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MM00825',
            'cena' => 3532.00,
            'description' => 'Kryt pod motor SKODA PRAKTIK VAN - Plech je vyroben z 2mm plechu s maximální přesností. Garantuje vysokou mechanickou a chemickou odolnost vůči ledu, vodě, prachu, kamení, blátu a posypových materiálů. '
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor SKODA SUPERB I Sedan (B5)',
            'znacky_id' => Znacky::where('nazev', 'Škoda')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00440',
            'cena' => 1283.00,
            'description' => 'Kryt pod motor SKODA SUPERB I Sedan (B5) - Plast je vyroben z 3mm polyethylenového základů. '
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor a automatickou převodovku BMW 5 Kombi (E61)',
            'znacky_id' => Znacky::where('nazev', 'BMW')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PX00063',
            'cena' => 1331.00,
            'description' => 'ryt pod motor a automatickou převodovku BMW 5 Kombi (E61) - Plast je vyroben z 3mm polyethylenového základů. '
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor BMW 3 Compact (E36/5)',
            'znacky_id' => Znacky::where('nazev', 'BMW')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00050',
            'cena' => 1210.00,
            'description' => 'Kryt pod motor BMW 3 Compact (E36/5) - Plast je vyroben z 3mm polyethylenového základů.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor BMW 3 Sedan (E46)',
            'znacky_id' => Znacky::where('nazev', 'BMW')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM00060',
            'cena' => 1452.00,
            'description' => 'Kryt pod motor BMW 3 Sedan (E46) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor MERCEDES-BENZ A-CLASS (W168)',
            'znacky_id' => Znacky::where('nazev', 'Mercedes-Benz')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plech')->first()->id,
            'kod' => 'MM00661',
            'cena' => 4637.00,
            'description' => 'Kryt pod motor MERCEDES-BENZ A-CLASS (W168) - Plech je vyroben z 2mm plechu s maximální přesností. Garantuje vysokou mechanickou a chemickou odolnost vůči ledu, vodě, prachu, kamení, blátu a posypových materiálů.'
        ]);
        Produkty::create([
            'nazev' => 'Kryt pod motor MERCEDES-BENZ A-CLASS (W169), boční levý',
            'znacky_id' => Znacky::where('nazev', 'Mercedes-Benz')->first()->id,
            'materialy_id' => Materialy::where('nazev', 'Plast')->first()->id,
            'kod' => 'PM03378',
            'cena' => 1210.00,
            'description' => 'Kryt pod motor MERCEDES-BENZ A-CLASS (W169) - Plast je vyroben z 3mm polyethylenového základů. Tloušťka a složení krytu pod motor garantuje vysokou mechanickou a chemickou odolnost vůči kamení, vodě, prachu, ledu, blátu a posypovým materiálům. Náš kryt motoru prodlouží životnost motorových součástek, jako jsou např.: alternátor, čerpadlo, řemeny, napínací kladky, řídící jednotky a elektroinstalace.'
        ]);
 


        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('admin'), 
        ]);
    }
}
