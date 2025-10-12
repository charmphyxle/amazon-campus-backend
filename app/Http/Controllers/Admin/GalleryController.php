<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Image;
use App\Models\TempImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{

    public function addImages(Request $request)
    {
        $inputs = $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048' // 2MB Max
        ]);

        if ($request->has('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                Storage::disk('public')->putFileAs('temp-gallery-images', $image, $imageName);

                TempImage::create([
                    'image' => $imageName,
                ]);
            }
        }

        // toast('Images uploaded successfully!','success');
        alert()->success('SuccessAlert', 'Lorem ipsum dolor sit amet.');
        return back();
    }

    public function deleteTempImage(TempImage $tempImage)
    {
        Storage::delete('public/temp-gallery-images/' . $tempImage->image);
        $tempImage->delete();
        return back()->with('success', 'Image deleted successfully!');
    }

    public function deleteImage(Image $image)
    {
        Storage::delete('public/gallery-images/' . $image->image);
        $image->delete();
        return back()->with('success', 'Image deleted successfully!');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::with('images')->orderBy('id', 'DESC')->paginate(10);
        return view('app.admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tempImages = TempImage::all();
        return view('app.admin.gallery.create', compact('tempImages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $inputs = $request->validated();
        $tempImages = TempImage::all();

        if (!filled($tempImages)) {
            return redirect()->back()->withErrors('Please add at least one product image.');
        }

        $inputs['slug'] = Str::slug($inputs['title'], '-');
        $gallery = Gallery::create($inputs);

        if ($tempImages->isEmpty()) {
            return redirect()->back()->withErrors('Please add at least one product image.');
        }

        foreach ($tempImages as $tempProductImage) {
            Storage::disk('public')->move(
                'temp-gallery-images/' . $tempProductImage->image,
                'gallery-images/' . $tempProductImage->image
            );

            Image::create([
                'gallery_id' => $gallery->id,
                'image' => $tempProductImage->image,
            ]);
            $tempProductImage->delete();
        }

        return redirect()->back()->with('success', 'Product is added successfully.');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $tempImages = TempImage::all();
        return view('app.admin.gallery.edit', compact('gallery', 'tempImages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $inputs = $request->validated();
        $inputs['slug'] = Str::slug($inputs['title'], '-');
        $gallery->update($inputs);
        $tempImages = TempImage::all();

        if ($tempImages) {
            foreach ($tempImages as $tempProductImage) {
                Storage::disk('public')->move(
                    'temp-gallery-images/' . $tempProductImage->image,
                    'gallery-images/' . $tempProductImage->image
                );

                Image::create([
                    'gallery_id' => $gallery->id,
                    'image' => $tempProductImage->image,
                ]);
                $tempProductImage->delete();
            }
        }

        return redirect()->back()->with('success', 'Gallery is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery is deleted successfully.');
    }
}
