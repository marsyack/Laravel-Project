<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaign.create');
    }

    public function store(Request $request)
    {
        Campaign::create([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'collected_donation' => 0, // otomatis 0
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('campaign.edit', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->update([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            // ❌ collected_donation DIHAPUS
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Campaign::destroy($id);
        return redirect('/campaign')->with('success', 'Data berhasil dihapus');
    }

    //  FITUR DONASI
    public function donate(Request $request, $id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1'
        ]);

        $campaign = Campaign::findOrFail($id);

        // tambah ke terkumpul
        $campaign->increment('collected_donation', $request->amount);

        return redirect('/campaign')->with('success', 'Donasi berhasil!');
    }
}