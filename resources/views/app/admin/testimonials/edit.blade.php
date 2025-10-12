@extends("components.layouts.admin.base")
@section("title", "$testimonial->name | Testomonials")

@section("content")
    <section class="content-main">
        <div class="row">
            <div class="col-8">
                <div class="content-header">
                    <h2 class="content-title">Testimonial edit form</h2>
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
                        <form id="testimonialForm" action="{{ route("testimonials.update", $testimonial) }}" method="POST">
                            @csrf
                            @method("PUT")
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
                                        value="{{ $testimonial->name }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="designation"
                                        value="{{ $testimonial->designation }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="career_before" class="form-label">Career before</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="career_before"
                                        value="{{ $testimonial->career_before }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="career_after" class="form-label">Career after</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="career_after"
                                        value="{{ $testimonial->career_after }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="class_year" class="form-label">Class year</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="class_year"
                                        value="{{ $testimonial->class_year }}" required />
                                </div>
                                <div class="col-md-6 col-12 mb-4">
                                    <label for="batch" class="form-label">Batch</label>
                                    <input type="text" placeholder="Type here" class="form-control" name="batch"
                                        value="{{ $testimonial->batch }}" required />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="content" required>{{ $testimonial->content }}</textarea>
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
