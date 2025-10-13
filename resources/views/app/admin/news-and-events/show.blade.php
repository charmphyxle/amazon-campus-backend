@extends("components.layouts.admin.base")
@section("title", "$newsAndEvent->first_name | News And Event")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">News And Event</h2>
                </div>
            </div>
            <div class="col-lg-6">
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
                                                alt="" width="150" >
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
