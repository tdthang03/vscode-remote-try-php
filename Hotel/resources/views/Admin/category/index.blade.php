@extends('admin.index')
@section('title','Trang chủ')
@section('main')

<form action="" method="POST" class="form-inline" role="form">
    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>	

    <strong>{{ $message }}</strong>

    </div>

@endif
    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="email" class="form-control" id="" placeholder="Input field">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{Route('category.create')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add new</a>
</form>


<br>

<table class="table table-hover">
    <tbody>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ngày Khởi tạo</th>
            <th>Trạng Thái</th>
            <th class="text-right">Tùy chọn</th>
            <th></th>
        </tr>
    @forelse ($categories as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->created_at}}</td>
        <td>{!!$item->status ? '<span class="label label-success">Hiển thị</span>' : '<span class="label label-danger">Ẩn</span>'!!}</td>
        <td class="text-right">
            <a href="{{Route('category.edit',$item)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Sửa</a>
            
        </td>
        <td>
            <form action="{{Route('category.destroy',$item)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Xóa</button>
            </form>
        </td>
    </tr>
    @empty
        <span>Chưa có dữ liệu</span>
    @endforelse
        
    </tbody>
</table>
    <a href="{{Route('category.trash')}}" class="btn btn-primary"><i class="fa fa-trash"></i> Restore</a>
@stop()