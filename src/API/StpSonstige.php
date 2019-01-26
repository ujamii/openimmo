<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class StpSonstige {

	/**
	 * @var string
	 */
	protected $bemerkung;

	/**
	 * @var string
	 */
	protected $platzart;

	/**
	 * @return string
	 */
	public function getBemerkung() {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getPlatzart() {
		return $this->platzart;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return StpSonstige
	 */
	public function setBemerkung($bemerkung) {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $platzart Setter for platzart
	 * @return StpSonstige
	 */
	public function setPlatzart($platzart) {
		$this->platzart = $platzart;
		return $this;
	}
}
