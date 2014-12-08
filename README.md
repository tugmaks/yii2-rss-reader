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
<?= \tugmaks\RssFeed\RssReader::widget([
'channel'=>'http://example.com/feed.xml'
]); ?>```