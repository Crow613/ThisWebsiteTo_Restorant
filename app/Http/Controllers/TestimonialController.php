<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial($value='')
    {
      return view('testimonial.testimonial');
    }
}
