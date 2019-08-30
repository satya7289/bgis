<?php

namespace App\Http\Controllers;

use App\Image;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }

    public function create($page_id)
    {
        return view('admin.seo.imageCreate',[
            'name' => 'adminImageCreate',
            'pageTitle' => 'Add New | News and Events',
            'page_id' => $page_id,
        ]);
    }

    public function store(Request $request, $page_id)
    {
        $this->validate($request, [
            'title'=>'required|max:200',
            'path'=>'required',
            'alt'=>'required|max:300',
        ]);
        $img = new Image();
        $img->path = request('path');
        $img->title = request('title');
        $img->alt = request('alt');

        $page = Page::find($page_id);
        $page->image()->save($img);

        return redirect('/admin/pages/'.$page->id.'')->with('flash_message', 'Image Added Successfully');
    }

    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.seo.imageEdit',[
            'image' => $image,
        ]);
    }
    public function update(Request $request, $id)
    {
        $i = Image::find($id);
        $i->title = request('title');
        $i->path = request('path');
        $i->alt = request('alt');
//        dd($i->title);
        $page = $i->page;
        $page->image()->save($i);

        return redirect('/admin/pages/'.$page->id.'')->with('message','Success');

    }

    // function for creating several images for one page
    public static function createAndSaveImages($images, $page_info)
    {
        foreach ($images as $image)
        {
            $temp = new Image(['path'=>$image]);
            $page_info->image()->save($temp);
        }
//        dd($images,$page_info,$page_info->image);
        return ;
    }


    // function to find the index of images
    public static function findIndex($images, $path)
    {
//        dd('inFindIndex');
        $index =0;
        foreach ($images as $image)
        {
            if ($image->path == $path) return $index;
            $index = $index + 1;
        }
        return -1;
    }
}
