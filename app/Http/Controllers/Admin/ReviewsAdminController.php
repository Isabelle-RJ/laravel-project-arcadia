<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Requests\ReviewsFormRequest;
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
        $reviews = Review::all();

        if (Gate::denies('update', Review::class)) {
            return redirect()->route('reviews.list');
        }

        if (!$reviews) {
            throw new Exception("Aucun avis trouvé.", 404);
        }
        return view('admin.zoo.reviews.reviews-list', compact('reviews'));
    }

    public function update(ReviewsFormRequest $request, int $id): RedirectResponse
    {
        // TODO : change route redirect
        if (Gate::denies('update', Review::class)) {
            return redirect()->route('reviews.list');
        }

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
