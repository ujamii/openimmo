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
	 * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>") 
	 * @var \DateTime
	 */
	protected $zusatztermin;

	/**
	 * @Type("DateTime<'Y-m-d\TH:i:s', null, ['Y-m-d\TH:i:sP', 'Y-m-d\TH:i:s']>") 
	 * @var \DateTime
	 */
	protected $zvtermin;

	/**
	 * @Type("bool") 
	 * @var bool
	 */
	protected $zwangsversteigerung;

	/**
	 * @param bool $zwangsversteigerung Shortcut setter for zwangsversteigerung
	 * @param string $aktenzeichen Shortcut setter for aktenzeichen
	 * @param \DateTime $zvtermin Shortcut setter for zvtermin
	 * @param \DateTime $zusatztermin Shortcut setter for zusatztermin
	 * @param string $amtsgericht Shortcut setter for amtsgericht
	 * @param float $verkehrswert Shortcut setter for verkehrswert
	 */
	public function __construct(bool $zwangsversteigerung = null, string $aktenzeichen = null, \DateTime $zvtermin = null, \DateTime $zusatztermin = null, string $amtsgericht = null, float $verkehrswert = null) {
		$this->zwangsversteigerung = $zwangsversteigerung;
		$this->aktenzeichen = $aktenzeichen;
		$this->zvtermin = $zvtermin;
		$this->zusatztermin = $zusatztermin;
		$this->amtsgericht = $amtsgericht;
		$this->verkehrswert = $verkehrswert;
	}

	/**
	 * @return string
	 */
	public function getAktenzeichen(): ?string {
		return $this->aktenzeichen;
	}

	/**
	 * @return string
	 */
	public function getAmtsgericht(): ?string {
		return $this->amtsgericht;
	}

	/**
	 * @return float
	 */
	public function getVerkehrswert(): ?float {
		return $this->verkehrswert;
	}

	/**
	 * @return \DateTime
	 */
	public function getZusatztermin(): ?\DateTime {
		return $this->zusatztermin;
	}

	/**
	 * @return \DateTime
	 */
	public function getZvtermin(): ?\DateTime {
		return $this->zvtermin;
	}

	/**
	 * @return bool
	 */
	public function getZwangsversteigerung(): ?bool {
		return $this->zwangsversteigerung;
	}

	/**
	 * @param string $aktenzeichen Setter for aktenzeichen
	 * @return Versteigerung
	 */
	public function setAktenzeichen(?string $aktenzeichen) {
		$this->aktenzeichen = $aktenzeichen;
		return $this;
	}

	/**
	 * @param string $amtsgericht Setter for amtsgericht
	 * @return Versteigerung
	 */
	public function setAmtsgericht(?string $amtsgericht) {
		$this->amtsgericht = $amtsgericht;
		return $this;
	}

	/**
	 * @param float $verkehrswert Setter for verkehrswert
	 * @return Versteigerung
	 */
	public function setVerkehrswert(?float $verkehrswert) {
		$this->verkehrswert = $verkehrswert;
		return $this;
	}

	/**
	 * @param \DateTime $zusatztermin Setter for zusatztermin
	 * @return Versteigerung
	 */
	public function setZusatztermin(?\DateTime $zusatztermin) {
		$this->zusatztermin = $zusatztermin;
		return $this;
	}

	/**
	 * @param \DateTime $zvtermin Setter for zvtermin
	 * @return Versteigerung
	 */
	public function setZvtermin(?\DateTime $zvtermin) {
		$this->zvtermin = $zvtermin;
		return $this;
	}

	/**
	 * @param bool $zwangsversteigerung Setter for zwangsversteigerung
	 * @return Versteigerung
	 */
	public function setZwangsversteigerung(?bool $zwangsversteigerung) {
		$this->zwangsversteigerung = $zwangsversteigerung;
		return $this;
	}
}
