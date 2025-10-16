@extends("components.layouts.admin.base")
@section("title", "Posters")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Poster form</h2>
                    <div>
                        <button id="posterSubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
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
                        <form id="posterForm" action="{{ route("admin.posters.store") }}" method="POST"
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
                                <div class="input-upload">
                                    <img src="{{ asset("imgs/theme/upload.svg") }}" alt="" />
                                    <input class="form-control" type="file" name="image" required />
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
            $('#posterSubmitBtn').on('click', function() {
                $('#posterForm').submit();
            });
        </script>
    @endPushOnce
@endsection
