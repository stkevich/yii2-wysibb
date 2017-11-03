WysiBB Widget for YII2
======================
WysiBB Widget for YII2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist stkevich/yii2-wysibb "*"
```

or add

```
"stkevich/yii2-wysibb": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
$form->field($modelName, 'columnName')->widget(\stkevich\wysibb\WysiBB::className(), []);
```
Or use
```php
\stkevich\wysibb\WysiBB::widget([]);
```