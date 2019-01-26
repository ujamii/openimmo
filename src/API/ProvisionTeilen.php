<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class ProvisionTeilen {

	/**
	 * @var string
	 */
	protected $wert;

	/**
	 * @return string
	 */
	public function getWert() {
		return $this->wert;
	}

	/**
	 * @param string $wert Setter for wert
	 * @return ProvisionTeilen
	 */
	public function setWert($wert) {
		$this->wert = $wert;
		return $this;
	}
}
