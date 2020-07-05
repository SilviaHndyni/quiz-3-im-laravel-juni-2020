<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        $data["user_id"] = 1;
        $data["slug"] = str_replace(" ", "-", strtolower($data["judul"]));
        unset($data["_token"]);  //data_token dibuang
        $new_artikel = DB::table('artikel')->insert($data);
        return $new_artikel;
    }
    
    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id', $id)->first();
        return $artikel;
    }

    // public static function update($id, $request){
    //     $artikel = DB::table('artikel')
    //                 ->where('id', $id)
    //                 ->update([
    //                     'judul' => $request->judul,
    //                     'judul' => $request->judul,
    //                     'judul' => $request->judul,
    //                 ])
    // }
}

?>