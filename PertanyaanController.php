<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pertanyaan;

class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        $baru_pertanyaan = pertanyaan::save($request->all()); 

        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaanku = pertanyaan::get_all();
        return view('pertanyaan.index', compact('pertanyaanku'));
    }

    public function show() {
        $pertanyaans = pertanyaan::find_by_id($id);

        return view('pertanyaan.show', compact($pertanyaans))
    }

    public function edit() {
        $peredit = pertanyaan::find_by_id($id) {
            return('pertanyaan.edit', compact('peredit'));
        }

    public function update($id, Request $request) {
        $perupdate = pertanyaan::update($id, $request->all());
        return redirect('/pertanyaan');
    }
    
    public function destroy($id) {
        $deleted = pertanyaan::destroy($id);
        return redirect('/pertanyaan');
    }
    // public function index() {
    //     $pertanyaan = pertanyaan::get_all();
    //     return view('pertanyaan.index', compact('pertanyaan'));
    // }
    // public function create() {
    //     return view('pertanyaan.form');
    // }
    // public function store()
}
