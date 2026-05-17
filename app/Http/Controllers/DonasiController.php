<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function create()
    {
        $campaigns = Campaign::all();
        return view('donasi', compact('campaigns'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'campaign_id' => 'required|exists:campaigns,id',
            'nominal' => 'required|numeric|min:1000',
        ]);

        $campaign = Campaign::findOrFail($request->campaign_id);

        // Tambahkan nominal ke kolom collected
        $campaign->collected = ($campaign->collected ?? 0) + $request->nominal;
        $campaign->save();

        return redirect()
            ->route('campaign.index')
            ->with('success', 'Donasi berhasil dikirim.');
    }
}