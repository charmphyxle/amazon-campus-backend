@extends("components.layouts.admin.base")
@section("title", "News and Events")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Edit News And Event</h2>
                    <div>
                        <button id="eventSubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
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
                        <form id="eventForm" action="{{ route("admin.news-and-events.update", $newsAndEvent) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">

                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title"
                                            value="{{ $newsAndEvent->title }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="badge_title" class="form-label">Badge title</label>
                                        <input type="text" placeholder="Badge title" class="form-control"
                                            name="badge_title" value="{{ $newsAndEvent->badge_title }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start_time" class="form-label">Start time</label>
                                        <input type="time" placeholder="inch" class="form-control" name="start_time"
                                            value="{{ $newsAndEvent->start_time }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="end_time" class="form-label">End time</label>
                                        <input type="time" placeholder="inch" class="form-control" name="end_time"
                                            value="{{ $newsAndEvent->end_time }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start_date" class="form-label">Start date</label>
                                        <input type="date" placeholder="inch" class="form-control" name="start_date"
                                            value="{{ $newsAndEvent->start_date }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" placeholder="Location" class="form-control" name="location"
                                            value="{{ $newsAndEvent->location }}" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="organizer" class="form-label">Organizer</label>
                                        <input type="text" placeholder="Organizer" class="form-control" name="organizer"
                                            value="{{ $newsAndEvent->organizer }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input type="email" placeholder="Contact" class="form-control" name="contact"
                                            value="{{ $newsAndEvent->contact }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" placeholder="Phone" class="form-control" name="phone"
                                            value="{{ $newsAndEvent->phone }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="input-upload">
                                            <img src="{{ asset("imgs/theme/upload.svg") }}" alt="" />
                                            <input class="form-control" type="file" name="image" />
                                        </div>
                                        <div class="">
                                            <img src="{{ Storage::url("news-and-events/" . $newsAndEvent->image) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="short_description" class="form-label">Short description</label>
                                        <textarea placeholder="Type here" class="form-control" name="short_description" id="" cols="30"
                                            rows="10" required>{{ $newsAndEvent->short_description }}"</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea placeholder="Type here" class="form-control" name="description" id="" cols="30"
                                            rows="10" required>{{ $newsAndEvent->description }}"</textarea>
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
            $('#eventSubmitBtn').on('click', function() {
                $('#eventForm').submit();
            });
        </script>
    @endPushOnce
@endsection
