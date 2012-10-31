<?php
/**
 * Компонент для перехвата FATAL ошибок
 * в конфиге main.php прописать в preload,components:
 *
 * 'preload'=>array('fatalerrorcatch',...),
 *  ...
 * 'components'=>array(
 *   ...
 *   'fatalerrorcatch'=>array(
 *     'class'=>'ext.error.FatalErrorCatch',
 *   ),
 */
class FatalErrorCatch extends CApplicationComponent
{
	/**
	 * Yii-действие для отображения ошибки.
	 * Лучше использовать встроенные, стандартные, так как в своих обработчиках тоже могут ошибки
	 * @var mixed
	 */
	public $errorAction = null;
	/**
	 * Ошибки, которые будем отлавливать
	 * @var array
	 */
	public $errorTypes = array(E_ERROR, E_PARSE, E_CORE_ERROR, E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING);

	public function init()
	{
		register_shutdown_function(array($this, 'shutdownHandler'));
		return parent::init();
	}

	/**
	 * Обработчик ошибок
	 */
	public function shutdownHandler()
	{
		$e = error_get_last();
		if ($e !== null && in_array($e['type'], $this->errorTypes))
		{
			$msg = 'Fatal error: ' . $e['message'];
			Yii::app()->errorHandler->errorAction = $this->errorAction;
			Yii::app()->handleError($e['type'], $msg, $e['file'], $e['line']);
		}
	}
}
