@extends("components.layouts.admin.base")
@section("title", "$videoTestimonial->title | Video Testimonials")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Edit Video Testimonial</h2>
                    <div>
                        <button id="testimonialSubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
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
                    <div class="">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form id="testimonialForm" action="{{ route("admin.video-testimonials.update", $videoTestimonial) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">

                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title"
                                            value="{{ $videoTestimonial->title }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" placeholder="Name" class="form-control" name="name"
                                            value="{{ $videoTestimonial->name }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="course" class="form-label">Course</label>
                                        <input type="text" placeholder="course" class="form-control" name="course"
                                            value="{{ $videoTestimonial->course }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="input-upload">
                                            <img src="{{ asset("imgs/theme/upload.svg") }}" alt="" />
                                            <input class="form-control" type="file" name="video" />
                                        </div>
                                        <video id="player" class="plyr__video-embed" playsinline controls>
                                            <source
                                                src="{{ Storage::url("video-testimonials/" . $videoTestimonial->video) }}"
                                                type="video/mp4" />
                                            Your browser doesn’t support HTML5 video.
                                        </video>
                                        @pushOnce("scripts")
                                            <script>
                                                const player = new Plyr('#player');
                                            </script>
                                        @endPushOnce

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
            $('#testimonialSubmitBtn').on('click', function() {
                $('#testimonialForm').submit();
            });
        </script>
    @endPushOnce
@endsection
