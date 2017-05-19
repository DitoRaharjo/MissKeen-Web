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

class UserController extends Controller
{
    public function dashboardAdministrator() {
      if (strcasecmp(Auth::user()->role->name,'Administrator')==0) {
        // return view('backend.dashboard.administrator');
        return redirect()->route('back.aplikasiAdmin.edit', 1);
      } else {
        alert()->error('Akun anda tidak memiliki hak untuk melihat halaman ini', 'Pelanggaran Akun!');
        return redirect()->route('user.login');
      }
    }

    public function dashboardDeveloper() {
      if (strcasecmp(Auth::user()->role->name,'Developer')==0) {
        return view('backend.dashboard.developer');
      } else {
        alert()->error('Akun anda tidak memiliki hak untuk melihat halaman ini', 'Pelanggaran Akun!');
        return redirect()->route('user.login');
      }
    }

    public function register() {
      return view('backend.loginregister.register');
    }

    public function checkEmailDuplicate($email) {
      $userCheck = User::select('id')->where('email', $email)->first();

      if($userCheck == null) {
        return true;
      } else {
        return false;
      }
    }

    public function doRegister(Request $request) {
      $this->validate($request, [
        'fullname' => 'required',
        'email' => 'required|email',
        'password' => 'required'
      ]);

      $user_data = $request->except('_token');

      if($this->checkEmailDuplicate($user_data['email']) == true ) {
        $user_data['password'] = bcrypt($user_data['password']);
        $user_data['role_id'] = Role::where('name', 'LIKE', 'Developer')->first()->id;
        $user_data['registerdate'] = Carbon::now();

        DB::beginTransaction();

        try {
          $user = User::create($user_data);

          DB::commit();

          Auth::login($user);

          alert()->success('Akun anda berhasil di register', 'Berhasil!');
          return redirect()->route('dashboard.developer');
        } catch (\Exception $e) {
          DB::rollback();

          throw $e;
        }
      } else {
        alert()->error('Maaf email anda sudah terdaftar', 'Gagal mendaftar!');
        return redirect()->route('user.register');
      }
    }

    public function login() {
      if (Auth::check()) {
        if(Auth::user()->status == 1) {
          if(Auth::user()->deleted_at == NULL) {
            if (strcasecmp(Auth::user()->role->name,'Developer')==0) {
              return redirect()->route('dashboard.developer');
            } else if (strcasecmp(Auth::user()->role->name,'Administrator')==0) {
              return redirect()->route('dashboard.administrator');
            } else {
              alert()->error('Maaf Role anda belum ditentukan', 'Gagal Login!');
              Auth::logout();
              return redirect()->route('user.login');
            }
          } else {
            Auth::logout();
            alert()->error('Mohon maaf akun anda telah di HAPUS oleh admin, silahkan hubungi admin', 'Akun Dihapus!');
            return redirect()->route('user.login');
          }
        } else {
          Auth::logout();
          alert()->error('Mohon maaf akun anda telah di NON-AKTIFKAN oleh admin, silahkan hubungi admin', 'Akun Non-Aktif!');
          return redirect()->route('user.login');
        }
      } else {
        return view('backend.loginregister.login');
      }
    }

    public function doLogin(Request $request) {
      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required'
      ]);

      $user_data = $request->except('_token');

      if($this->checkLupaPass($user_data) == false)
      {
        if(Auth::attempt($user_data))
        {
          if(Auth::user()->status == 1) {
            if(Auth::user()->deleted_at == NULL) {
              if (strcasecmp(Auth::user()->role->name,'Developer')==0) {
                return redirect()->route('dashboard.developer');
              } else if(strcasecmp(Auth::user()->role->name,'Administrator')==0) {
                return redirect()->route('dashboard.administrator');
              } else {
                alert()->error('Maaf Role anda belum ditentukan', 'Gagal Login!');
                Auth::logout();
                return redirect()->route('user.login');
              }
            } else {
              Auth::logout();
              alert()->error('Mohon maaf akun anda telah di HAPUS oleh admin, silahkan hubungi admin', 'Akun Dihapus!');
              return redirect()->route('user.login');
            }
          } else {
            Auth::logout();
            alert()->error('Mohon maaf akun anda telah di NON-AKTIFKAN oleh admin, silahkan hubungi admin', 'Akun Non-Aktif!');
            return redirect()->route('user.login');
          }
        } else {
          alert()->error('Username atau Password anda salah', 'Gagal Login!');
          return redirect()->route('user.login');
        }
      } else {
        $emailUser = $user_data['email'];
        return view('backend.lupapass.index', compact('emailUser'));
      }
    }

    public function doLogout() {
      Auth::logout();
      alert()->success('Berhasil Log Out', 'Log Out!');
      return redirect()->route('user.login');
    }

    public function checkLupaPass($user_data) {
      $userCount = User::where('email', '=', $user_data['email'])->first();

      if($userCount == null) {
        return false;
      }
      else {
        if($userCount->lupa_pass != NULL) {
          return true;
        }
      }
    }

    public function gantiPassDo(Request $request) {
      $this->validate($request, [
          'email' => 'required|email',
          'password' => 'required',
          'password_confirmation' => 'required',
      ]);

      $user_data = $request->except('_token');

      DB::beginTransaction();

      try {
        $user = User::where('email', '=', $user_data['email'])->first();

        $passwordBaru = bcrypt($user_data['password']);

        $user->password = $passwordBaru;
        $user->lupa_pass = NULL;
        $user->save();

        DB::commit();
      } catch (\Exception $e) {
        DB::rollback();
        throw $e;
      }

      alert()->success('Password berhasil diperbaharui', 'Berhasil!');
      if(strcasecmp($user->role->name, "Administrator")==0) {
        return redirect()->route('dashboard.administrator');
      } else if(strcasecmp($user->role->name, "Developer")==0) {
        return redirect()->route('dashboard.developer');
      }
    }
}
