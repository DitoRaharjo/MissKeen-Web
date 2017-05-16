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
    $semuaCategory = Category::all();

    return view('backend.application.create', compact('semuaCategory'));
  }
}
