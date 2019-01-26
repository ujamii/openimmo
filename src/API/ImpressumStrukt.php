<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class ImpressumStrukt {

	/**
	 * @var string
	 */
	protected $berufsaufsichtsbehoerde;

	/**
	 * @var string
	 */
	protected $firmenanschrift;

	/**
	 * @var string
	 */
	protected $firmenname;

	/**
	 * @var string
	 */
	protected $handelsregister;

	/**
	 * @var string
	 */
	protected $handelsregisterNr;

	/**
	 * @var string
	 */
	protected $steuernummer;

	/**
	 * @var string
	 */
	protected $telefon;

	/**
	 * @var string
	 */
	protected $umsstId;

	/**
	 * @var string
	 */
	protected $vertretungsberechtigter;

	/**
	 * @var string
	 */
	protected $weiteres;

	/**
	 * @return string
	 */
	public function getBerufsaufsichtsbehoerde() {
		return $this->berufsaufsichtsbehoerde;
	}

	/**
	 * @return string
	 */
	public function getFirmenanschrift() {
		return $this->firmenanschrift;
	}

	/**
	 * @return string
	 */
	public function getFirmenname() {
		return $this->firmenname;
	}

	/**
	 * @return string
	 */
	public function getHandelsregister() {
		return $this->handelsregister;
	}

	/**
	 * @return string
	 */
	public function getHandelsregisterNr() {
		return $this->handelsregisterNr;
	}

	/**
	 * @return string
	 */
	public function getSteuernummer() {
		return $this->steuernummer;
	}

	/**
	 * @return string
	 */
	public function getTelefon() {
		return $this->telefon;
	}

	/**
	 * @return string
	 */
	public function getUmsstId() {
		return $this->umsstId;
	}

	/**
	 * @return string
	 */
	public function getVertretungsberechtigter() {
		return $this->vertretungsberechtigter;
	}

	/**
	 * @return string
	 */
	public function getWeiteres() {
		return $this->weiteres;
	}

	/**
	 * @param string $berufsaufsichtsbehoerde Setter for berufsaufsichtsbehoerde
	 * @return ImpressumStrukt
	 */
	public function setBerufsaufsichtsbehoerde($berufsaufsichtsbehoerde) {
		$this->berufsaufsichtsbehoerde = $berufsaufsichtsbehoerde;
		return $this;
	}

	/**
	 * @param string $firmenanschrift Setter for firmenanschrift
	 * @return ImpressumStrukt
	 */
	public function setFirmenanschrift($firmenanschrift) {
		$this->firmenanschrift = $firmenanschrift;
		return $this;
	}

	/**
	 * @param string $firmenname Setter for firmenname
	 * @return ImpressumStrukt
	 */
	public function setFirmenname($firmenname) {
		$this->firmenname = $firmenname;
		return $this;
	}

	/**
	 * @param string $handelsregister Setter for handelsregister
	 * @return ImpressumStrukt
	 */
	public function setHandelsregister($handelsregister) {
		$this->handelsregister = $handelsregister;
		return $this;
	}

	/**
	 * @param string $handelsregisterNr Setter for handelsregisterNr
	 * @return ImpressumStrukt
	 */
	public function setHandelsregisterNr($handelsregisterNr) {
		$this->handelsregisterNr = $handelsregisterNr;
		return $this;
	}

	/**
	 * @param string $steuernummer Setter for steuernummer
	 * @return ImpressumStrukt
	 */
	public function setSteuernummer($steuernummer) {
		$this->steuernummer = $steuernummer;
		return $this;
	}

	/**
	 * @param string $telefon Setter for telefon
	 * @return ImpressumStrukt
	 */
	public function setTelefon($telefon) {
		$this->telefon = $telefon;
		return $this;
	}

	/**
	 * @param string $umsstId Setter for umsstId
	 * @return ImpressumStrukt
	 */
	public function setUmsstId($umsstId) {
		$this->umsstId = $umsstId;
		return $this;
	}

	/**
	 * @param string $vertretungsberechtigter Setter for vertretungsberechtigter
	 * @return ImpressumStrukt
	 */
	public function setVertretungsberechtigter($vertretungsberechtigter) {
		$this->vertretungsberechtigter = $vertretungsberechtigter;
		return $this;
	}

	/**
	 * @param string $weiteres Setter for weiteres
	 * @return ImpressumStrukt
	 */
	public function setWeiteres($weiteres) {
		$this->weiteres = $weiteres;
		return $this;
	}
}
