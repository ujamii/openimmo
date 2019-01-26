<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Verkaufstatus {

	/**
	 * @var string
	 */
	protected $stand;

	/**
	 * @return string
	 */
	public function getStand() {
		return $this->stand;
	}

	/**
	 * @param string $stand Setter for stand
	 * @return Verkaufstatus
	 */
	public function setStand($stand) {
		$this->stand = $stand;
		return $this;
	}
}
