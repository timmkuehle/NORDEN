<?php

declare(strict_types=1);

/**
 * Error controller class
 *
 * Renders error information on site
 *
 * @property ErrorModel $model Error model instance
 * @property array $currentError Holds information about current error
 */
class ErrorController extends BaseController {
	private ErrorModel $model;
	private array $currentError;

	/**
	 * Constructor method
	 *
	 * Initializes error model, sets current error and initializes error view
	 *
	 * @param int $code Error code
	 * @param ?Throwable $error_object Caught error object
	 */
	public function __construct(int $code, ?Throwable $error_object = null) {
		$this->model = new ErrorModel($code);

		$this->currentError = $this->model->getCurrentError();

		$this->contentPath = '/content/error';

		$language = ENV === 'development' ? 'en' : LANG_CODE;

		$title =
			ENV === 'development'
				? $this->currentError['technical_name']
				: $this->currentError['description'];

		$description = 'Error ' . strval($code) . ': ' . $title;

		$template = BASE_DIR . $this->contentPath . '/template.php';

		$message =
			ENV === 'development' && $error_object
				? '<b>' .
					get_class($error_object) .
					'</b>: ' .
					$error_object->getMessage() .
					' in <b>' .
					implode('/<wbr>', explode('/', $error_object->getFile())) .
					'</b> on line <b>' .
					$error_object->getLine() .
					'</b>'
				: $this->currentError['message'];

		$trace =
			ENV === 'development' && $error_object !== null
				? $error_object->getTrace()
				: null;

		$buttons = ENV === 'production' ? $this->currentError['buttons'] : [];

		new ErrorView(
			$this->getHttpHeaders(),
			$language,
			$title,
			$description,
			$template,
			$this->currentError['code'],
			$message,
			$trace,
			$buttons,
			$this->getScripts(),
			$this->getStyles('error')
		);
	}
}
