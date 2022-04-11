<?php

namespace App\Controllers\Auth;

use App\Models\User;
use Lune\Http\Controller;
use Lune\Crypto\Hasher;

/**
 * Login controller.
 */
class LoginController extends Controller {
    /**
     * Login page.
     */
    public function show() {
        return view("auth/login");
    }

    /**
     * Authenticate user.
     */
    public function create(Hasher $hasher) {
        $data = request()->validate([
            "email" => "email",
            "password" => "required",
        ]);

        $user = User::firstWhere("email", $data["email"]);

        if (is_null($user) || !$hasher->verify($data["password"], $user->password)) {
            return back()->withErrors(["email" => ["Credentials do not match"]]);
        }

        $user->login();

        return redirect("/home");
    }

    /**
     * Logout.
     */
    public function destroy() {
        auth()?->logout();

        return redirect("/");
    }
}
