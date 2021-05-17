<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralInformation;

class GeneralInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website_name = new GeneralInformation();
        $website_name->key = 'website_name';
        $website_name->value = 'Company Name';
        $website_name->save();

        $address = new GeneralInformation();
        $address->key = 'address';
        $address->value = 'Home Town SY1';
        $address->save();

        $phone = new GeneralInformation();
        $phone->key = 'phone';
        $phone->value = '0946918650';
        $phone->save();

        $email = new GeneralInformation();
        $email->key = 'email';
        $email->value = 'help@company.com';
        $email->save();

        $about_us = new GeneralInformation();
        $about_us->key = 'about_us';
        $about_us->value = 'Article About Us';
        $about_us->save();
    }
}
