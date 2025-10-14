@extends("components.layouts.admin.base")
@section("title", "Video Testimonials")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Video Testimonial List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("video-testimonials.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control" />
                    </div>
                </div>
            </header>

            <div class="card-body">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Video</th>
                        <th>Badge title</th>
                        <th>Start date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($videoTestimonials as $index => $videoTestimonial)
                            <tr>
                                <td>{{ $videoTestimonials->firstItem() + $index }}</td>
                                <td>{{ $videoTestimonial->title }}</td>
                                <td>
                                    <video src="{{ Storage::url('video-testimonials/' . $videoTestimonial->video) }}" height="150"></video>
                                </td>
                                <td>{{ $videoTestimonial->name }}</td>
                                <td>{{ $videoTestimonial->course }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("video-testimonials.edit", $videoTestimonial) }}"
                                            class="btn btn-sm font-sm rounded btn-info">Edit</a>                                       
                                        <form action="{{ route("video-testimonials.destroy", $videoTestimonial) }}" method="POST"
                                            class="d-inline">
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
                                <td colspan="9" align="center">No video testimonial found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $videoTestimonials->links() }}
        </div>
    </section>
@endsection
