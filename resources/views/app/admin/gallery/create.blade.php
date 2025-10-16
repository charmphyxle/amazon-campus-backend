@extends("components.layouts.admin.base")
@section("title", "Gallery")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Gallery form</h2>
                    <div>
                        <button id="gallerySubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        <form id="galleryForm" action="{{ route("admin.gallery.store") }}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="mb-4">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <label for="title" class="form-label">Gallery title</label>
                                <input type="text" placeholder="Type here" class="form-control" name="title" value="{{ old('title') }}"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category" required>
                                    <option selected disabled>Select category</option>
                                    <option value="Adidas"> Adidas </option>
                                    <option value="Nike"> Nike </option>
                                    <option value="Puma"> Puma </option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" name="description" required >{{ old('description') }}</textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-4">
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
                                            <form action="{{ route("admin.gallery.deleteTempImage", $tempImage) }}" method="post">
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
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Image form</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("admin.gallery.addImages") }}" method="POST" enctype="multipart/form-data">
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
            </div>
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
