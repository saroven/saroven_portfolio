@extends('admin.layout.master')



@section('content')
     

    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Setting</h1>
    <a href="{{ url('/admin/settings') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> View Infirmation</a>
    
  </div>

<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">General Information</h6>
            </div>
            <div class="card-body">
                  <!-- form start -->
                  {{Form::model($info,['method'=>'post', 'files'=>true, 'role'=>'form','url'=>url('admin/settings/update')])}}
       
            
              <div class="box-body">
                <input type="hidden" value="{{ $info->id }}" name="tableid">
                <div class="form-group">
                  <label for="name">Name*</label>

                  {{Form::text('name',$info->name,['class'=>'form-control', 'placeholder'=>'Enter Name','required'])}}
                </div>
                <div class="form-group">
                  <label for="sitename">Site Name*</label>

                  {{Form::text('sitename',$info->sitename,['class'=>'form-control', 'placeholder'=>'Enter Name','required'])}}
                </div>
                
                <div class="form-group">
                  <label for="email">Email address*</label>
                  {{Form::email('email', $info->email, ['class' => 'form-control', 'placeholder'=> 'Enter Email', 'required'])}}
                </div>
            
                <div class="form-group">
                  <label for="title">Title*</label>
                  {{Form::text('title', $info->title, ['class'=>'form-control', 'placeholder'=>'Enter Title', 'required'])}}
                </div>

                <div class="form-group">
                  <label for="location">Location*</label>
                  {{Form::text('location', $info->location, ['class'=>'form-control', 'placeholder'=>'Enter Location', 'required'])}}
                </div>
            
                <div class="form-group">
                  <label for="image">Photo</label>
                  {{Form::file('image', null,['class'=>'form-control'])}}

                  <p class="help-block">Max file size: 2 MB, Format: jpeg, jpg, png</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            {{Form::close()}}
            </div>
          </div>
@endsection