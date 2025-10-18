@extends("components.layouts.admin.base")
@section("title", "Posters")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">posters List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("admin.posters.create") }}" class="btn btn-primary btn-sm rounded">Create</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>#</th>
                        <th>Image</th>                        
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($posters as $index => $poster)
                            <tr>
                                <td>{{ $posters->firstItem() + $index }}</td>
                                <td>
                                    <img src="{{ Storage::url("posters/" . $poster->image) }}"
                                        alt="poster-image.png" width="100">
                                </td>                               
                                <td>
                                    <div class="d-flex gap-2">                                       
                                        <form action="{{ route("admin.posters.destroy", $poster) }}" method="POST"
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
                                <td colspan="7" align="center">No posters found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagination-area mt-30 mb-50">
            <tr>
                {{ $posters->links() }}
            </tr>
        </div>
    </section>
@endsection
