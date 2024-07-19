<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        //$reviews = Review::all(); // get all reviews from db

        $reviews = Review::paginate(10); //pagination

        return view('reviews.index', compact('reviews'));
    }
}
