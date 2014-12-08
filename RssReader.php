<?php

namespace tugmaks\RssFeed;

use yii\data\ArrayDataProvider;

/**
 * This is just an example.
 */
class RssReader extends \yii\base\Widget {

    public $channel;
    public $pageSize = 10;
    public $itemView = 'item';
    public $wrapTag = 'ul';
    public $wrapClass = 'rss-wrap';
    public $items = [];

    public function run() {
        $xml = @simplexml_load_file($this->channel);
        if ($xml === false) {
            die('Error parse RSS: ' . $rss);
        }
        foreach ($xml->channel->item as $item) {
            $this->items[] = $item;
        }
        $provider = new ArrayDataProvider([
            'allModels' => $this->itemss,
//            'sort' => [
//                'attributes' => ['id', 'username', 'email'],
//            ],
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
        ]);


        return $this->render('wrap', [
                    'provider' => $provider,
        ]);
    }

}
