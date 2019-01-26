<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class InnenCourtage {

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
	 * @return InnenCourtage
	 */
	public function setMitMwst($mitMwst) {
		$this->mitMwst = $mitMwst;
		return $this;
	}
}
