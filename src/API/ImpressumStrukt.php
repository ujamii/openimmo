<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ImpressumStrukt
 * Ergänzung ($V120)
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("impressum_strukt") 
 */
class ImpressumStrukt {

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $berufsaufsichtsbehoerde;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $firmenanschrift;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $firmenname;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $handelsregister;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $handelsregisterNr;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $steuernummer;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $telefon;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $umsstId;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $vertretungsberechtigter;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $weiteres;

	/**
	 * @return string
	 */
	public function getBerufsaufsichtsbehoerde(): string {
		return $this->berufsaufsichtsbehoerde;
	}

	/**
	 * @return string
	 */
	public function getFirmenanschrift(): string {
		return $this->firmenanschrift;
	}

	/**
	 * @return string
	 */
	public function getFirmenname(): string {
		return $this->firmenname;
	}

	/**
	 * @return string
	 */
	public function getHandelsregister(): string {
		return $this->handelsregister;
	}

	/**
	 * @return string
	 */
	public function getHandelsregisterNr(): string {
		return $this->handelsregisterNr;
	}

	/**
	 * @return string
	 */
	public function getSteuernummer(): string {
		return $this->steuernummer;
	}

	/**
	 * @return string
	 */
	public function getTelefon(): string {
		return $this->telefon;
	}

	/**
	 * @return string
	 */
	public function getUmsstId(): string {
		return $this->umsstId;
	}

	/**
	 * @return string
	 */
	public function getVertretungsberechtigter(): string {
		return $this->vertretungsberechtigter;
	}

	/**
	 * @return string
	 */
	public function getWeiteres(): string {
		return $this->weiteres;
	}

	/**
	 * @param string $berufsaufsichtsbehoerde Setter for berufsaufsichtsbehoerde
	 * @return ImpressumStrukt
	 */
	public function setBerufsaufsichtsbehoerde(string $berufsaufsichtsbehoerde) {
		$this->berufsaufsichtsbehoerde = $berufsaufsichtsbehoerde;
		return $this;
	}

	/**
	 * @param string $firmenanschrift Setter for firmenanschrift
	 * @return ImpressumStrukt
	 */
	public function setFirmenanschrift(string $firmenanschrift) {
		$this->firmenanschrift = $firmenanschrift;
		return $this;
	}

	/**
	 * @param string $firmenname Setter for firmenname
	 * @return ImpressumStrukt
	 */
	public function setFirmenname(string $firmenname) {
		$this->firmenname = $firmenname;
		return $this;
	}

	/**
	 * @param string $handelsregister Setter for handelsregister
	 * @return ImpressumStrukt
	 */
	public function setHandelsregister(string $handelsregister) {
		$this->handelsregister = $handelsregister;
		return $this;
	}

	/**
	 * @param string $handelsregisterNr Setter for handelsregisterNr
	 * @return ImpressumStrukt
	 */
	public function setHandelsregisterNr(string $handelsregisterNr) {
		$this->handelsregisterNr = $handelsregisterNr;
		return $this;
	}

	/**
	 * @param string $steuernummer Setter for steuernummer
	 * @return ImpressumStrukt
	 */
	public function setSteuernummer(string $steuernummer) {
		$this->steuernummer = $steuernummer;
		return $this;
	}

	/**
	 * @param string $telefon Setter for telefon
	 * @return ImpressumStrukt
	 */
	public function setTelefon(string $telefon) {
		$this->telefon = $telefon;
		return $this;
	}

	/**
	 * @param string $umsstId Setter for umsstId
	 * @return ImpressumStrukt
	 */
	public function setUmsstId(string $umsstId) {
		$this->umsstId = $umsstId;
		return $this;
	}

	/**
	 * @param string $vertretungsberechtigter Setter for vertretungsberechtigter
	 * @return ImpressumStrukt
	 */
	public function setVertretungsberechtigter(string $vertretungsberechtigter) {
		$this->vertretungsberechtigter = $vertretungsberechtigter;
		return $this;
	}

	/**
	 * @param string $weiteres Setter for weiteres
	 * @return ImpressumStrukt
	 */
	public function setWeiteres(string $weiteres) {
		$this->weiteres = $weiteres;
		return $this;
	}
}
