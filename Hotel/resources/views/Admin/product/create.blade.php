@extends('admin.index')
@section('title','Thêm mới phòng')
@section('main')

<div class="row">
    <div class="col-md-12">
        <form action="{{Route("product.store")}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="">Tên phòng </label>
                        <input type="text" class="form-control" id="productName" name="name" onkeyup="ChangeToSlug()">
                        @error('name')
                            <span class="help-block">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="">Đường dẫn slug </label>
                        <input type="text" class="form-control" id="slug" name="slug">
                        @error('name')
                            <span class="help-block">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
           

            

            <div class="form-group @error('name') has-error @enderror">
                <label for="">Giá phòng </label>
                <input type="text" class="form-control" id="" name="Price">
                @error('name')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group @error('name') has-error @enderror">
                <label for="">Ảnh phòng </label>
                <input type="file" class="form-control" id="" name="photo">
                @error('name')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group @error('name') has-error @enderror">
                <label for="">Ảnh mô tả  </label>
                <input type="file" class="form-control" id="" name="photos[]" multiple>
                @error('name')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group @error('name') has-error @enderror">
                <label for="">Mô tả phòng </label>
                <textarea name="description" id="editor1" rows="10" cols="80">
                    This is my textarea to be replaced with CKEditor 4.
                </textarea>
            </div>

            <div class="form-group @error('name') has-error @enderror">
                <label for="">Popular</label>
                <input type="checkbox" id="" value="1" name="stock" >
                @error('name')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>
            
            <a href=""><button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button></a>

        </form>
    </div>
</div>

@stop()
@section('custom-js')
    <script src="{{asset('asset-fe\ckeditor\ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <script language="javascript">
        function ChangeToSlug()
        {
            var productName, slug;

            //Lấy text từ thẻ input title 
            productName = document.getElementById("productName").value;

            //Đổi chữ hoa thành chữ thường
            slug = productName.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
        }
    </script>
@endsection