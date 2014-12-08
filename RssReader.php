<?php

namespace tugmaks\RssFeed;

use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;

/**
 * This is just an example.
 */
class RssReader extends \yii\base\Widget {

    public $channel;
    public $pageSize = 10;
    public $itemView = 'item';
    public $wrapTag = 'div';
    public $wrapClass = 'rss-wrap';

    public function run() {
        $xml = @simplexml_load_file($this->channel);
        if ($xml === false) {
            die('Error parse Rss: ' . $rss);
        }
        $items = [];
        foreach ($xml->xpath('//item') as $item) {
            $items[] = $item;
        }
        ArrayHelper::multisort($items, function($item) {
            return $item->pubDate;
        }, SORT_DESC);
        $provider = new ArrayDataProvider([
            'allModels' => $items,
            'pagination' => [
                'pageSize' => $this->pageSize,
            ],
        ]);


        return $this->render('wrap', [
                    'provider' => $provider,
        ]);
    }

}
