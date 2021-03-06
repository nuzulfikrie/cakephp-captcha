<?php

namespace Captcha\View;

use App\View\AppView;

/**
 * Renders the captcha image.
 */
class CaptchaView extends AppView {

	/**
	 * Initialization hook method.
	 *
	 * @return void
	 */
	public function initialize(): void {
		parent::initialize();

		$this->layout = '';
		$this->disableAutoLayout();

		$ext = $this->request->getParam('_ext') ?: 'png';

		$this->response = $this->response->withType($ext)
			->withHeader('Content-Transfer-Encoding', 'binary');
	}

}
