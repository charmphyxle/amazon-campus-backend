@extends("components.layouts.admin.base")
@section("title", "Profile")

@section("content")
    <section class="content-main">
        <div class="row">

            <div class="col-12">
                <div>
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
            </div>

            <div class="col-6">
                <div class="content-header">
                    <h2 class="content-title">Profile form</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Profile Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("admin.profile.update-info") }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Type here" class="form-control" name="name"
                                    value="{{ auth()->user()->name }}" required />
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" placeholder="Type here" class="form-control" name="email"
                                    value="{{ auth()->user()->email }}" required />
                            </div>
                            <button type="submit" class="btn btn-md rounded font-sm hover-up float-end">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Password</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("admin.profile.update-password") }}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="mb-4">
                                <label for="current_password" class="form-label">Current password</label>
                                <input type="password" class="form-control" name="current_password" required />
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required />
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" required />
                            </div>
                            <button type="submit" class="btn btn-md rounded font-sm hover-up float-end">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
