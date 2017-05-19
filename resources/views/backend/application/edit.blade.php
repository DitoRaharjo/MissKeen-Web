@extends('backend.template')

@section('custom_css')
<!-- Untuk Hover Foto -->
<style type="text/css">
  .hovereffect {
  width:100%;
  height:100%;
  float:left;
  overflow:hidden;
  position:relative;
  text-align:center;
  cursor:default;
  }

  .hovereffect .overlay {
  width:100%;
  height:100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  opacity:0;
  background-color:rgba(0,0,0,0.5);
  -webkit-transition:all .4s ease-in-out;
  transition:all .4s ease-in-out
  }

  .hovereffect img {
  display:block;
  position:relative;
  -webkit-transition:all .4s linear;
  transition:all .4s linear;
  }

  .hovereffect h2 {
  text-transform:uppercase;
  color:#fff;
  text-align:center;
  position:relative;
  font-size:17px;
  background:rgba(0,0,0,0.6);
  -webkit-transform:translatey(-100px);
  -ms-transform:translatey(-100px);
  transform:translatey(-100px);
  -webkit-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out;
  padding:10px;
  }

  .hovereffect a.info {
  text-decoration:none;
  display:inline-block;
  text-transform:uppercase;
  color:#fff;
  border:1px solid #fff;
  background-color:transparent;
  opacity:0;
  filter:alpha(opacity=0);
  -webkit-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out;
  margin:50px 0 0;
  padding:7px 14px;
  }

  .hovereffect a.info:hover {
  box-shadow:0 0 5px #fff;
  }

  .hovereffect:hover img {
  -ms-transform:scale(1.2);
  -webkit-transform:scale(1.2);
  transform:scale(1.2);
  }

  .hovereffect:hover .overlay {
  opacity:1;
  filter:alpha(opacity=100);
  }

  .hovereffect:hover h2,.hovereffect:hover a.info {
  opacity:1;
  filter:alpha(opacity=100);
  -ms-transform:translatey(0);
  -webkit-transform:translatey(0);
  transform:translatey(0);
  }

  .hovereffect:hover a.info {
  -webkit-transition-delay:.2s;
  transition-delay:.2s;
  }
</style>
<!-- Untuk Hover Foto -->

<!-- Untuk Hide Upload -->
<style type="text/css">
#upload_link{
  text-decoration:none;
}
#upload{
  display:none
}
</style>
<!-- Untuk Hide Upload -->
@endsection

@section('content')
<div class="right_col" role="main">
        <div class="">

          @if(count($errors)>0)
          <div class="x_panel">
            <h2><font size="5" color="red"><b>Maaf data gagal disimpan, berikut error yang terjadi : </b></font></h2>
            <ul>
              @foreach($errors->all() as $error)
                <li><font size="3">{{ $error }}</font></li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="page-title">
            <div class="title_left">
              <h3>Profile Aplikasi</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="x_panel">
                <div class="x_title">
                  <h2>Profile Aplikasi <small>Keterangan Lengkap aplikasi</small></h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                    <form id="demo-form4" action="{{ route('back.aplikasi.updatefoto', $aplikasi->id) }}" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                      {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="profile_img">
                      <!---------------------------------------------------------- PROFILE PICTURE --------------------->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="hovereffect">
                            @if( $aplikasi->image == NULL)
                              <img id="blah" class="img-responsive avatar-view" src="{{ asset('uploads/ApplicationImage/defaultprofile.png') }}" alt="Avatar" title="Change the avatar">
                            @else
                              <img id="blah" class="img-responsive avatar-view" src="{{ asset('uploads/ApplicationImage/'.$aplikasi->image) }}" alt="Avatar" title="Change the avatar">
                            @endif
                            <div class="overlay">
                               <h2>Ganti Icon Aplikasi</h2>
                               <input id="upload" type="file" accept="image/png, image/jpeg, image/gif" name="image" onchange="readURL(this);">
                               <a id="upload_link" class="info" href="#">pilih icon</a>
                            </div>
                        </div>
                      </div>
                    </div>

                  </form>

                  </br>

                    <h1>{{ $aplikasi->app_name }}</h1>

                  </br>

                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>Detail Aplikasi</h2>
                      </div>
                    </div>

                  </br>
                  </br>

                  <form id="demo-form2" action="{{ route('back.aplikasi.update', $aplikasi->id) }}" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                  <input type="hidden" name="_method" value="PATCH">

                  <!-------------------------------------------------------------------KATEGORI INDEX--------------------------->
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama
                    </label>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                      <input type="text" name="app_name" id="app_name" required="required" class="form-control col-md-7 col-xs-12" value="{{ $aplikasi->app_name }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status </label>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                      <p>
                        @if($aplikasi->status == 1)
                          Live &nbsp &nbsp &nbsp &nbsp <input type="radio" class="flat" name="status" id="aktif" value="1" checked="" required="" />
                          &nbsp &nbsp &nbsp Development &nbsp &nbsp &nbsp<input type="radio" class="flat" name="status" id="nonaktif" value="0" required="" />
                        @else
                          Live &nbsp &nbsp &nbsp &nbsp <input type="radio" class="flat" name="status" id="aktif" value="1" required="" />
                          &nbsp &nbsp &nbsp Development &nbsp &nbsp &nbsp<input type="radio" class="flat" name="status" id="nonaktif" value="0" checked required="" />
                        @endif
                      </p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Website
                    </label>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                      <input type="text" id="app_website" name="app_website" class="form-control col-md-7 col-xs-12" value="{{ $aplikasi->app_website }}">
                    </div>
                  </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori
                      </label>
                      <div class="col-md-8 col-sm-6 col-xs-12">
                        <select class="select2_kategori form-control" name="category_id" required="">
                          @foreach($semuaKategori as $kategori)
                            @if($kategori->id == $aplikasi->category_id)
                              <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                            @endif
                          @endforeach
                          @foreach($semuaKategori as $kategori)
                            @if($kategori->id != $aplikasi->category_id)
                              <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">API Key
                    </label>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                      <div class="input-group" data-toggle="tooltip" data-placement="top" title="Jagalah kerahasiaan API Key anda, lakukan refresh jika API Key anda sudah dirasa tidak aman">
                        <input type="text" class="form-control" disabled="" value="{{ $aplikasi->token }}">
                        <span class="input-group-btn">
                          <a id="refresh-btn" href="#" customParam="{{ route('back.aplikasi.updateApiKey', $aplikasi->id) }}" type="button" class="btn btn-primary">Refresh</a>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="ln_solid"></div>

                  <div class="form-group">
                    <div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-3">
                      <a href="{{ route('back.aplikasi.index') }}" class="btn btn-warning"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
                      <button type="submit" class="btn btn-success"><span class="fa fa-edit m-right-xs"></span> Simpan Perubahan Profile</button>
                    </div>
                  </div>

                </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('custom_script')
<!-- Script SweetAlert Konfirmasi Refresh API Key -->
<script>
    var deleter = {

        linkSelector : "a#refresh-btn",

        init: function() {
            $(this.linkSelector).on('click', {self:this}, this.handleClick);
        },

        handleClick: function(event) {
            event.preventDefault();

            var self = event.data.self;
            var link = $(this);

        swal({
            title: 'Perbaharui API Key?',
            text: "API Key aplikasi akan diperbaharui!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Perbaharui',
            cancelButtonText: 'Batal',
            confirmButtonClass: 'btn btn-warning btn-lg',
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
                'API Key batal untuk diperbaharui',
                'error'
              )
            }
          })
        },
    };

    deleter.init();
</script>
<!-- Script SweetAlert Konfirmasi Refresh API Key -->

<!-- Select2 -->
<script>
  $(document).ready(function() {
    $(".select2_kategori").select2({
      placeholder: "Pilih kategori aplikasi",
      allowClear: false
    });
  });
</script>
<!-- /Select2 -->

<!-- Upload Foto habis di pilih -->
<script>
document.getElementById("upload").onchange = function() {
    document.getElementById("demo-form4").submit();
};
</script>
<!-- Upload Foto habis di pilih -->

<!-- Upload Foto -->
<script>
$(function(){
$("#upload_link").on('click', function(e){
  e.preventDefault();
  $("#upload:hidden").trigger('click');
});
});
</script>
<!-- Upload Foto -->

<!-- Preview Upload -->
<script>
function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#blah')
                   .attr('src', e.target.result)
                   .width(256)
                   .height(256);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }
  </script>
<!-- Preview Upload -->
@endsection
