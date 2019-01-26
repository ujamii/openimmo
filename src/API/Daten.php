<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Daten {

	/**
	 * @var base64Binary
	 */
	protected $anhanginhalt;

	/**
	 * @var string
	 */
	protected $pfad;

	/**
	 * @return base64Binary
	 */
	public function getAnhanginhalt() {
		return $this->anhanginhalt;
	}

	/**
	 * @return string
	 */
	public function getPfad() {
		return $this->pfad;
	}

	/**
	 * @param base64Binary $anhanginhalt Setter for anhanginhalt
	 * @return Daten
	 */
	public function setAnhanginhalt(base64Binary $anhanginhalt) {
		$this->anhanginhalt = $anhanginhalt;
		return $this;
	}

	/**
	 * @param string $pfad Setter for pfad
	 * @return Daten
	 */
	public function setPfad($pfad) {
		$this->pfad = $pfad;
		return $this;
	}
}
