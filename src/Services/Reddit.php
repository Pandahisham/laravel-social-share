<?php

namespace Tshafer\SocialShare\Services;

class Reddit extends Service
{
    /**
     * @return string
     */
    public static function getUrl()
    {
        return 'http://www.reddit.com/submit?';
    }

    /**
     * @param string $link
     * @param string $text
     * @param string $media
     *
     * @return array
     */
    public static function getFields($link, $text, $media)
    {
        return [
          'url' => $link,
          'title' => $text,
        ];
    }
}
