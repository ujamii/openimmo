<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Unterkellert {

	/**
	 * @var string
	 */
	protected $keller;

	/**
	 * @return string
	 */
	public function getKeller() {
		return $this->keller;
	}

	/**
	 * @param string $keller Setter for keller
	 * @return Unterkellert
	 */
	public function setKeller($keller) {
		$this->keller = $keller;
		return $this;
	}
}
