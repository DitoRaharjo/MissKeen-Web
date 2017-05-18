@extends('backend.template')

@section('custom_css')
<!-- Preview Upload Image -->
  <style type="text/css">
    .container{
      margin-top:20px;
    }
    .image-preview-input {
      position: relative;
      overflow: hidden;
      margin: 0px;
      color: #333;
      background-color: #fff;
      border-color: #ccc;
    }
    .image-preview-input input[type=file] {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
    }
    .image-preview-input-title {
      margin-left:2px;
    }
  </style>
<!-- Preview Upload Image -->
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tambah Aplikasi Baru</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-md-12 col-sm-12 col-xs-12">
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

      <div class="x_panel">
        <!------------------------------------------FORM INPUT DATA-------------->
        <form name="formCreateAplikasi" action="{{ route('back.aplikasi.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
          {{ csrf_field() }}
        <div class="x_title"> <!-------------------------------------------------------FORM ARTIKEL---------------------------->
          <h2>Form Aplikasi <small>Detail-detail aplikasi</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Aplikasi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="app_name" class="form-control" placeholder="Nama Aplikasi" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori Aplikasi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="select2_kategori form-control" required="" name="category_id">
                  <option></option>
                  @foreach($semuaKategori as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Website Aplikasi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="app_website" class="form-control" placeholder="Website Aplikasi" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Icon Aplikasi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="input-group image-preview" data-original-title="" title="">
                    <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                    <span class="input-group-btn">
                        <!-- image-preview-clear button -->
                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                            <span class="glyphicon glyphicon-remove"></span> Clear
                        </button>
                        <!-- image-preview-input -->
                        <div class="btn btn-default image-preview-input">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="image-preview-input-title">Browse</span>
                            <input type="file" accept="image/png, image/jpeg, image/gif" name="image" required=""> <!-- rename it -->
                        </div>
                    </span>
                </div><!-- /input-group image-preview [TO HERE]-->
              </div>
            </div>

          <div class="x_title">
            <div class="clearfix"></div>
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">

          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 form-group">

          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <a class="btn btn-primary btn-lg" href="{{ Route('back.aplikasi.index') }}">Batal</a>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
              <button type="submit" class="btn btn-success btn-lg">Simpan</button>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 form-group">

          </div>
        </form> <!--------------------------------------------------------------------------------PENUTUP FORM------------------>
        </div>




      </div> <!---------------------------------------------DIV CONTENT---------------------------->
    </div>

  </div>
</div>
<!-- /page content -->
@endsection

@section('custom_script')
<!-- Select2 -->
<script>
  $(document).ready(function() {
    $(".select2_kategori").select2({
      placeholder: "Pilih kategori",
      allowClear: false
    });
  });
</script>
<!-- /Select2 -->

<!-- Preview uploadedimage -->
<script>
$(document).on('click', '#close-preview', function(){
  $('.image-preview').popover('hide');
  // Hover befor close the preview
  $('.image-preview').hover(
      function () {
         $('.image-preview').popover('show');
      },
       function () {
         $('.image-preview').popover('hide');
      }
  );
});

$(function() {
  // Create the close button
  var closebtn = $('<button/>', {
      type:"button",
      text: 'x',
      id: 'close-preview',
      style: 'font-size: initial;',
  });
  closebtn.attr("class","close pull-right");
  // Set the popover default content
  $('.image-preview').popover({
      trigger:'manual',
      html:true,
      title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
      content: "There's no image",
      placement:'bottom'
  });
  // Clear event
  $('.image-preview-clear').click(function(){
      $('.image-preview').attr("data-content","").popover('hide');
      $('.image-preview-filename').val("");
      $('.image-preview-clear').hide();
      $('.image-preview-input input:file').val("");
      $(".image-preview-input-title").text("Browse");
  });
  // Create the preview image
  $(".image-preview-input input:file").change(function (){
      var img = $('<img/>', {
          id: 'dynamic',
          width:250,
          height:200
      });
      var file = this.files[0];
      var reader = new FileReader();
      // Set preview image into the popover data-content
      reader.onload = function (e) {
          $(".image-preview-input-title").text("Change");
          $(".image-preview-clear").show();
          $(".image-preview-filename").val(file.name);
          img.attr('src', e.target.result);
          $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
      }
      reader.readAsDataURL(file);
  });
});
</script>
<!-- Preview uploadedimage -->
@endsection
