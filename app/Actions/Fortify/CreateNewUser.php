<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User{

        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:20'],
            'lastname' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users','confirmed'],
            'password' => $this->passwordRules(),
            'phone' => ['required', 'string', 'max:30'],
            'city' => ['required'],
            'typeof'  => ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        
        $user = User::create([
            'name' => $input['firstname'] . " " . $input['lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['phone'],
            'city' => $input['city'],
            'typeof' => $input['typeof'],
        ]);
        return $user;
       
    }
}



