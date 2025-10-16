@extends("components.layouts.admin.base")
@section("title", "$calendarEvent->title | Calendar Events")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Edit Calendar Event</h2>
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
                    <div class="">                       
                    </div>
                    <div class="card-body">
                        <form id="eventForm" action="{{ route("admin.calendar-events.update", $calendarEvent) }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">

                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title"
                                            value="{{ $calendarEvent->title }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="badge_title" class="form-label">Badge title</label>
                                        <input type="text" placeholder="Badge title" class="form-control"
                                            name="badge_title" value="{{ $calendarEvent->badge_title }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start_time" class="form-label">Start time</label>
                                        <input type="time" placeholder="inch" class="form-control" name="start_time"
                                            value="{{ $calendarEvent->start_time }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="end_time" class="form-label">End time</label>
                                        <input type="time" placeholder="inch" class="form-control" name="end_time"
                                            value="{{ $calendarEvent->end_time }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" placeholder="inch" class="form-control" name="date"
                                            value="{{ $calendarEvent->date }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea placeholder="Type here" class="form-control" name="description" id="" cols="30" rows="10"
                                            required>{{ $calendarEvent->description }}</textarea>
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
