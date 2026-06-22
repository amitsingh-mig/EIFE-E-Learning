<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // If user exists, update google_id and avatar if empty
                if (!$user->google_id) {
                    $user->update([
                        'google_id' => $googleUser->getId(),
                        'avatar'    => $user->avatar ?? $googleUser->getAvatar(),
                    ]);
                }
                Auth::login($user);
            } else {
                // Create a new user
                $user = User::create([
                    'name'      => $googleUser->getName(),
                    'email'     => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar'    => $googleUser->getAvatar(),
                    'password'  => null, // Google users might not have a password
                ]);

                // Send Welcome Email asynchronously
                Mail::to($user->email)->queue(new WelcomeMail($user));

                Auth::login($user);
            }

            return redirect()->route('dashboard')->with('success', 'Logged in with Google successfully!');

        } catch (\Exception $e) {
            \Log::error('Google Auth Error: ' . $e->getMessage());
            return redirect()->route('login')->withErrors(['email' => 'Unable to login using Google. Please try again.']);
        }
    }
}
