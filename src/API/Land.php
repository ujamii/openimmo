<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Land {

	/**
	 * @var string
	 */
	protected $isoLand;

	/**
	 * @return string
	 */
	public function getIsoLand() {
		return $this->isoLand;
	}

	/**
	 * @param string $isoLand Setter for isoLand
	 * @return Land
	 */
	public function setIsoLand($isoLand) {
		$this->isoLand = $isoLand;
		return $this;
	}
}
