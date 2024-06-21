@extends('admin.index')
@section('title','Cập nhật danh mục')
@section('main')

<div class="row">
    <div class="col-md-4">
        <form action="{{Route("category.update",$category)}}" method="POST" role="form">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
            <div class="form-group @error('name') has-error @enderror">
                <label for="">Tên danh mục </label>
                <input type="text" class="form-control" id="" name="name" value="{{old('name') ? old('name') :$category->name}}">
                @error('name')
                    <span class="help-block">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Trạng thái </label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="input" value="1" {{$category->status ? 'checked' : ""}}/>
                        Hiển thị
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="input" value="0"  {{!$category->status? 'checked' : ""}}/>
                        Ẩn
                    </label>
                </div>

            </div>

            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>

        </form>
    </div>
</div>


@stop()