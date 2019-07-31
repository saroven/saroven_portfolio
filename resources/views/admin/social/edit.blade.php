@extends('admin.layout.master')
@section('content')

          

    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Social</h1>
    <a href="{{ url('/admin/social') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> View social</a>
    
  </div>
@include('common/error_and_success')
<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add Portfolios</h6>
            </div>
            <div class="card-body">
                  <!-- form start -->
              {{Form::model($social,['method'=>'post', 'role'=>'form','url'=>url('admin/social/update')])}}
              <div class="box-body">
                <div class="form-group">
                  {{Form::hidden('id', $social->id, ['class'=>'form-control'])}}
                  <label for="name">Social Name*</label>
                  {{Form::text('name', $social->title, ['class'=>'form-control', 'placeholder'=>'Enter Social name', 'required'])}}
                </div>
                <div class="form-group">
                  <label for="link">Social Link*</label> <span>[ enter without http or https example: facebook.com/sarovebd]</span>
                  {{Form::text('link', $social->link, ['class'=>'form-control', 'placeholder'=>'Enter Social link', 'required'])}}
                </div>

                <div class="form-group">
                  <label for="class">Icon Class *</label>
                  {{Form::text('iclass', $social->icon_class, ['class'=>'form-control', 'placeholder'=>'Enter Social icon class', 'required'])}}
                </div>

                <div class="form-group">
                  <label for="alt">Alternative Text </label>
                  {{Form::text('alt', $social->alt, ['class'=>'form-control', 'placeholder'=>'Enter Alternative text'])}}
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </div>
@endsection