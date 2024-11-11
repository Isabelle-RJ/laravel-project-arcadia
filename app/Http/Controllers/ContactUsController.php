<?php

namespace App\Http\Controllers;

use App\Mail\TestArcadiaMail;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactUsController extends Controller
{
    public function show(): View
    {
        return view('page.contact');
    }

    public function send(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            Mail::to('jose@arcadia.mail')
                ->send(new TestArcadiaMail(
                    $validatedData['name'],
                    $validatedData['email'],
                    $validatedData['message']
                ));

            return response()->json(['success' => 'Email envoyé avec succès !']);
        } catch (Exception) {
            return response()->json(['error' => "Erreur lors de l'envoi de l'email."], 500);
        }
    }
}
