<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Master {

	/**
	 * @var boolean
	 */
	protected $visible;

	/**
	 * @return boolean
	 */
	public function getVisible(): bool {
		return $this->visible;
	}

	/**
	 * @param boolean $visible Setter for visible
	 * @return Master
	 */
	public function setVisible(bool $visible) {
		$this->visible = $visible;
		return $this;
	}
}
