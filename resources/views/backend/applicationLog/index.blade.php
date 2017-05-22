@extends('backend.template')

@section('content')
<!-- page content -->
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> API Log Aplikasi </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tabel Log Aplikasi <small>Daftar akses API aplikasi</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('back.aplikasi.index') }}" class="btn btn-info"><label class="fa fa-arrow-circle-left"></label>  Kembali</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="tabel-logAplikasi" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th align="center">Path</th>
                          <th align="center">Method</th>
                          <th align="center">Waktu Akses</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($semuaDetailLog as $log)
                          <tr>
                            <td align="center" valign="middle" >{{ $log->path }}</td>
                            <td align="center" valign="middle" >{{ $log->method }}</td>
                            <td align="center" valign="middle" >{{ $log->created_at }}</td>
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
    $('#tabel-logAplikasi').dataTable({
      "order": [[ 2, 'desc'  ]]
    });
</script>
<!-- /Datatables Artikel Index -->
@endsection
