<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Zoo;
use App\Requests\ReviewsFormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ReviewsController extends Controller
{
    public function createForm(): View
    {
        return view('page.review');
    }

    public function index(): JsonResponse
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }

    public function create(ReviewsFormRequest $request): JsonResponse
    {
        $zoo = Zoo::query()->where('name', '=', 'Arcadia')->first();

        $review = new Review();
        $review->zoo_id = $zoo->id;
        $review->title = $request->title;
        $review->content = $request->get('content');
        $review->author = $request->author;
        $review->rating = $request->rating;
        $review->status = 'pending';

        $review->save();

        return response()->json(['message' => 'Votre avis à bien été créé.']);
    }

}