<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class AussenCourtage {

	/**
	 * @var boolean
	 */
	protected $mitMwst;

	/**
	 * @return boolean
	 */
	public function getMitMwst() {
		return $this->mitMwst;
	}

	/**
	 * @param boolean $mitMwst Setter for mitMwst
	 * @return AussenCourtage
	 */
	public function setMitMwst($mitMwst) {
		$this->mitMwst = $mitMwst;
		return $this;
	}
}
