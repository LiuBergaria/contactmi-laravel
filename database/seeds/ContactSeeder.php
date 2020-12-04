<?php

use App\Contact;
use App\ContactEmail;
use App\ContactPhone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
        $faker->addProvider(new Faker\Provider\pt_BR\Address($faker));
        $faker->addProvider(new Faker\Provider\pt_BR\PhoneNumber($faker));

        $userId = DB::getPdo()->lastInsertId();

        for ($i = 0; $i < 100; $i++) {
            $contact = new Contact();

            $contact->id_user = $userId;
            $contact->name = $faker->name();
            $contact->fg_favorite = $faker->boolean(10);
            $contact->cep = str_replace('-', '', $faker->postcode());
            $contact->full_address = $faker->streetAddress();
            $contact->address_number = $faker->numberBetween(1, 10000);

            $contact->save();

            for ($j = 0; $j < random_int(0, 3); $j++) {
                $contactEmail = new ContactEmail();

                $contactEmail->id_contact = $contact->id;
                $contactEmail->email = $faker->email();
                $contactEmail->description = $faker->randomElement([null, 'Casa', 'Trabalho', 'Pai', 'Mãe']);

                $contactEmail->save();
            }

            for ($j = 0; $j < random_int(0, 3); $j++) {
                $contactPhone = new ContactPhone();

                $contactPhone->id_contact = $contact->id;
                $contactPhone->phone = $faker->phoneNumber();
                $contactPhone->description = $faker->randomElement([null, 'Casa', 'Trabalho', 'Pai', 'Mãe']);

                $contactPhone->save();
            }
        }
    }
}
