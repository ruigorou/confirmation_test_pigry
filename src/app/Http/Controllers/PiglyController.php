<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTargetWeightRequest;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\WeightTarget;
class PiglyController extends Controller

{
    public function register_step1() {
        return view("register_user");
    }

    public function register_user (RegisterUserRequest $request) {
        $user = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ];

        session(['register_user' => $user]);

        return view('register_terget_weight');
    }

    public function register_step2 () {
        return view('register_terget_weight');
    }

    public function register_terget_weight (RegisterTargetWeightRequest $request) {
        $user_data = session('register_user');
        if (!$user_data) { return redirect('/register/step1') ->withErrors('セッションが切れました。最初からやり直してください。'); }

        $user = $this->user_create($user_data);
        $this->target_weight_create($user, $request->input('target_weight'));
        session()->forget('register_user');
        return view('register_user');
    }

    private function user_create($request) {
        return User::create($request);
    }

    private function target_weight_create($user, $request) {
        $target_weight = WeightTarget::create([
            'user_id' => $user->id,
            'target_weight' => $request
        ]);

        return $target_weight;
    }

    public function thankyou () {
        return view('thankyou');
    }

    public function weight_logs () {
        return view('weight_log_admin');
    }

    
}
