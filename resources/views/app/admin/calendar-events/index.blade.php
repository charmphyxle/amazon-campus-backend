@extends("components.layouts.admin.base")
@section("title", "Calendar Events")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Calendar Event List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("calendar-events.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
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
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($calendarEvents as $index => $calendarEvent)
                            <tr>
                                <td>{{ $calendarEvents->firstItem() + $index }}</td>
                                <td>{{ $calendarEvent->title }}</td>
                                <td>{{ $calendarEvent->badge_title }}</td>
                                <td>{{ $calendarEvent->start_time }}</td>
                                <td>{{ $calendarEvent->end_time }}</td>
                                <td>{{ $calendarEvent->description }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("calendar-events.edit", $calendarEvent) }}"
                                            class="btn btn-sm font-sm rounded btn-info">Edit</a>                                        
                                        <form action="{{ route("calendar-events.destroy", $calendarEvent) }}" method="POST"
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
                                <td colspan="5" align="center">No calendar event found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $calendarEvents->links() }}
        </div>
    </section>
@endsection
