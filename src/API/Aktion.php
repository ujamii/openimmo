<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Aktion {

	/**
	 * @var string
	 */
	protected $aktionart;

	/**
	 * @return string
	 */
	public function getAktionart(): string {
		return $this->aktionart;
	}

	/**
	 * @param string $aktionart Setter for aktionart
	 * @return Aktion
	 */
	public function setAktionart(string $aktionart) {
		$this->aktionart = $aktionart;
		return $this;
	}
}
