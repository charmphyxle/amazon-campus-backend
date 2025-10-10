@extends("components.layouts.admin.base")
@section("title", "Gallery")

@section("content")
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Gallery grid</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <a href="{{ route("gallery.create") }}" class="btn btn-primary btn-sm rounded">Create gallery</a>
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
                                        <a href="{{ route("gallery.show", $gallery) }}"
                                            class="btn rounded font-sm hover-up btn-info mt-3"> <i
                                                class="material-icons md-edit"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route("gallery.destroy", $gallery) }}" method="post">
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
                    @endforelse
                </div>
            </div>
        </div>

        <div class="pagination-area mt-30 mb-50">
            <tr>
                {{ $galleries->links() }}
            </tr>
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </section>
@endsection
