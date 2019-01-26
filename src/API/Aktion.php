<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Aktion {

	/**
	 * @var string
	 */
	protected $aktionart;

	/**
	 * @return string
	 */
	public function getAktionart() {
		return $this->aktionart;
	}

	/**
	 * @param string $aktionart Setter for aktionart
	 * @return Aktion
	 */
	public function setAktionart($aktionart) {
		$this->aktionart = $aktionart;
		return $this;
	}
}
