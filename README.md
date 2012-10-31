yii-fatal-error-catch
=====================
Extension for catching fatal errors in yii-based application.
Unfortunately, Yii doesn't catches fatal errors itself.

###Requirements
* Yii 1.0 and higher

###Installation
* Unpack to `protected/extensions/error` directory of you project.
* In application configuration add lines of code provided below:

~~~php
<?php
// ...
'preload'=>array('fatalerrorcatch', ...),
'components'=>array(
// ...
    'fatalerrorcatch'=>array(
    	'class'=>'ext.error.FatalErrorCatch',
    ),
)
// ...
~~~