@extends('layouts.master')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Brand List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

       <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="card-head row">
                    <div class="col-md-6 col-6 text-left">
                     <h5 class="card-title font-weight-bolder">Brand list</h5>
                    </div>
                    <div class="col-md-6 col-6 text-right">
                     <a href="{{route('brands.create')}}" class="btn btn-info btn-sm">
                    <i class="fas fa-plus"></i>
                        Create Brand
                    </a>
                    </div>
                </div>
                <div class="mt-5">
                	<table class="table table-border datatable text-center">
                		<thead>
                			<tr>
                				<th>Sl no</th>
                				<th>Brand Name</th>
                				<th>Action</th>
                			</tr>
                		</thead>
                		<tbody>
                			@if($brands)
                			@foreach($brands as $brand)
                			<tr>
                				<td>{{$loop->iteration}}</td>
                				<td>{{$brand->brand_name ?? ''}}</td>
                				<td>
                					<a href="{{route('brands.edit',$brand->id)}}"class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i> Edit</a>

                          <a href="javascript:;"class="btn btn-sm btn-danger sa-delete"data-form-id="brand-delete-{{$brand->id}}"><i class="fas fa-trash"></i> delete</a>

                          <form id="brand-delete-{{$brand->id}}"action="{{route('brands.destroy',$brand->id)}}"method="post">
                            @csrf
                            @method('DELETE')

                          </form>
                				</td>
                			</tr>
                			@endforeach
                			@endif
                		</tbody>
                	</table>
              </div>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

