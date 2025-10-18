@extends("components.layouts.admin.base")
@section("title")
    NewsLetter
@endsection
@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">NewsLetter List</h2>
                <p></p>
            </div>
        </div>
        <div class="card mb-4">            
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
                                <td colspan="3" align="center">No testimonial found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $newsLetters->onEachSide(env('PAGINATION_ON_EACH_SIDE'))->links() }}
        </div>
    </section>
@endsection
