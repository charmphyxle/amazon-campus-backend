@extends("components.layouts.admin.base")
@section("title", "Application Forms | Admin")
@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Application Form List</h2>
                <p></p>
            </div>
        </div>
        <div class="card mb-4">           
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
                        @forelse ($applicationForms as $index => $applicationForm)
                            <tr>
                                <td>{{ $applicationForms->firstItem() + $index }}</td>
                                <td>{{ $applicationForm->first_name }}</td>
                                <td>{{ $applicationForm->last_name }}</td>
                                <td>{{ $applicationForm->email }}</td>
                                <td>{{ $applicationForm->phone }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("admin.application-forms.show", $applicationForm) }}"
                                            class="btn btn-sm font-sm rounded btn-info">Show</a>
                                        <form action="{{ route("admin.application-forms.destroy", $applicationForm) }}"
                                            method="POST" class="d-inline">
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
            {{ $applicationForms->onEachSide(env('PAGINATION_ON_EACH_SIDE'))->links() }}
        </div>
    </section>
@endsection
