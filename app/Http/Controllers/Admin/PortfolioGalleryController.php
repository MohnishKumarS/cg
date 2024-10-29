<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PortfolioGallery;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PortfolioGalleryController extends Controller
{
    public function gallery()
    {
        $catList = PortfolioCategory::all();
        return view('admin.portfolio.gallery.index', compact('catList'));
    }

    public function store_gallery(Request $req)
    {

        $req->validate([
            'cid' => 'required|exists:portfolio_categories,id',  // Ensure 'cname' exists in categories table
            'gallery' => 'required',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($req->hasFile('gallery')) {
            foreach ($req->file('gallery') as $file) {

                $ext = $file->getClientOriginalExtension();

                $filename = time() . '_' . uniqid() . '.' . $ext;

                $file->move('image/gallery/', $filename);

                PortfolioGallery::create([
                    'category_id' => $req->input('cid'),
                    'image' =>  $filename,
                ]);
            }
        }

        return redirect()->route('admin.gallery')->with('status', 'success')->with('title', 'Images uploaded successfully');
    }


    // list 
    public function gallery_list(Request $request)
    {
        $catList = PortfolioCategory::all();
        $query = PortfolioGallery::with('category');
        if ($request->filled('cid')) {
            $query->where('category_id', $request->cid);
        }
        
        $galleryList = $query->latest()->paginate(10);
        // return $galleryList;
        return view('admin.portfolio.gallery.list', compact('galleryList','catList'));
    }

    public function delete_gallery($id)
    {
        $profile = PortfolioGallery::findOrFail($id);
        $path =  'image/gallery/' . $profile->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $data = $profile->delete();
        if ($data) {
            return redirect()->route('admin.gallery.list')->with('status', 'success')->with('title', 'Image deleted successfully');
        } else {
            return redirect()->back()->with('status', 'error')->with('title', 'Failed to delete profile');
        }
    }
}
