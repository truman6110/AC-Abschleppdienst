<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BankSetting;

class BankSettingSeeder extends Seeder
{
    public function run(): void
    {
        BankSetting::create([
            'bank_name' => 'Sparkasse Aachen',
            'account_holder' => 'AC-Abschleppdienst',
            'iban' => 'DE00 0000 0000 0000 0000 00',
            'bic' => 'ABCDEFGHXXX',
            'message' => 'Bitte geben Sie Ihre Bestellnummer als Verwendungszweck an.',
        ]);
    }
}