@extends('layouts.master')

@section('content')

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sizes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Size Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Edit Size</h5>

                <div class="mt-3">
                <form role="form" action="{{route('sizes.update',$sizes->id)}}" method="post">
                	@csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" id="size" name="size" value="{{$sizes->size}}" >
                    @if($errors->has('size'))
                    <span class="text-danger">{{$errors->first('size')}}</span>
                    @endif
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm"> <i class="fas fa-save"></i> Update</button>
                </div>
              </form>
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
