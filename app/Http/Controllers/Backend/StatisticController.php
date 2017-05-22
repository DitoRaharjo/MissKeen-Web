<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

use App\UserApp;
use App\ApiLog;

class StatisticController extends Controller
{
  public function index() {
    $semuaAplikasi = UserApp::where('created_by', '=', Auth::user()->id)->get()->pluck('id');
    $semuaStatistik = ApiLog::whereIn('user_app_id', $semuaAplikasi)->get();

    return view('backend.statistic.index', compact('semuaStatistik'));
  }
}
