<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function index()
    {
        $quotes = QuoteRequest::latest()->paginate(15);

        return view('admin.quotes.index', compact('quotes'));
    }

    public function show(QuoteRequest $quote)
    {
        return view('admin.quotes.show', compact('quote'));
    }

    public function edit(QuoteRequest $quote)
    {
        return view('admin.quotes.edit', compact('quote'));
    }

    public function update(Request $request, QuoteRequest $quote)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,completed,cancelled',
        ]);

        $quote->update([
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.quotes.index')
            ->with('success', 'Status erfolgreich aktualisiert.');
    }

    public function destroy(QuoteRequest $quote)
    {
        $quote->delete();

        return back()->with('success', 'Anfrage gelöscht.');
    }
}