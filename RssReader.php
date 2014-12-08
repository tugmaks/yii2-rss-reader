<?php

namespace tugmaks\RssFeed;

/**
 * This is just an example.
 */
class RssReader extends \yii\base\Widget {

    public $channel;

    public function run() {
        $xml = @simplexml_load_file($this->channel);
        if ($xml === false) {
            die('Error parse RSS: ' . $rss);
        }
        var_dump($xml);
    }

}
