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
              <h6 class="m-0 font-weight-bold text-primary">Add Social Link</h6>
            </div>
            <div class="card-body">
                  <!-- form start -->
            <form role="form" method="POST" action="{{ url('/admin/social/insert') }}">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Social Name*</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Social name" required="required">
                </div>
                <div class="form-group">
                  <label for="link">Social Link*</label> <span>[ enter without http or https example: facebook.com/sarovebd]</span>
                  <input type="text" class="form-control" name="link" placeholder="Enter Social Link">
                </div>

                <div class="form-group">
                  <label for="class">Icon Class *</label>
                  <input type="text" name="iclass" class="form-control" id="class" placeholder="Enter icon class" required="required">
                </div>

                <div class="form-group">
                  <label for="alt">Alternative Text </label>
                  <input type="text" name="alt" class="form-control" id="alt" placeholder="Enter alt">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
          </div>

    @endsection