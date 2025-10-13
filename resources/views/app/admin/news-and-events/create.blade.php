@extends("components.layouts.admin.base")
@section("title", "News and Events")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Add News And Event</h2>
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
                        <form id="eventForm" action="{{ route("news-and-events.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("POST")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">

                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" placeholder="Title" class="form-control" name="title"
                                            value="{{ old("title") }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="badge_title" class="form-label">Badge title</label>
                                        <input type="text" placeholder="Badge title" class="form-control"
                                            name="badge_title" value="{{ old("badge_title") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start_time" class="form-label">Start time</label>
                                        <input type="time" placeholder="inch" class="form-control" name="start_time"
                                            value="{{ old("start_time") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="end_time" class="form-label">End time</label>
                                        <input type="time" placeholder="inch" class="form-control" name="end_time"
                                            value="{{ old("end_time") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="start_date" class="form-label">Start date</label>
                                        <input type="date" placeholder="inch" class="form-control" name="start_date"
                                            value="{{ old("start_date") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" placeholder="Location" class="form-control" name="location"
                                            value="{{ old("location") }}"  required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="organizer" class="form-label">Organizer</label>
                                        <input type="text" placeholder="Organizer" class="form-control" name="organizer"
                                            value="{{ old("organizer") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="contact" class="form-label">Contact</label>
                                        <input type="email" placeholder="Contact" class="form-control" name="contact"
                                            value="{{ old("contact") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" placeholder="Phone" class="form-control" name="phone"
                                            value="{{ old("phone") }}"  required/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="input-upload">
                                            <img src="assets/imgs/theme/upload.svg" alt="" />
                                            <input class="form-control" type="file" name="image" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="short_description" class="form-label">Short description</label>
                                        <textarea placeholder="Type here" class="form-control" name="short_description" id="" cols="30"
                                            rows="10" required>{{ old("short_description") }}"</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea placeholder="Type here" class="form-control" name="description" id="" cols="30"
                                            rows="10" required>{{ old("description") }}"</textarea>
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
