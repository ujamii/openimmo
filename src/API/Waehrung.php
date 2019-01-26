<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Waehrung {

	/**
	 * @var string
	 */
	protected $isoWaehrung;

	/**
	 * @return string
	 */
	public function getIsoWaehrung() {
		return $this->isoWaehrung;
	}

	/**
	 * @param string $isoWaehrung Setter for isoWaehrung
	 * @return Waehrung
	 */
	public function setIsoWaehrung($isoWaehrung) {
		$this->isoWaehrung = $isoWaehrung;
		return $this;
	}
}
