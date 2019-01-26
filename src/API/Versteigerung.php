<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Versteigerung {

	/**
	 * @var string
	 */
	protected $aktenzeichen;

	/**
	 * @var string
	 */
	protected $amtsgericht;

	/**
	 * @var decimal
	 */
	protected $verkehrswert;

	/**
	 * @var dateTime
	 */
	protected $zusatztermin;

	/**
	 * @var dateTime
	 */
	protected $zvtermin;

	/**
	 * @var boolean
	 */
	protected $zwangsversteigerung;

	/**
	 * @return string
	 */
	public function getAktenzeichen() {
		return $this->aktenzeichen;
	}

	/**
	 * @return string
	 */
	public function getAmtsgericht() {
		return $this->amtsgericht;
	}

	/**
	 * @return decimal
	 */
	public function getVerkehrswert() {
		return $this->verkehrswert;
	}

	/**
	 * @return dateTime
	 */
	public function getZusatztermin() {
		return $this->zusatztermin;
	}

	/**
	 * @return dateTime
	 */
	public function getZvtermin() {
		return $this->zvtermin;
	}

	/**
	 * @return boolean
	 */
	public function getZwangsversteigerung() {
		return $this->zwangsversteigerung;
	}

	/**
	 * @param string $aktenzeichen Setter for aktenzeichen
	 * @return Versteigerung
	 */
	public function setAktenzeichen($aktenzeichen) {
		$this->aktenzeichen = $aktenzeichen;
		return $this;
	}

	/**
	 * @param string $amtsgericht Setter for amtsgericht
	 * @return Versteigerung
	 */
	public function setAmtsgericht($amtsgericht) {
		$this->amtsgericht = $amtsgericht;
		return $this;
	}

	/**
	 * @param decimal $verkehrswert Setter for verkehrswert
	 * @return Versteigerung
	 */
	public function setVerkehrswert(decimal $verkehrswert) {
		$this->verkehrswert = $verkehrswert;
		return $this;
	}

	/**
	 * @param dateTime $zusatztermin Setter for zusatztermin
	 * @return Versteigerung
	 */
	public function setZusatztermin(dateTime $zusatztermin) {
		$this->zusatztermin = $zusatztermin;
		return $this;
	}

	/**
	 * @param dateTime $zvtermin Setter for zvtermin
	 * @return Versteigerung
	 */
	public function setZvtermin(dateTime $zvtermin) {
		$this->zvtermin = $zvtermin;
		return $this;
	}

	/**
	 * @param boolean $zwangsversteigerung Setter for zwangsversteigerung
	 * @return Versteigerung
	 */
	public function setZwangsversteigerung($zwangsversteigerung) {
		$this->zwangsversteigerung = $zwangsversteigerung;
		return $this;
	}
}
