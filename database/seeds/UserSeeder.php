<?php

use App\Models\User;
use App\Models\Contact;
use App\Models\ContactEmail;
use App\Models\ContactPhone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'email' => 'liubergaria@hotmail.com',
        ], [
            'name' => 'Helil',
            'password' => Hash::make('12345678'),
        ]);

        $user->save();

        factory(Contact::class, 100)
            ->create(['id_user' => $user->id])
            ->each(function ($contact) {
                $contact->save();

                $contact->phones()
                    ->saveMany(factory(ContactPhone::class, random_int(0, 3))
                        ->create(['id_contact' => $contact->id]));
                $contact->emails()
                    ->saveMany(factory(ContactEmail::class, random_int(0, 3))
                        ->create(['id_contact' => $contact->id]));
            });
    }
}
