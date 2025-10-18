@extends("components.layouts.admin.base")
@section("title", "Gallery")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Gallery grid</h2>
                <p></p>
            </div>
            <div>
                <a href="{{ route("admin.gallery.create") }}" class="btn btn-primary btn-sm rounded">Create gallery</a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">

                    @forelse ($galleries as $gallery)
                        <div class="col">
                            <div class="card card-product-grid">
                                <a href="#" class="img-wrap"> <img
                                        src="{{ Storage::url("gallery-images/" . $gallery->images[0]->image) }}"
                                        alt="gallery" />
                                </a>
                                <div class="info-wrap">

                                    <a href="#" class="title text-truncate">{{ $gallery->title }}</a>

                                    <div class="d-flex gap-2 mt-2 justify-content-between align-items-center">
                                        <a href="{{ route("admin.gallery.edit", $gallery) }}"
                                            class="btn rounded font-sm hover-up btn-info mt-3"> <i
                                                class="material-icons md-edit"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route("admin.gallery.destroy", $gallery) }}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-md rounded font-sm hover-up mt-3">
                                                Delete
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="d-flex justify-content-center">
                        <p class="text-center">
                            No gallery found.
                        </p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="pagination-area mt-30 mb-50">
            <tr>
                {{ $galleries->onEachSide(env('PAGINATION_ON_EACH_SIDE'))->links() }}
            </tr>
        </div>
    </section>
@endsection
