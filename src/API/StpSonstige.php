<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
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
	public function getBemerkung(): string {
		return $this->bemerkung;
	}

	/**
	 * @return string
	 */
	public function getPlatzart(): string {
		return $this->platzart;
	}

	/**
	 * @param string $bemerkung Setter for bemerkung
	 * @return StpSonstige
	 */
	public function setBemerkung(string $bemerkung) {
		$this->bemerkung = $bemerkung;
		return $this;
	}

	/**
	 * @param string $platzart Setter for platzart
	 * @return StpSonstige
	 */
	public function setPlatzart(string $platzart) {
		$this->platzart = $platzart;
		return $this;
	}
}
