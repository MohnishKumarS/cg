@extends('admin.layout')

@section('content')
<section>
    <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Create New category</h6>
              </div>
            </div>
            <div class="card-body pb-4">
                <form action="{{route('admin.store.category')}}" method="post">
                    @csrf
                    <div class="caty-add">
                        <div class="row mt-4 align-items-end">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Category name </label>
                                    <input type="text" class="form-control" name="cname" placeholder="Enter Name" required>
                                    @error('cname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="text-center">
                                    <button class="btn-success btn " type="submit">Submit Now</button>
                                </div>
                            </div>
                    
                  
                        </div>
                
    
                       
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Category List</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="text-center">
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @forelse ($catList as $val)
                    <tr class="align-middle text-center">
                        <td>
                            <span class="text-xs font-weight-bold mb-0">{{$i++}}</span>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{$val->cname}}</p>
                          </td>
                        <td class=" text-sm">
                            @if ($val->status == 1)
                            <span class="badge badge-sm bg-gradient-success">Active</span>
                            @else
                            <span class="badge badge-sm bg-gradient-secondary">disable</span>
                            @endif
                         
                        </td>
                        <td class="">
                          <a href="{{url('admin/edit-category/'.$val->id)}}" class="btn btn-info btn-sm my-2">Edit</a>
                          <a href="{{url('admin/delete-category/'.$val->id)}}" class="btn btn-danger btn-sm my-2" onclick="return confirm('Are you sure to delete this category?')">Delete</a>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="8" class="text-center text-secondary text-xs font-weight-bold">
                            <div class="py-3">
                              No category found.
                            </div>
                          </td>
                        </tr>
                    @endforelse

      

                  </tbody>
                </table>
              </div>
                <!-- Paginate -->
                {{-- <div class="paginate-pro mt-5 text-center">
                  {{ $pro->links() }}
              </div> --}}
            </div>
          </div>
        </div>
      </div>
</section>
@endsection