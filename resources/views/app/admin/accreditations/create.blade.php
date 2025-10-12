@extends("components.layouts.admin.base")
@section("title", "Accreditations")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Accreditation form</h2>
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
                        <form id="galleryForm" action="{{ route("accreditations.store") }}" method="POST"
                            enctype="multipart/form-data">
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
                                <label for="title" class="form-label">Title</label>
                                <input type="text" placeholder="Type here" class="form-control" name="title"
                                    value="{{ old("title") }}" required />
                            </div>
                            <div class="mb-4">
                                <label for="badge_title" class="form-label">Badge title</label>
                                <input type="text" placeholder="Type here" class="form-control" name="badge_title"
                                    value="{{ old("badge_title") }}" required />
                            </div>
                            <div class="mb-4">
                                <label for="year" class="form-label">Year</label>
                                <input type="year" placeholder="Type here" class="form-control" name="year"
                                    value="{{ old("year") }}" required />
                            </div>
                            <div class="mb-4">
                                <div class="input-upload">
                                    <img src="assets/imgs/theme/upload.svg" alt="" />
                                    <input class="form-control" type="file" name="image" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" name="description" required>{{ old("description") }}</textarea>
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
