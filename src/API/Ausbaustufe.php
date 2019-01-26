<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Ausbaustufe {

	/**
	 * @var boolean
	 */
	protected $ausbauhaus;

	/**
	 * @var boolean
	 */
	protected $bausatzhaus;

	/**
	 * @var boolean
	 */
	protected $schluesselfertigmitbodenplatte;

	/**
	 * @var boolean
	 */
	protected $schluesselfertigmitkeller;

	/**
	 * @var boolean
	 */
	protected $schluesselfertigohnebodenplatte;

	/**
	 * @return boolean
	 */
	public function getAusbauhaus() {
		return $this->ausbauhaus;
	}

	/**
	 * @return boolean
	 */
	public function getBausatzhaus() {
		return $this->bausatzhaus;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitbodenplatte() {
		return $this->schluesselfertigmitbodenplatte;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitkeller() {
		return $this->schluesselfertigmitkeller;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigohnebodenplatte() {
		return $this->schluesselfertigohnebodenplatte;
	}

	/**
	 * @param boolean $ausbauhaus Setter for ausbauhaus
	 * @return Ausbaustufe
	 */
	public function setAusbauhaus($ausbauhaus) {
		$this->ausbauhaus = $ausbauhaus;
		return $this;
	}

	/**
	 * @param boolean $bausatzhaus Setter for bausatzhaus
	 * @return Ausbaustufe
	 */
	public function setBausatzhaus($bausatzhaus) {
		$this->bausatzhaus = $bausatzhaus;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitbodenplatte Setter for schluesselfertigmitbodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitbodenplatte($schluesselfertigmitbodenplatte) {
		$this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitkeller Setter for schluesselfertigmitkeller
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitkeller($schluesselfertigmitkeller) {
		$this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigohnebodenplatte Setter for schluesselfertigohnebodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigohnebodenplatte($schluesselfertigohnebodenplatte) {
		$this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
		return $this;
	}
}
