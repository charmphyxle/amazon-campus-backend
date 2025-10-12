@extends("components.layouts.admin.base")
@section("title", "Gallery")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-8">
                <div class="content-header">
                    <h2 class="content-title">Testimonial form</h2>
                    <div>
                        <button id="gallerySubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        <form id="galleryForm" action="{{ route("testimonials.store") }}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="row">

                                <div class="col-md-6 col-12 mb-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="name"
                                        value="{{ old("name") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="designation"
                                        value="{{ old("designation") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="career_before" class="form-label">Career before</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="career_before"
                                        value="{{ old("career_before") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="career_after" class="form-label">Career after</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="career_after"
                                        value="{{ old("career_after") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="class_year" class="form-label">Class year</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="class_year"
                                        value="{{ old("class_year") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="batch" class="form-label">Batch</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="batch"
                                        value="{{ old("batch") }}" required />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="content" required>{{ old("content") }}</textarea>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                {{-- <div class="card mb-4">
                    <div class="card-header">
                        <h4>Gallery items</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Images</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tempImages as $tempImage)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <img src="{{ Storage::url("temp-gallery-images/" . $tempImage->image) }}"
                                                alt="" width="100">
                                        </td>
                                        <td>
                                            <form action="{{ route("gallery.deleteTempImage", $tempImage) }}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btn btn-md rounded font-sm hover-up">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No images added yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Image form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("gallery.addImages") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("POST")
                            <div class="input-upload">
                                <img src="assets/imgs/theme/upload.svg" alt="" />
                                <input class="form-control" type="file" name="images[]" multiple />
                            </div>
                            <button class="btn btn-md rounded font-sm hover-up mt-3">Add images</button>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    @pushOnce("scripts")
        <script>
            $('#gallerySubmitBtn').on('click', function() {
                $('#galleryForm').submit();
            });
        </script>
    @endPushOnce
@endsection
