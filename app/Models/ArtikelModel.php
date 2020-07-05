<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public static function get_all()
    {
        $artikels = DB::table('artikels')
                        ->orderBy('id', 'desc')
                        ->get();

        return $artikels;
    }

    public static function get($artikel_id)
    {
        $Artikel = DB::table('artikels')
                    ->where('id', $artikel_id)
                    ->first();

        return $Artikel;
    }

    public static function save($data)
    {
        $new_artikel = DB::table('artikels')->insert($data);

        return $new_artikel;
    }

    public static function update($id, $data)
    {
        $artikel = DB::table('artikels')
                            ->where('id', $id)
                            ->update($data);

        return $artikel;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('artikels')
                                ->where('id', $id)
                                ->delete();
        return $deleted;
    }
}
