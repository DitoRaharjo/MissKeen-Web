@extends('backend.template')

@section('content')
<!-- page content -->
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Daftar Aplikasi </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Tabel Aplikasi <small>Daftar aplikasi</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('back.aplikasi.create') }}" class="btn btn-success"><label class="fa fa-plus-circle"></label>  Tambah Aplikasi</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="tabel-aplikasi" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th align="center">Nama Aplikasi</th>
                          <th align="center">Status</th>
                          <th align="center">Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($semuaAplikasi as $aplikasi)
                          @if( $aplikasi->deleted_at == NULL)
                          <tr>
                            <td valign="middle" >{{ $aplikasi->app_name }}</td>
                            <td valign="middle" >
                            @if( $aplikasi->status == 1 )
                              Live
                            @elseif( $aplikas->status == 0 )
                              Development
                            @endif
                            </td>

                            <td align="center" valign="middle">
                              <a class="btn btn-warning btn-xs" href="{{ route('back.aplikasi.edit', $aplikasi->id) }}"><span class="fa fa-search"></span> Edit</a>
                              <a id="delete-btn" class="btn btn-danger btn-xs" customParam="{{ route('back.aplikasi.destroy', $aplikasi->id) }}" href="#"><span class="fa fa-trash"></span> Hapus</a>
                            </td>
                          </tr>
                          @endif
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
<!-- Script SweetAlert Konfirmasi Hapus -->
<script>
    var deleter = {

        linkSelector : "a#delete-btn",

        init: function() {
            $(this.linkSelector).on('click', {self:this}, this.handleClick);
        },

        handleClick: function(event) {
            event.preventDefault();

            var self = event.data.self;
            var link = $(this);

        swal({
            title: 'Hapus Data',
            text: "Apakah anda yakin ingin menghapus aplikasi ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            confirmButtonClass: 'btn btn-success btn-lg',
            cancelButtonClass: 'btn btn-danger btn-lg',
            buttonsStyling: false
          }).then(function () {
              window.location = link.attr('customParam');
          }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
              swal(
                'Batal',
                'Aplikasi batal untuk dihapus',
                'error'
              )
            }
          })
        },
    };

    deleter.init();
</script>
<!-- Script SweetAlert Konfirmasi Hapus -->

<!-- Datatables Artikel Index -->
<script>
    $('#tabel-aplikasi').dataTable();
</script>
<!-- /Datatables Artikel Index -->
@endsection
