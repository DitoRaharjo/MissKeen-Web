<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;
use Carbon\Carbon;
use Auth;

use App\User;
use App\UserApp;
use App\Role;
use App\Category;

class ApplicationController extends Controller
{
  public function index() {
    $semuaAplikasi = UserApp::all();
    return view('backend.application.index', compact('semuaAplikasi'));
  }

  public function create() {
    $semuaKategori = Category::all();
    return view('backend.application.create', compact('semuaKategori'));
  }

  public function store(Request $request) {
    $this->validate($request, [
        'app_name' => 'required',
        'category_id' => 'required',
        'image' => 'required',
    ]);

    $aplikasi_data = $request->except('_token');

    $random = str_random(4);
    $filename = (string)(date('Y-m-d') . '_' . $random . '.jpg');

    if($request->hasFile('image')) {
      $request->file('image')->move('uploads/ApplicationImage', $filename);
      $aplikasi_data['image'] = $filename;
    }
    else {
      unset($aplikasi_data['image']);
    }

    DB::beginTransaction();
    try
    {
      $aplikasi_data['token'] = str_random(30);
      $aplikasi_data['token_secret'] = Hash::make($aplikasi_data['token']);
      $aplikasi_data['created_by']=Auth::user()->id;
      $aplikasi_data['status'] = '1';
      UserApp::create($aplikasi_data);
      DB::commit();

      alert()->success('Aplikasi berhasil di tambahkan', 'Tambah Aplikasi Berhasil!');
      return redirect()->route('back.aplikasi.index');
    } catch (\QueryException $ex) {
        DB::rollback();
        throw $ex;
    }
  }
}
