<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BankSetting;
use Illuminate\Http\Request;

class BankSettingController extends Controller
{
    public function edit()
    {
        $bank = BankSetting::first();

        if (!$bank) {
            $bank = BankSetting::create([
                'bank_name' => '',
                'account_holder' => '',
                'iban' => '',
                'bic' => '',
                'message' => '',
            ]);
        }

        return view('admin.bank.edit', compact('bank'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'bank_name' => 'required',
            'account_holder' => 'required',
            'iban' => 'required',
            'bic' => 'required',
            'message' => 'nullable',
        ]);

        $bank = BankSetting::first();

        $bank->update($validated);

        return redirect()
            ->route('admin.bank.edit')
            ->with('success', 'Bankdaten wurden erfolgreich gespeichert.');
    }
}