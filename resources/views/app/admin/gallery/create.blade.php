@extends("components.layouts.admin.base")
@section("title", "Gallery")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Gallery form</h2>
                    <div>
                        <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label for="title" class="form-label">Gallery title</label>
                                <input type="text" placeholder="Type here" class="form-control" id="title"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category" required>
                                    <option value="Adidas"> Adidas </option>
                                    <option value="Nike"> Nike </option>
                                    <option value="Puma"> Puma </option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" name="description" required></textarea>
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
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>
                                        <button class="btn btn-md rounded font-sm hover-up">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Media</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gallery.addImages') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
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
@endsection
