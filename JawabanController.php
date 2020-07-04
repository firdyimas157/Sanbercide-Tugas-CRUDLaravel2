<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function create() {
        return view('jawaban.form');
    }

    public function store(Request $request) {
        $baru_jawaban = jawaban::save($request->all()); 

        return redirect('/jawaban');
    }

    public function index(){
        $jawabanku = jawaban::get_all();
        return view('jawaban.index', compact('jawabanku'));
    }

    public function show() {
        $jawabans = jawaban::find_by_id($id);

        return view('jawaban.show', compact($jawabans))
    }

    public function edit() {
        $jaedit = pertanyaan::find_by_id($id) {
            return('jawaban.edit', compact('jaedit'));
        }

    public function update($id, Request $request) {
        $jaupdate = pertanyaan::update($id, $request->all());
        return redirect('/jawaban');
    }

    public function destroy($id) {
            $deleted = jawaban::destroy($id);
            return redirect('/jawaban');
        }
}
