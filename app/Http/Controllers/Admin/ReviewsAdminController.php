<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Zoo;
use App\Requests\ReviewsFormRequest;
use Exception;
use Illuminate\Http\JsonResponse;

class ReviewsAdminController extends Controller
{
    /**
     *
     * @throws Exception
     */
    public function index(): JsonResponse
    {
        $reviews = Review::all();

        if (!$reviews) {
            throw new Exception("Aucun avis trouvé.", 404);
        }
        return response()->json(Review::all());
    }

    public function show(int $id): JsonResponse
    {
        $reviews = Review::query()->find($id)->first();
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

    public function update(ReviewsFormRequest $request, int $id): void
    {
        $review = Review::query()->find($id);

        $review->status = $request->status;
    }

    public function delete(int $id): JsonResponse
    {
        $review = Review::query()->where('id','=', $id)->first();
        $review->delete();

        return response()->json(['status' => 'success']);
    }

}
