<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \AshAllenDesign\ShortURL\Classes\Builder;

class ShortURLController extends Controller
{
    public function generateShortURL(Request $request)
    {
        $destinationURL = $request->input('destination-url');

        $builder = new Builder();

        $shortURLObject = $builder->destinationUrl($destinationURL)->urlKey('custom-key')->make();
        $shortURL = $shortURLObject->default_short_url;

        // Use or store the $shortURL as needed.
        return "Short URL: $shortURL";
    }
}
