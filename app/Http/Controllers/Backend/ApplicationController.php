<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image as Image;

use DB;
use Hash;
use Carbon\Carbon;
use Auth;
use File;

use App\User;
use App\UserApp;
use App\Role;
use App\Category;
use App\ApiLog;
use App\AccessLog;

class ApplicationController extends Controller
{
  public function index() {
    $semuaAplikasi = UserApp::where('created_by', '=', Auth::user()->id)->get();
    return view('backend.application.index', compact('semuaAplikasi'));
  }

  public function create() {
    $semuaKategori = Category::where('name', '!=', 'Internal')->get();
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
      $app = UserApp::create($aplikasi_data);

      $apiLog_data['user_app_id'] = $app->id;
      ApiLog::create($apiLog_data);

      DB::commit();

      alert()->success('Aplikasi berhasil di tambahkan', 'Tambah Aplikasi Berhasil!');
      return redirect()->route('back.aplikasi.index');
    } catch (\QueryException $ex) {
        DB::rollback();
        throw $ex;
    }
  }

  public function edit($id) {
    $semuaKategori = Category::where('name', '!=', 'Internal')->get();
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      return view('backend.application.edit', compact('aplikasi','semuaKategori'));
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function update(Request $request, $id) {
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      $this->validate($request, [
          'app_name' => 'required',
          'category_id' => 'required',
          'status' => 'required',
      ]);

      $aplikasi_data = $request->except('_token');

      DB::beginTransaction();
      try
      {

        $aplikasi_data['updated_by'] = Auth::user()->id;
        $aplikasi->update($aplikasi_data);
        DB::commit();


        alert()->success('Profile aplikasi berhasil di ubah', 'Profile Aplikasi Berhasil Diubah!');
        return redirect()->route('back.aplikasi.index');
      } catch (\QueryException $ex) {
          DB::rollback();
          throw $ex;
      }
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function destroy($id) {
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      $aplikasi->deleted_at = Carbon::now();
      $aplikasi->deleted_by = Auth::user()->id;
      $aplikasi->status = '0';
      $aplikasi->save();

      alert()->success('Aplikasi berhasil dihapus', 'Aplikasi Dihapus!');
      return redirect()->route('back.aplikasi.index');
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function updateApiKey($id) {
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      $tokenNew = str_random(30);
      $tokenSecretNew = Hash::make($tokenNew);

      $aplikasi->token = $tokenNew;
      $aplikasi->token_secret = $tokenSecretNew;
      $aplikasi->save();

      alert()->success('API Key aplikasi berhasil diperbaharui', 'API Key Aplikasi diperbaharui!');
      return redirect()->route('back.aplikasi.edit', $aplikasi->id);
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function updateFoto(Request $request, $id) {
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      $aplikasi_data = $request->except('_token');

      $this->validate($request, [
          'image' => 'image',
      ]);

      $random = str_random(4);
      $filename = (string)(date('Y-m-d') . '_' . $random . '.jpg');

    if($request->hasFile('image')) {
      if($aplikasi->image != NULL) {
          File::delete('uploads/ApplicationImage/'.$aplikasi->image);
        }
        $request->file('image')->move('uploads/ApplicationImage', $filename);
        $image = Image::make(sprintf('uploads/ApplicationImage/%s', $filename))->resize(null, 500, function($constraint) {
          $constraint->aspectRatio();
        })->save();
        $aplikasi_data['image'] = $filename;
      } else {
        unset($aplikasi_data['image']);
      }

      DB::beginTransaction();

      try {
        $aplikasi->update($aplikasi_data);

        DB::commit();

        alert()->success('Foto berhasil di perbaharui', 'Pembaharuan Berhasil!');
        return redirect()->route('back.aplikasi.edit', $aplikasi->id);
      } catch (\Exception $e) {
        DB::rollback();
        throw $e;
      }
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function updateLive($id) {
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      $aplikasi->status = "1";
      $aplikasi->updated_by = Auth::user()->id;
      $aplikasi->save();

      alert()->success('Aplikasi berhasil Live', 'Aplikasi Live!');
      return redirect()->route('back.aplikasi.index');
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function updateDevelopment($id) {
    $aplikasi = UserApp::find($id);

    if($aplikasi->created_by == Auth::user()->id) {
      $aplikasi->status = "0";
      $aplikasi->updated_by = Auth::user()->id;
      $aplikasi->save();

      alert()->success('Aplikasi berhasil Development', 'Aplikasi Development!');
      return redirect()->route('back.aplikasi.index');
    } else {
      alert()->error('Maaf aplikasi tersebut bukan milik anda', 'Pelanggaran Akses Aplikasi!');
      return redirect()->route('back.aplikasi.index');
    }
  }

  public function detailLog($id) {
    $semuaDetailLog = AccessLog::where('user_app_id', '=', $id)->get();

    return view('backend.applicationLog.index', compact('semuaDetailLog'));
  }
}
