<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Zimmer {

	/**
	 * @var string
	 */
	protected $zimmertyp;

	/**
	 * @return string
	 */
	public function getZimmertyp() {
		return $this->zimmertyp;
	}

	/**
	 * @param string $zimmertyp Setter for zimmertyp
	 * @return Zimmer
	 */
	public function setZimmertyp($zimmertyp) {
		$this->zimmertyp = $zimmertyp;
		return $this;
	}
}
