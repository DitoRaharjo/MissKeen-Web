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

class AdminApplicationController extends Controller
{
  public function edit($id) {
    $semuaKategori = Category::all();
    $aplikasi = UserApp::find($id);

    return view('backend.adminApplication.detail', compact('aplikasi','semuaKategori'));
  }

  public function update(Request $request, $id) {
    $this->validate($request, [
        'app_name' => 'required',
    ]);

    $aplikasi_data = $request->except('_token');

    DB::beginTransaction();
    try
    {
      $aplikasi = UserApp::find($id);
      $aplikasi_data['updated_by'] = Auth::user()->id;
      $aplikasi->update($aplikasi_data);
      DB::commit();


      alert()->success('Profile aplikasi berhasil di ubah', 'Profile Aplikasi Berhasil Diubah!');
      return redirect()->route('dashboard.administrator');
    } catch (\QueryException $ex) {
        DB::rollback();
        throw $ex;
    }
  }

  public function updateApiKey($id) {
    $aplikasi = UserApp::find($id);

    $tokenNew = str_random(30);
    $tokenSecretNew = Hash::make($tokenNew);

    $aplikasi->token = $tokenNew;
    $aplikasi->token_secret = $tokenSecretNew;
    $aplikasi->save();

    alert()->success('API Key aplikasi berhasil diperbaharui', 'API Key Aplikasi diperbaharui!');
    return redirect()->route('dashboard.administrator');
  }

  public function updateFoto(Request $request, $id) {
      $aplikasi_data = $request->except('_token');

      $this->validate($request, [
          'image' => 'image',
      ]);

      $aplikasi = UserApp::find($id);

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
          return redirect()->route('dashboard.administrator');
        } catch (\Exception $e) {
          DB::rollback();
          throw $e;
        }
    }

  public function updateLive($id) {
    $aplikasi = UserApp::find($id);

    $aplikasi->status = "1";
    $aplikasi->updated_by = Auth::user()->id;
    $aplikasi->save();

    alert()->success('Aplikasi berhasil Live', 'Aplikasi Live!');
    return redirect()->route('dashboard.administrator');
  }

  public function updateDevelopment($id) {
    $aplikasi = UserApp::find($id);

    $aplikasi->status = "0";
    $aplikasi->updated_by = Auth::user()->id;
    $aplikasi->save();

    alert()->success('Aplikasi berhasil Development', 'Aplikasi Development!');
    return redirect()->route('dashboard.administrator');
  }
}
