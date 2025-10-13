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
                <a href="{{ route("testimonials.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option selected>All category</option>
                            <option>Electronics</option>
                            <option>Clothes</option>
                            <option>Automobile</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" value="02.05.2021" class="form-control" />
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option selected>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                </div>
            </header>
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
                                    <a href="{{ route("testimonials.edit", $testimonial) }}"
                                        class="btn btn-sm font-sm rounded btn-info">Edit</a>
                                    <form action="{{ route("testimonials.destroy", $testimonial) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-sm font-sm btn-brand rounded">Delete</button>
                                    </form>
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
            {{ $testimonials->links() }}
        </div>
    </section>
@endsection
