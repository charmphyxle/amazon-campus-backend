@extends("components.layouts.admin.base")
@section("title", "Video Galleries")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Video Gallery List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("admin.video-galleries.create") }}" class="btn btn-primary btn-sm rounded">Create new</a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control" />
                    </div>
                </div>
            </header>

            <div class="card-body">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>#</th>
                        <th>URL</th>
                        <th>Title</th>
                        <th>Description</th>                        
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($videoGalleries as $index => $videoGallery)
                            <tr>
                                <td>{{ $videoGalleries->firstItem() + $index }}</td>
                                <td>{{ $videoGallery->url }}</td>
                                <td>{{ $videoGallery->title }}</td>
                                <td>{{ $videoGallery->description }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route("admin.video-galleries.edit", $videoGallery) }}"
                                            class="btn btn-sm font-sm rounded btn-info">Edit</a>                                        
                                        <form action="{{ route("admin.video-galleries.destroy", $videoGallery) }}" method="POST"
                                            class="d-inline">
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
                                <td colspan="5" align="center">No video galleries found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination-area mt-30 mb-50">
            {{ $videoGalleries->links() }}
        </div>
    </section>
@endsection
