<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class AusrichtBalkonTerrasse {

	/**
	 * @var boolean
	 */
	protected $nord;

	/**
	 * @var boolean
	 */
	protected $nordost;

	/**
	 * @var boolean
	 */
	protected $nordwest;

	/**
	 * @var boolean
	 */
	protected $ost;

	/**
	 * @var boolean
	 */
	protected $sued;

	/**
	 * @var boolean
	 */
	protected $suedost;

	/**
	 * @var boolean
	 */
	protected $suedwest;

	/**
	 * @var boolean
	 */
	protected $west;

	/**
	 * @return boolean
	 */
	public function getNord() {
		return $this->nord;
	}

	/**
	 * @return boolean
	 */
	public function getNordost() {
		return $this->nordost;
	}

	/**
	 * @return boolean
	 */
	public function getNordwest() {
		return $this->nordwest;
	}

	/**
	 * @return boolean
	 */
	public function getOst() {
		return $this->ost;
	}

	/**
	 * @return boolean
	 */
	public function getSued() {
		return $this->sued;
	}

	/**
	 * @return boolean
	 */
	public function getSuedost() {
		return $this->suedost;
	}

	/**
	 * @return boolean
	 */
	public function getSuedwest() {
		return $this->suedwest;
	}

	/**
	 * @return boolean
	 */
	public function getWest() {
		return $this->west;
	}

	/**
	 * @param boolean $nord Setter for nord
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNord($nord) {
		$this->nord = $nord;
		return $this;
	}

	/**
	 * @param boolean $nordost Setter for nordost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordost($nordost) {
		$this->nordost = $nordost;
		return $this;
	}

	/**
	 * @param boolean $nordwest Setter for nordwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordwest($nordwest) {
		$this->nordwest = $nordwest;
		return $this;
	}

	/**
	 * @param boolean $ost Setter for ost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setOst($ost) {
		$this->ost = $ost;
		return $this;
	}

	/**
	 * @param boolean $sued Setter for sued
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSued($sued) {
		$this->sued = $sued;
		return $this;
	}

	/**
	 * @param boolean $suedost Setter for suedost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedost($suedost) {
		$this->suedost = $suedost;
		return $this;
	}

	/**
	 * @param boolean $suedwest Setter for suedwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedwest($suedwest) {
		$this->suedwest = $suedwest;
		return $this;
	}

	/**
	 * @param boolean $west Setter for west
	 * @return AusrichtBalkonTerrasse
	 */
	public function setWest($west) {
		$this->west = $west;
		return $this;
	}
}
