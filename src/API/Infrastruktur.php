<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Infrastruktur {

	/**
	 * @var Ausblick
	 */
	protected $ausblick;

	/**
	 * @var Distanzen[]
	 */
	protected $distanzen;

	/**
	 * @var DistanzenSport[]
	 */
	protected $distanzenSport;

	/**
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @var UserDefinedExtend[]
	 */
	protected $userDefinedExtend;

	/**
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
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
	 * Returns array of Distanzen[]
	 *
	 * @return array
	 */
	public function getDistanzen(): array {
		return $this->distanzen;
	}

	/**
	 * Returns array of DistanzenSport[]
	 *
	 * @return array
	 */
	public function getDistanzenSport(): array {
		return $this->distanzenSport;
	}

	/**
	 * Returns array of UserDefinedAnyfield[]
	 *
	 * @return array
	 */
	public function getUserDefinedAnyfield(): array {
		return $this->userDefinedAnyfield;
	}

	/**
	 * Returns array of UserDefinedExtend[]
	 *
	 * @return array
	 */
	public function getUserDefinedExtend(): array {
		return $this->userDefinedExtend;
	}

	/**
	 * Returns array of UserDefinedSimplefield[]
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
