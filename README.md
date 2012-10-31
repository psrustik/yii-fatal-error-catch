yii-fatal-error-catch
=====================
###Требования
* Yii 1.0 и выше

###Установка
* Распаковать в `protected/extensions`.
* Добавить в конфигурацию в секции 'preload' и 'components':

~~~php
<?php
// ...
'preload'=>array(..., 'fatalerrorcatch'),
'components'=>array(
// ...
    'fatalerrorcatch'=>array(
	'class'=>'ext.error.FatalErrorCatch',
    ),
)
// ...
~~~