@extends("components.layouts.admin.base")
@section("title", "Video Testimonials")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Video Testimonial List</h2>
                <p></p>
            </div>
            <div>
                <a href="{{ route("admin.video-testimonials.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Video</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($videoTestimonials as $index => $videoTestimonial)
                            <tr>
                                <td>{{ $videoTestimonials->firstItem() + $index }}</td>
                                <td>{{ $videoTestimonial->title }}</td>

                                <td align="center">
                                    <div class="w-50">
                                        <video id="player-{{ $videoTestimonial->id }}" class="plyr__video-embed" playsinline
                                            controls>
                                            <source
                                                src="{{ Storage::url("video-testimonials/" . $videoTestimonial->video) }}"
                                                type="video/mp4" />
                                            Your browser doesn’t support HTML5 video.
                                        </video>
                                        @push("scripts")
                                            <script>
                                                new Plyr('#player-{{ $videoTestimonial->id }}');
                                            </script>
                                        @endPush
                                    </div>
                                </td>
                                <td>{{ $videoTestimonial->name }}</td>
                                <td>{{ $videoTestimonial->course }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("admin.video-testimonials.edit", $videoTestimonial) }}"
                                            class="btn btn-sm font-sm rounded btn-info">Edit</a>
                                        <form action="{{ route("admin.video-testimonials.destroy", $videoTestimonial) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit"
                                                class="btn btn-sm font-sm btn-brand rounded">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" align="center">No video testimonial found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $videoTestimonials->onEachSide(env('PAGINATION_ON_EACH_SIDE'))->links() }}
        </div>
    </section>
@endsection
