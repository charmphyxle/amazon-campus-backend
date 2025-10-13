@extends("components.layouts.admin.base")
@section("title", "$newsAndEvent->first_name | News And Event")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">News And Event</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>{{ $newsAndEvent->full_name }}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Title</th>
                                    <td>{{ $newsAndEvent->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Badge title</th>
                                    <td>{{ $newsAndEvent->badge_title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Short description</th>
                                    <td>{{ $newsAndEvent->short_description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td>{{ $newsAndEvent->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Start date</th>
                                    <td>{{ $newsAndEvent->start_date ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Start time</th>
                                    <td>{{ $newsAndEvent->start_time ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">End time</th>
                                    <td>{{ $newsAndEvent->end_time ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Location</th>
                                    <td>{{ $newsAndEvent->location ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Organizer</th>
                                    <td>{{ $newsAndEvent->organizer ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact</th>
                                    <td>{{ $newsAndEvent->contact ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>{{ $newsAndEvent->phone ?? "N/A" }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Image</th>
                                    <td>
                                        @if ($newsAndEvent->image)
                                            <img src="{{ Storage::url("news-and-events/" . $newsAndEvent->image) }}"
                                                alt="" width="150">
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
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
                        <form id="eventForm" action="{{ route("news-and-events.addEventItem", $newsAndEvent) }}"
                            method="POST">
                            @csrf
                            @method("POST")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">

                                        <label for="content" class="form-label">Content</label>
                                        <input type="text" placeholder="content" class="form-control" name="content"
                                            value="{{ old("content") }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="time" class="form-label">Time</label>
                                        <input type="time" placeholder="Time" class="form-control" name="time"
                                            value="{{ old("time") }}" required />
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-md rounded font-sm hover-up float-end">Save</button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <table class="table table-responsive">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($newsAndEvent->eventItems as $index => $eventItem)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $eventItem->content }}</td>
                                <td>{{ $eventItem->time }}</td>
                                <td>
                                    <form
                                        action="{{ route("news-and-events.deleteEventItem", $eventItem) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-md rounded font-sm hover-up float-end">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" align="center">No event item found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
