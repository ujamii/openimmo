<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Haus {

	/**
	 * @var string
	 */
	protected $haustyp;

	/**
	 * @return string
	 */
	public function getHaustyp() {
		return $this->haustyp;
	}

	/**
	 * @param string $haustyp Setter for haustyp
	 * @return Haus
	 */
	public function setHaustyp($haustyp) {
		$this->haustyp = $haustyp;
		return $this;
	}
}
