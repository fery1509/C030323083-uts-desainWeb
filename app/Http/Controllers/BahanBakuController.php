<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    public function index()
    {
        $bahanBakus = BahanBaku::all();
        return view('bahanBaku.index', compact('bahanBakus'));
    }

    public function create()
    {
        return view('bahanBaku.create');
    }

    public function store(Request $request)
    {
        BahanBaku::create($request->all());
        return redirect()->route('bahanBaku.index');
    }

    public function edit(BahanBaku $bahanBaku)
    {
        return view('bahanBaku.edit', compact('bahanBaku'));
    }

    public function update(Request $request, BahanBaku $bahanBaku)
    {
        $bahanBaku->update($request->all());
        return redirect()->route('bahanBaku.index');
    }

    public function destroy(BahanBaku $bahanBaku)
    {
        $bahanBaku->delete();
        return redirect()->route('bahanBaku.index');
    }
}

