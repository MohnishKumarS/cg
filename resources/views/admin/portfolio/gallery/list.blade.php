@extends('admin.layout')


@section('content')
    <section>

        {{-- filter --}}
        <div class="filter-cat">
          <form action="" method="get">
            <div class="row  align-items-center">
              <div class="col-lg-4">
                  <div class="mb-3">
                      <label class="form-label">Category name </label>
                      <select class="form-select" required name="cid">
                          <option {{ request('cid') == '' ? 'selected' : '' }} value="">Choose one</option>
                          @forelse ($catList as $val)
                              <option value="{{ $val->id }}" {{ request('cid') == $val->id ? 'selected' : '' }}>{{ $val->cname }}</option>
                          @empty
                          <option value="">No categories available</option>
                          @endforelse
                      </select>
             
                  </div>
              </div>
              <div class="col-lg-4">
                  <div>
                    <button type="submit" class="btn btn-success mb-0">Filter</button>
                    <a href="{{URL::current()}}" class="text-danger ms-3">Clear</a>
                  </div>
              </div>
          </div>
          </form>
        </div>
   

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Gallery List</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#
                                        </th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name
                                        </th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @forelse ($galleryList as $val)
                                        <tr class="align-middle text-center">
                                            <td>
                                                <span class="text-xs font-weight-bold mb-0">{{ $i++ }}</span>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $val->category->cname }}</p>
                                            </td>
                                            <td class=" text-sm">
                                                <div>
                                                    <img src="{{ asset('image/gallery/' . $val->image) }}" class="img-fluid"
                                                        width="120" alt="gallery-image">
                                                </div>

                                            </td>
                                            <td class="">
                                                <a href="{{ url('admin/delete-gallery/' . $val->id) }}"
                                                    class="btn btn-danger btn-sm my-2"
                                                    onclick="return confirm('Are you sure to delete this image?')">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center text-secondary text-xs font-weight-bold">
                                                <div class="py-4">
                                                    No image found.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                        <!-- Paginate -->
                        <div class="paginate-pro mt-5 text-center">
                            {{ $galleryList->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
