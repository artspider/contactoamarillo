<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\expert;
use App\Models\employer;
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
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'type' => 'required',
            /* 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '', */
        ])->validate();

        $role = $input['type'];
        
        if ($role == '1'){
            $role_name = 'App\Models\Employer';
            $morph_id = Employer::create([
              'nombre' => $input['name'],
              'created_at' => now(),
              'updated_at' => now(),
            ]);
          }elseif($role == '2')
          {
            $role_name = 'App\Models\Expert';
            $morph_id = Expert::create([
              'nombre' => $input['name'],
              'email' => $input['email'],
              'created_at' => now(),
              'updated_at' => now(),    
            ]);
          }

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'type' => $role,
            'usable_type' => $role_name,
            'usable_id' => $morph_id->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($role == '1'){
          $user->assignRole('Employer');
        }elseif($role == '2'){
          $user->assignRole('Expert');
        }
        return $user;
    }
}
