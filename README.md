Yii2 rss reader
===============
Rss reader widget for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tugmaks/yii2-rss-reader "*"
```

or add

```
"tugmaks/yii2-rss-reader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php echo \tugmaks\RssFeed\RssReader::widget([
'channel'=>'http://example.com/feed.xml',
 'pageSize' = 5,
 'itemView' = 'item', //To set own viewFile set 'itemView'=>'@frontend/views/site/_rss_item'. Use $model var to access item properties
 'wrapTag' = 'div',
 'wrapClass' = 'rss-wrap',
]);
 ?>
```