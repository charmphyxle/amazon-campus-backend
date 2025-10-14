@extends("components.layouts.admin.base")
@section("title")
    NewsLetter
@endsection
@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">NewsLetter List</h2>
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
                        <th>Email</th>
                        <th>Created at</th>
                    </thead>
                    <tbody>
                        @forelse ($newsLetters as $index => $newsLetter)
                            <tr>
                                <td>{{ $newsLetters->firstItem() + $index }}</td>
                                <td>{{ $newsLetter->email }}</td>
                                <td>{{ $newsLetter->created_at }}</td>                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" align="center">No testimonial found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $newsLetters->links() }}
        </div>
    </section>
@endsection
