<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Wohnung {

	/**
	 * @var string
	 */
	protected $wohnungtyp;

	/**
	 * @return string
	 */
	public function getWohnungtyp() {
		return $this->wohnungtyp;
	}

	/**
	 * @param string $wohnungtyp Setter for wohnungtyp
	 * @return Wohnung
	 */
	public function setWohnungtyp($wohnungtyp) {
		$this->wohnungtyp = $wohnungtyp;
		return $this;
	}
}
