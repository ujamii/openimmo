<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class FreizeitimmobilieGewerblich {

	/**
	 * @var string
	 */
	protected $freizeitTyp;

	/**
	 * @return string
	 */
	public function getFreizeitTyp() {
		return $this->freizeitTyp;
	}

	/**
	 * @param string $freizeitTyp Setter for freizeitTyp
	 * @return FreizeitimmobilieGewerblich
	 */
	public function setFreizeitTyp($freizeitTyp) {
		$this->freizeitTyp = $freizeitTyp;
		return $this;
	}
}
