<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
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