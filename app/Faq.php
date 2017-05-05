<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public static $TYPE_GUEST = 0;
    public static $TYPE_HOST = 1;

    /**
     * Return a Builder with guest faqs.
     *
     * @return Builder
     */
    public static function guest()
    {
        return Faq::where('type', self::$TYPE_GUEST)->select('question', 'answer');
    }

    /**
     * Return a Builder with host faqs.
     *
     * @return Builder
     */
    public static function host()
    {
        return Faq::where('type', self::$TYPE_HOST)->select('question', 'answer');
    }
}
