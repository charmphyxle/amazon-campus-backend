@extends("components.layouts.admin.base")
@section("title", "Testomonials")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-8">
                <div class="content-header">
                    <h2 class="content-title">Testimonial form</h2>
                    <div>
                        <button id="testimonialSubmitBtn" class="btn btn-md rounded font-sm hover-up">Publish</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        <form id="testimonialForm" action="{{ route("admin.testimonials.store") }}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="row">

                                <div class="col-md-6 col-12 mb-4">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="name"
                                        value="{{ old("name") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="designation"
                                        value="{{ old("designation") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="career_before" class="form-label">Career before</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="career_before"
                                        value="{{ old("career_before") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="career_after" class="form-label">Career after</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="career_after"
                                        value="{{ old("career_after") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="class_year" class="form-label">Class year</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="class_year"
                                        value="{{ old("class_year") }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="batch" class="form-label">Batch</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="batch"
                                        value="{{ old("batch") }}" required />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="content" required>{{ old("content") }}</textarea>
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
            $('#testimonialSubmitBtn').on('click', function() {
                $('#testimonialForm').submit();
            });
        </script>
    @endPushOnce
@endsection
