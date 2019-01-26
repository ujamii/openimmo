<?php
namespace Ujamii\OpenImmo\API;

/**
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
	public function getAusblick() {
		return $this->ausblick;
	}

	/**
	 * @return Distanzen[]
	 */
	public function getDistanzen() {
		return $this->distanzen;
	}

	/**
	 * @return DistanzenSport[]
	 */
	public function getDistanzenSport() {
		return $this->distanzenSport;
	}

	/**
	 * @return UserDefinedAnyfield[]
	 */
	public function getUserDefinedAnyfield() {
		return $this->userDefinedAnyfield;
	}

	/**
	 * @return UserDefinedExtend[]
	 */
	public function getUserDefinedExtend() {
		return $this->userDefinedExtend;
	}

	/**
	 * @return UserDefinedSimplefield[]
	 */
	public function getUserDefinedSimplefield() {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @return boolean
	 */
	public function getZulieferung() {
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
	public function setZulieferung($zulieferung) {
		$this->zulieferung = $zulieferung;
		return $this;
	}
}
