@extends('admin.layout.master')
        <!-- End of Topbar -->



  @section('content')       

    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
    <a href="{{ url('/admin/portfolio') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> View Portfolio</a>
    
  </div>
<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add Portfolios</h6>
            </div>
            <div class="card-body">
                  <!-- form start -->
 {{Form::open(['methode'=>'POST', 'url' => url('/admin/portfolio/add'), 'files'=>true,])}}

              <div class="box-body">
                <div class="form-group">
                  <label for="name">Poroject Name*</label>
                    {{Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Enter project name','required'])}}
                </div>
                <div class="form-group">
                  <label for="description">Project Description*</label>
                    {{Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Enter project description','required'])}}
                </div>

                <div class="form-group">
                  <label for="link">Project link </label> <span class="help-block"> [ enter link without http or https ]</span>
                    {{Form::text('link',null,['class'=>'form-control', 'placeholder'=>'Enter project link','required'])}}
                </div>
                <div class="form-group">
                  <label for="image">Project Image</label>
                    {{Form::file('image',null,['class'=>'form-control', 'required'])}}

                  <p class="help-block">Format: jpeg, jpg, png</p>
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