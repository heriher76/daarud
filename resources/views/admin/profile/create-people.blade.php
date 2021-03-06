@extends('layouts.admin')

@section('style')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endsection

@section('content')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Tambah Profil Anggota
                    </h1>
                </div>
                <div class="body">
                    <form action="{{ url('admin/structure-organization') }}" id="willSubmit" method="POST" enctype="multipart/form-data">
              			{{ csrf_field() }}
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" placeholder="Nama" name="name" class="form-control" form="willSubmit">
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" placeholder="Email" name="email" class="form-control" form="willSubmit">
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" placeholder="Jabatan" name="title" class="form-control" form="willSubmit">
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="ttl" class="form-control" form="willSubmit" placeholder="Tempat, Tanggal Lahir">
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="religion" class="form-control" form="willSubmit" placeholder="Agama">
                            </div>
                        </div>
						
						<p>Riwayat Pendidikan</p>
                        <textarea name="schools" class="form-control my-editor" form="willSubmit">
                        	<p>
								SD : <br> 
	                        	SMP : <br>
	                        	SMA : <br>
	                        	S1 : <br>
	                        	S2 : <br>
	                        	S3 : <br>
                        	</p>
                        </textarea>
						
						<p>Pengalaman Organisasi</p>
                        <textarea name="organizations" class="form-control my-editor" form="willSubmit">
                        	
                        </textarea>
						
						<p>Pengalaman Kerja</p>
                        <textarea name="jobs" class="form-control my-editor" form="willSubmit">
                        	
                        </textarea>
						
						<p>Prestasi / Penghargaan</p>
                        <textarea name="achievements" class="form-control my-editor" form="willSubmit">
                        	
                        </textarea>
						
						<p>Deskripsi Tambahan</p>
                        <textarea name="description" class="form-control my-editor" form="willSubmit">
                        	
                        </textarea>
						
						<h3>Foto Profil</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group form-float">
		                            <input type="file" name="image" class="form-control" form="willSubmit">
		                        </div>
							</div>
						</div>
                    	<button type="submit" class="btn btn-primary m-t-15 waves-effect">Create</button>
              		</form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
  var editor_config = {
    path_absolute : "{{ url('/').'/' }}",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection