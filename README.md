yii-fatal-error-catch
=====================
Компонент для перехвата fatal error в yii -приложении.
К сожалению, yii 1 этого делать сам не умеет.
###Требования
* Yii 1.0 и выше

###Установка
* Распаковать в `protected/extensions/error`.
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