@extends("components.layouts.admin.base")
@section("title")
    Testimonials
@endsection
@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Testimonial List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("admin.testimonials.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">           
            <div class="card-body">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Designation</th>
                        <th>Career before</th>
                        <th>Career after</th>
                        <th>Class year</th>
                        <th>Batch</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $index => $testimonial)
                            <tr>
                                <td>{{ $testimonials->firstItem() + $index }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->content }}</td>
                                <td>{{ $testimonial->designation }}</td>
                                <td>{{ $testimonial->career_before }}</td>
                                <td>{{ $testimonial->career_after }}</td>
                                <td>{{ $testimonial->class_year }}</td>
                                <td>{{ $testimonial->batch }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("admin.testimonials.edit", $testimonial) }}"
                                        class="btn btn-sm font-sm rounded btn-info">Edit</a>
                                        <form action="{{ route("admin.testimonials.destroy", $testimonial) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-sm font-sm btn-brand rounded">Delete</button>
                                    </form>
                                </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" align="center">No testimonial found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $testimonials->onEachSide(env('PAGINATION_ON_EACH_SIDE'))->links() }}
        </div>
    </section>
@endsection
