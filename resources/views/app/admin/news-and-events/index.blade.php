@extends("components.layouts.admin.base")
@section("title", "News and Events")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">News And Event List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("news-and-events.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
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
                        <th>Badge title</th>
                        <th>Start date</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($newsAndEvents as $index => $newsAndEvent)
                            <tr>
                                <td>{{ $newsAndEvents->firstItem() + $index }}</td>
                                <td>{{ $newsAndEvent->title }}</td>
                                <td>{{ $newsAndEvent->badge_title }}</td>
                                <td>{{ $newsAndEvent->start_date }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("news-and-events.edit", $newsAndEvent) }}"
                                            class="btn btn-sm font-sm rounded btn-info">Edit</a>
                                        <a href="{{ route("news-and-events.show", $newsAndEvent) }}"
                                            class="btn btn-sm font-sm rounded btn-warning">Show</a>
                                        <form action="{{ route("news-and-events.destroy", $newsAndEvent) }}" method="POST"
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
                                <td colspan="5" align="center">No testimonial found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $newsAndEvents->links() }}
        </div>
    </section>
@endsection
