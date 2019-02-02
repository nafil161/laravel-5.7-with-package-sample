<?php

namespace App\Http\Controllers\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;

class ImageInterventionController extends Controller
{
    public function resize_with_type()
    {
    	$img = Image::make(public_path('/img/rolls-royce-ghost.jpg'))->resize(800, 600);
    	// paste another image
		$img->insert(public_path('/img/rolls300-200.jpg'));
	    return $img->response('jpg');
    }

    public function watermark()
    {
    	$img = Image::make(public_path('/img/rolls-royce-ghost.jpg'))->resize(800, 600);
    	// water mark
    	$img->text('Techblaze Solution Watermark', 220, 100);
		return $img->response('jpg');
    }
}
