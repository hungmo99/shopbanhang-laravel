@extends('admin.master')
@section('content')
@section('title','sửa danh mục')
@section('name_page','edit category')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">@yield('name_page')</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">shop bán hàng</a></li>
                            <li class="breadcrumb-item active">@yield('name_page')</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">

                <div class="col-md-6">
                    <form action="{{route('category.update',$cate->id)}}" method="POST" role="form">
                        @csrf
                        <legend>chỉnh sửa danh mục</legend>

                        <div class="form-group">
                            <label for="">tên danh mục</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Input field" value="{{$cate->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">mô tả</label>
                            <textarea type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
                                placeholder="Input field" rows="4">{{$cate->desc}}</textarea>
                            @error('desc')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="1" {{$cate->status==1?'checked':''}}>
                                hiện
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="0" {{$cate->status==0?'checked':''}}>
                                ẩn
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">thêm mới</button>
                    </form>
                </div>

            </div>


        </div>
        <!-- container-fluid -->

    </div>
    @endsection
