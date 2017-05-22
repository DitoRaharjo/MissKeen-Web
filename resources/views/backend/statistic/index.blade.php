@extends('backend.template')

@section('content')
<!-- page content -->
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Statistik Aplikasi </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tabel Statistik Aplikasi <small>Statistik akses API aplikasi</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="tabel-statistik" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th align="center">Aplikasi</th>
                          <!-- <th align="center">Test</th> -->
                          <th align="center">User (Auth & Register)</th>
                          <th align="center">Recipe</th>
                          <th align="center">Ingredient</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($semuaStatistik as $statistik)
                          <tr>
                            <td align="center" valign="middle" >{{ $statistik->userApp->app_name }}</td>
                            <!-- <td align="center" valign="middle" >{{ $statistik->test }}</td> -->
                            <td align="center" valign="middle" >{{ $statistik->user }}</td>
                            <td align="center" valign="middle" >{{ $statistik->recipe }}</td>
                            <td align="center" valign="middle" >{{ $statistik->ingredient }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>

@endsection

@section('custom_script')
<!-- Datatables Artikel Index -->
<script>
    $('#tabel-statistik').dataTable({
      "order": [[ 0, 'asc'  ]]
    });
</script>
<!-- /Datatables Artikel Index -->
@endsection
