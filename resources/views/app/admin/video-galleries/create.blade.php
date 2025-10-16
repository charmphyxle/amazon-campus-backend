@extends("components.layouts.admin.base")
@section("title", "Video Gallery")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Add Video Gallery</h2>
                    <div>
                        <button id="gallerySubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    
                    <div class="card-body">
                        <form id="galleryForm" action="{{ route("admin.video-galleries.store") }}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="url" class="form-label">URL</label>
                                        <input type="text" placeholder="url" class="form-control" name="url"
                                            value="{{ old("url") }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title"
                                            value="{{ old("title") }}" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea placeholder="Type here" class="form-control" name="description" id="" cols="30" rows="10"
                                            required>{{ old("description") }}</textarea>
                                    </div>
                                </div>
                            </div>
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
