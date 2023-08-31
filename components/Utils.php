<?php

	namespace fastwhale\yii2\douyin\components;

	require_once "utils/Utils.php";

	/**
	 * Class Utils
	 * @package fastwhale\yii2\weWork\components
	 */
	class Utils extends \Utils
	{
		/**
		 * Returns the fully qualified name of this class.
		 * @return string The fully qualified name of this class.
		 */
		public static function classname ()
		{
			return get_called_class();
		}
	}