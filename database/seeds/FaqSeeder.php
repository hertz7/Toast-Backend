<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Guest Faqs
        $faq = new Faq;
        $faq->question = 'Guest Question 1';
        $faq->answer = 'Guest Answer 1';
        $faq->type = Faq::$TYPE_GUEST;
        $faq->save();

        // Host Faqs
        $faq = new Faq;
        $faq->question = 'Host Question 1';
        $faq->answer = 'Host Answer 1';
        $faq->type = Faq::$TYPE_HOST;
        $faq->save();
    }
}
