<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Requests\ReviewsFormRequest;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class ReviewsAdminController extends Controller
{
    /**
     *
     * @throws Exception
     */
    public function index(): View|RedirectResponse
    {
        if (Gate::denies('update', Review::class)) {
            return redirect()->route('reviews.list');
        }

        $reviews = Review::all();

        if (!$reviews) {
            throw new Exception("Aucun avis trouvé.", 404);
        }
        $reviewsData = [];
        foreach ($reviews as $review) {
            $reviewsData[] = [
                'author' => $review->author,
                'content' => $review->content,
                'rating' => $review->rating,
                'created_at' => Carbon::createFromTimestamp($review->created_at)->format('d-m-Y'),
                'status' => $review->status,
            ];
        }

        return view('admin.zoo.reviews.reviews-list', compact('reviewsData'));
    }

    public function update(ReviewsFormRequest $request, int $id): null|RedirectResponse
    {
        // TODO : change route redirect
        if (Gate::denies('update', Review::class)) {
            return redirect()->route('reviews.list');
        }

        $review = Review::query()->find($id);

        $review->status = $request->status;
        $review->save();
        return redirect()->route('reviews.list');
    }

    public function delete(int $id): JsonResponse
    {
        $review = Review::query()->where('id','=', $id)->first();
        $review->delete();

        return response()->json(['status' => 'success']);
    }

}
