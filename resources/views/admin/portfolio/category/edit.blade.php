@extends('admin.layout')

@section('content')
<section>
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit category</h6>
              </div>
            </div>
            <div class="card-body pb-4">
                <form action="{{route('admin.update.category',$cat->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="caty-add">
                        <div class="row mt-4 align-items-end">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Category name </label>
                                    <input type="text" class="form-control" name="cname" value="{{$cat->cname}}" placeholder="Enter Name" required>
                                    @error('cname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <button class="btn-success btn " type="submit">Update Now</button>
                                </div>
                            </div>
                    
                  
                        </div>
                
    
                       
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    
</section>
@endsection