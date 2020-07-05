<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function show_erd()
    {
        return view('artikel.erd');
    }

    public function index()
    {
        $artikels = ArtikelModel::get_all();
        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikel.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        
        $data['slug'] = $this->get_slug($data['judul']);
        $data['created_at'] =new \DateTime('now');
        
        $artikel = ArtikelModel::save($data);
        if ($artikel) {
            return redirect('/artikel');
        }
    }

    public function show($artikel_id)
    {
        $artikel = ArtikelModel::get($artikel_id);
 
        
        return view('artikel.show', compact('artikel'));
    }

    public function edit($artikel_id)
    {
        $artikel = ArtikelModel::get($artikel_id);
        
        return view('artikel.edit', compact('artikel'));
    }

    public function update($artikel_id, Request $request)
    {
        $data = $request->all();
        unset($data['_method']);
        unset($data['_token']);
       
        $data['slug'] = $this->get_slug($data['judul']);
        $data['updated_at'] =new \DateTime('now');

        $artikel = ArtikelModel::update($artikel_id, $data);
        if ($artikel) {
            return redirect('/artikel');
        }
    }

    public function destroy($artikel_id)
    {
        $artikel = ArtikelModel::destroy($artikel_id);
        
        return redirect('/artikel');
    }

    private function get_slug($str)
    {
        return preg_replace("/[^A-Za-z0-9]/", '-', strtolower($str));
    }
}
