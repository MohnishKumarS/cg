<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\PortfolioGallery;
use App\Models\PortfolioCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::count();
        $portfolio = PortfolioCategory::count();
        $gallery = PortfolioGallery::count();
        return view('admin.dashboard', compact('contacts', 'portfolio', 'gallery'));
    }



    // portfolio category
    public function category()
    {
        $catList = PortfolioCategory::all();
        return view('admin.portfolio.category.index', compact('catList'));
    }

    public function store_category(Request $req)
    {
        // dd($req->input('cname'));

        $cat =  PortfolioCategory::create($req->all());

        if ($cat) {
            return redirect()->route('admin.category')->with('status', 'success')->with('title', 'Portfolio Category Added Successfully');
        } else {
            return redirect()->route('admin.category')->with('status', 'error')->with('title', 'Failed to Add Portfolio Category');
        }
    }

    public function edit_category($id)
    {
        $cat = PortfolioCategory::findOrFail($id);
        return view('admin.portfolio.category.edit', compact('cat'));
    }

    public function update_category()
    {
        $req = request();
        $cat = PortfolioCategory::findOrFail($req->id);
        $cat->update($req->all());
        return redirect()->route('admin.category')->with('status', 'success')->with('title', 'Portfolio Category Updated Successfully');
    }

    public function delete_category($id)
    {
        $category  = PortfolioCategory::findOrFail($id);
        // Retrieve and delete associated gallery images
        $galleries = PortfolioGallery::where('category_id', $id)->get();

        foreach ($galleries as $gallery) {
            // Define the path to each image
            $path = 'image/gallery/' . $gallery->image;

            // Delete the image file if it exists
            if (File::exists($path)) {
                File::delete($path);
            }

            // Delete the gallery record from the database
            $gallery->delete();
        }
        $data = $category->delete();
        if ($data) {
            return redirect()->route('admin.category')->with('status', 'success')->with('title', 'Portfolio Category Deleted Successfully');
        } else {
            return redirect()->route('admin.category')->with('status', 'error')->with('title', 'Failed to Delete Portfolio Category');
        }
    }
}
