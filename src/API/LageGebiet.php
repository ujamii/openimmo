<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class LageGebiet {

	/**
	 * @var string
	 */
	protected $gebiete;

	/**
	 * @return string
	 */
	public function getGebiete() {
		return $this->gebiete;
	}

	/**
	 * @param string $gebiete Setter for gebiete
	 * @return LageGebiet
	 */
	public function setGebiete($gebiete) {
		$this->gebiete = $gebiete;
		return $this;
	}
}
