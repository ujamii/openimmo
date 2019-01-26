<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Master {

	/**
	 * @var boolean
	 */
	protected $visible;

	/**
	 * @return boolean
	 */
	public function getVisible() {
		return $this->visible;
	}

	/**
	 * @param boolean $visible Setter for visible
	 * @return Master
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}
}
