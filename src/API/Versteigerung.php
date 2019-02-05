<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Versteigerung
 * Angaben zu einer Versteigerung. Wenn es ein Objekt in Zwangsverteigerung ist, dann muss das element "zwangsversteigerung" auf true/1 gesetzt werden.
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("versteigerung") 
 */
class Versteigerung {

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $aktenzeichen;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $amtsgericht;

	/**
	 * @Type("float") 
	 * @var float
	 */
	protected $verkehrswert;

	/**
	 * @Type("DateTime<'Y-m-d\TH:i:s'>") 
	 * @var \DateTime
	 */
	protected $zusatztermin;

	/**
	 * @Type("DateTime<'Y-m-d\TH:i:s'>") 
	 * @var \DateTime
	 */
	protected $zvtermin;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $zwangsversteigerung;

	/**
	 * @return string
	 */
	public function getAktenzeichen(): string {
		return $this->aktenzeichen;
	}

	/**
	 * @return string
	 */
	public function getAmtsgericht(): string {
		return $this->amtsgericht;
	}

	/**
	 * @return float
	 */
	public function getVerkehrswert(): float {
		return $this->verkehrswert;
	}

	/**
	 * @return \DateTime
	 */
	public function getZusatztermin(): \DateTime {
		return $this->zusatztermin;
	}

	/**
	 * @return \DateTime
	 */
	public function getZvtermin(): \DateTime {
		return $this->zvtermin;
	}

	/**
	 * @return boolean
	 */
	public function getZwangsversteigerung(): bool {
		return $this->zwangsversteigerung;
	}

	/**
	 * @param string $aktenzeichen Setter for aktenzeichen
	 * @return Versteigerung
	 */
	public function setAktenzeichen(string $aktenzeichen) {
		$this->aktenzeichen = $aktenzeichen;
		return $this;
	}

	/**
	 * @param string $amtsgericht Setter for amtsgericht
	 * @return Versteigerung
	 */
	public function setAmtsgericht(string $amtsgericht) {
		$this->amtsgericht = $amtsgericht;
		return $this;
	}

	/**
	 * @param float $verkehrswert Setter for verkehrswert
	 * @return Versteigerung
	 */
	public function setVerkehrswert(float $verkehrswert) {
		$this->verkehrswert = $verkehrswert;
		return $this;
	}

	/**
	 * @param \DateTime $zusatztermin Setter for zusatztermin
	 * @return Versteigerung
	 */
	public function setZusatztermin(\DateTime $zusatztermin) {
		$this->zusatztermin = $zusatztermin;
		return $this;
	}

	/**
	 * @param \DateTime $zvtermin Setter for zvtermin
	 * @return Versteigerung
	 */
	public function setZvtermin(\DateTime $zvtermin) {
		$this->zvtermin = $zvtermin;
		return $this;
	}

	/**
	 * @param boolean $zwangsversteigerung Setter for zwangsversteigerung
	 * @return Versteigerung
	 */
	public function setZwangsversteigerung(bool $zwangsversteigerung) {
		$this->zwangsversteigerung = $zwangsversteigerung;
		return $this;
	}
}
