<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Infrastruktur
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("infrastruktur") 
 */
class Infrastruktur {

	/**
	 * @Type("Ujamii\OpenImmo\API\Ausblick") 
	 * @var Ausblick
	 */
	protected $ausblick;

	/**
	 * @XmlList(inline = true, entry = "distanzen") 
	 * @Type("array<Ujamii\OpenImmo\API\Distanzen>") 
	 * @var Distanzen[]
	 */
	protected $distanzen;

	/**
	 * @XmlList(inline = true, entry = "distanzen_sport") 
	 * @Type("array<Ujamii\OpenImmo\API\DistanzenSport>") 
	 * @var DistanzenSport[]
	 */
	protected $distanzenSport;

	/**
	 * @XmlList(inline = true, entry = "user_defined_anyfield") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedAnyfield>") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList(inline = true, entry = "user_defined_extend") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedExtend>") 
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @XmlList(inline = true, entry = "user_defined_simplefield") 
	 * @Type("array<Ujamii\OpenImmo\API\UserDefinedSimplefield>") 
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * @Type("boolean") 
	 * @var boolean
	 */
	protected $zulieferung;

	/**
	 * @return Ausblick
	 */
	public function getAusblick(): Ausblick {
		return $this->ausblick;
	}

	/**
	 * Returns array of Distanzen
	 *
	 * @return array
	 */
	public function getDistanzen(): array {
		return $this->distanzen;
	}

	/**
	 * Returns array of DistanzenSport
	 *
	 * @return array
	 */
	public function getDistanzenSport(): array {
		return $this->distanzenSport;
	}

	/**
	 * Returns array of UserDefinedAnyfield
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return boolean
	 */
	public function getZulieferung(): bool {
		return $this->zulieferung;
	}

	/**
	 * @param Ausblick $ausblick Setter for ausblick
	 * @return Infrastruktur
	 */
	public function setAusblick(Ausblick $ausblick) {
		$this->ausblick = $ausblick;
		return $this;
	}

	/**
	 * @param array $distanzen Setter for distanzen
	 * @return Infrastruktur
	 */
	public function setDistanzen(array $distanzen) {
		$this->distanzen = $distanzen;
		return $this;
	}

	/**
	 * @param array $distanzenSport Setter for distanzenSport
	 * @return Infrastruktur
	 */
	public function setDistanzenSport(array $distanzenSport) {
		$this->distanzenSport = $distanzenSport;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Infrastruktur
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Infrastruktur
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Infrastruktur
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param boolean $zulieferung Setter for zulieferung
	 * @return Infrastruktur
	 */
	public function setZulieferung(bool $zulieferung) {
		$this->zulieferung = $zulieferung;
		return $this;
	}
}
