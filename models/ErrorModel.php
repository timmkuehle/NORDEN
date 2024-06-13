<?php

declare(strict_types=1);

/**
 * Error model class
 *
 * Defines all errors and provides current error information
 *
 * @property array $errors Holds information arrays for all knwon error codes
 * @property array $currentError Holds information about current error, requested by error controller
 */
class ErrorModel {
	private array $errors = [
		[
			'code' => 404,
			'technical_name' => 'Page Not Found',
			'description' =>
				'Die angeforderte Seite konnte nicht gefunden werden',
			'message' =>
				'Entweder existiert die Seite, nach der du suchst nicht mehr, oder sie wurde verschoben. Falls du über einen externen Link auf diese Seite gelangt sind, war die Link-Adresse möglicherweise nicht korrekt.',
			'buttons' => [['text' => 'Zurück zur Startseite', 'link' => '/']]
		]
	];
	private array $currentError;

	/**
	 * Constructor method
	 *
	 * Adds internal server error to errors property and sets current error property
	 *
	 * @param ?int $slug Code of current error
	 */
	public function __construct(int $error_code) {
		$this->errors = array_merge($this->errors, [
			[
				'code' => 500,
				'description' => 'Ein Serverfehler ist aufgetreten',
				'technical_name' => 'Internal Server Error',
				'message' =>
					'Der Server kann ihre Anfrage momentan nicht verabeiten. Sie können es noch einmal versuchen, oder zur Startseite zurückkehren, falls das Problem weiterhin besteht.',
				'buttons' => [
					[
						'text' => 'Erneut versuchen',
						'link' => CURRENT_URL
					],
					['text' => 'Zurück zur Startseite', 'link' => '/']
				]
			]
		]);

		$filtered_errors = array_filter(
			$this->errors,
			fn($error) => $error['code'] === $error_code
		);

		$this->currentError = $this->sanitizeError(
			array_values(
				$filtered_errors ??
					array_filter(
						$this->errors,
						fn($error) => $error['code'] === 500
					)
			)[0]
		);
	}

	/**
	 * Error sanitization method
	 *
	 * Sanitizes button links of provided error
	 *
	 * @param array $error Error array to sanitize
	 * @return array Sanitized pages array
	 */
	private function sanitizeError(array $error): array {
		return array_replace($error, [
			'buttons' => array_map(
				fn($button) => array_replace($button, [
					'link' => preg_replace(
						'/\/*$/',
						'',
						(preg_match('/^https?\:\/\//', $button['link'])
							? ''
							: BASE_URL) . sanitize_uri($button['link'])
					)
				]),
				$error['buttons']
			)
		]);
	}

	/**
	 * Current error getter
	 *
	 * @return array Current error information, requested by error controller
	 */
	public function getCurrentError(): array {
		return $this->currentError;
	}
}
