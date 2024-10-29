@extends('admin.layout')

@section('content')
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Create Portfolio gallery</h6>
                        </div>
                    </div>
                    <div class="card-body pb-4">
                        <form action="{{ route('admin.store.gallery') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="caty-add">
                                <div class="row mt-4">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Category name </label>
                                            <select class="form-select" required name="cid">
                                                <option selected value="">Choose one</option>
                                                @forelse ($catList as $val)
                                                    <option value="{{ $val->id }}">{{ $val->cname }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @error('cid')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Image </label>
                                            <input type="file" class="form-control" name="gallery[]" multiple required>
                                            @error('gallery')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            {{-- Error for each individual file inside gallery[] --}}
                                            @foreach ($errors->get('gallery.*') as $message)
                                                <div class="text-danger">{{ $message[0] }}</div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 align-self-center">
                                        <div class="text-center">
                                            <button class="btn-success btn " type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="previewImage"></div>
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



@push('scripts')
<script>
    document.querySelector('input[name="gallery[]"]').addEventListener('change', function(e) {
        const fileInput = e.target;
        const previewContainer = document.getElementById('previewImage'); // Add an empty div for preview

        // Clear any existing previews
        previewContainer.innerHTML = '';

        Array.from(fileInput.files).forEach(file => {
            if (file.type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.maxWidth = '100px';  // Set preview size
                img.style.marginRight = '10px';  // Optional styling
                img.style.marginBottom = '10px';  // Optional styling
                previewContainer.appendChild(img);
            }
        });
    });
</script>

@endpush
