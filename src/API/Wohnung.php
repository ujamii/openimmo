<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Wohnung {

	/**
	 * @var string
	 */
	protected $wohnungtyp;

	/**
	 * @return string
	 */
	public function getWohnungtyp(): string {
		return $this->wohnungtyp;
	}

	/**
	 * @param string $wohnungtyp Setter for wohnungtyp
	 * @return Wohnung
	 */
	public function setWohnungtyp(string $wohnungtyp) {
		$this->wohnungtyp = $wohnungtyp;
		return $this;
	}
}
