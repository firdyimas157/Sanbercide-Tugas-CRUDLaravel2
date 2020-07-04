<?php

namespace App\Models;

class jawaban {
    public static function get_all() {
         $jawaban = DB::table('jawaban')->get();
         return $jawaban;
    }

    public static function save($dataja) {
        unset($data["_token"]);
        $new_jawaban = DB::table('jawaban')->insert($dataja);
        return $new_jawaban;
    }

    public static function find_by_id($id) {
        $jawaban = DB::table('jawaban')->where('id, $id')->first();
        return $jawaban;
    }

    public static function update($id, $request) {
        $jawaban = DB::table('jawaban')
                    ->where('id', $id)
                    ->update([
                        'isi' => $request["isi"]
                        'tanggaldibuat'=> $request["tanggaldibuat"]
                        'tanggaldiperbarui'=> $request["tanggaldiperbarui"]
                    ]);
                    return $jawaban;
    }

    public static function destroy($id) {
        $deleted = DB::table('jawaban')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
    }
}