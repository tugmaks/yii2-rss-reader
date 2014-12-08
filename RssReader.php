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
    public $wrapTag = 'div';
    public $wrapClass = 'rss-wrap';
    public $items = [];

    public function run() {
        $xml = @simplexml_load_file($this->channel);
        if ($xml === false) {
            die('Error parse Rss: ' . $rss);
        }
        foreach ($xml->xpath('//item') as $item) {
            $this->items[] = $item;
        }
        $provider = new ArrayDataProvider([
            'allModels' => $this->items,
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
            'sort' => [
                'attributes' => ['pubDate'],
                'defaultOrder'=>['pubDate'=>SORT_ASC]
            ],
        ]);


        return $this->render('wrap', [
                    'provider' => $provider,
        ]);
    }

}
