@extends("components.layouts.admin.base")
@section("title", "Application Forms | Admin")
@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Application Form List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>           
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                        <select class="form-select">
                            <option selected>All category</option>
                            <option>Electronics</option>
                            <option>Clothes</option>
                            <option>Automobile</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="date" value="02.05.2021" class="form-control" />
                    </div>
                    <div class="col-md-2 col-6">
                        <select class="form-select">
                            <option selected>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                    </div>
                </div>
            </header>
            <div class="card-body">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Phone</th>                       
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($applicationForms as $applicationForm)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $applicationForm->first_name }}</td>
                                <td>{{ $applicationForm->last_name }}</td>
                                <td>{{ $applicationForm->email }}</td>
                                <td>{{ $applicationForm->phone }}</td>                                
                                <td>
                                    <a href="{{ route("application-forms.show", $applicationForm) }}"
                                        class="btn btn-sm font-sm rounded btn-info">Show</a>
                                    <form action="{{ route("application-forms.destroy", $applicationForm) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-sm font-sm btn-brand rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="6" align="center">
                                No application form found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagination-area mt-30 mb-50">
            {{ $applicationForms->links() }}
        </div>
    </section>
@endsection
