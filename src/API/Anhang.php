<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Anhang
 * Element für Anhänge
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("anhang") 
 */
class Anhang {

	/**
	 */
	const GRUPPE_ANBIETERLOGO = 'ANBIETERLOGO';

	/**
	 */
	const GRUPPE_ANBOBJURL = 'ANBOBJURL';

	/**
	 */
	const GRUPPE_AUSSENANSICHTEN = 'AUSSENANSICHTEN';

	/**
	 */
	const GRUPPE_BILD = 'BILD';

	/**
	 */
	const GRUPPE_DOKUMENTE = 'DOKUMENTE';

	/**
	 */
	const GRUPPE_EPASS_SKALA = 'EPASS-SKALA';

	/**
	 */
	const GRUPPE_FILM = 'FILM';

	/**
	 */
	const GRUPPE_FILMLINK = 'FILMLINK';

	/**
	 */
	const GRUPPE_GRUNDRISS = 'GRUNDRISS';

	/**
	 */
	const GRUPPE_INNENANSICHTEN = 'INNENANSICHTEN';

	/**
	 */
	const GRUPPE_KARTEN_LAGEPLAN = 'KARTEN_LAGEPLAN';

	/**
	 */
	const GRUPPE_LINKS = 'LINKS';

	/**
	 */
	const GRUPPE_PANORAMA = 'PANORAMA';

	/**
	 */
	const GRUPPE_QRCODE = 'QRCODE';

	/**
	 */
	const GRUPPE_TITELBILD = 'TITELBILD';

	/**
	 */
	const LOCATION_EXTERN = 'EXTERN';

	/**
	 */
	const LOCATION_INTERN = 'INTERN';

	/**
	 */
	const LOCATION_REMOTE = 'REMOTE';

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $anhangtitel;

	/**
	 * @Type("Ujamii\OpenImmo\API\Check") 
	 * @var Check
	 */
	protected $check;

	/**
	 * @Type("Ujamii\OpenImmo\API\Daten") 
	 * @var Daten
	 */
	protected $daten;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $format;

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see GRUPPE_* constants
	 * @var string
	 */
	protected $gruppe;

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see LOCATION_* constants
	 * @var string
	 */
	protected $location;

	/**
	 * @return string
	 */
	public function getAnhangtitel(): string {
		return $this->anhangtitel;
	}

	/**
	 * @return Check
	 */
	public function getCheck(): Check {
		return $this->check;
	}

	/**
	 * @return Daten
	 */
	public function getDaten(): Daten {
		return $this->daten;
	}

	/**
	 * @return string
	 */
	public function getFormat(): string {
		return $this->format;
	}

	/**
	 * @return string
	 */
	public function getGruppe(): string {
		return $this->gruppe;
	}

	/**
	 * @return string
	 */
	public function getLocation(): string {
		return $this->location;
	}

	/**
	 * @param string $anhangtitel Setter for anhangtitel
	 * @return Anhang
	 */
	public function setAnhangtitel(string $anhangtitel) {
		$this->anhangtitel = $anhangtitel;
		return $this;
	}

	/**
	 * @param Check $check Setter for check
	 * @return Anhang
	 */
	public function setCheck(Check $check) {
		$this->check = $check;
		return $this;
	}

	/**
	 * @param Daten $daten Setter for daten
	 * @return Anhang
	 */
	public function setDaten(Daten $daten) {
		$this->daten = $daten;
		return $this;
	}

	/**
	 * @param string $format Setter for format
	 * @return Anhang
	 */
	public function setFormat(string $format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * @param string $gruppe Setter for gruppe
	 * @return Anhang
	 */
	public function setGruppe(string $gruppe) {
		$this->gruppe = $gruppe;
		return $this;
	}

	/**
	 * @param string $location Setter for location
	 * @return Anhang
	 */
	public function setLocation(string $location) {
		$this->location = $location;
		return $this;
	}
}
