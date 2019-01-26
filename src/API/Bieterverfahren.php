<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class Bieterverfahren {

	/**
	 * @var date
	 */
	protected $beginnAngebotsphase;

	/**
	 * @var dateTime
	 */
	protected $beginnBietzeit;

	/**
	 * @var date
	 */
	protected $besichtigungstermin;

	/**
	 * @var date
	 */
	protected $besichtigungstermin2;

	/**
	 * @var date
	 */
	protected $endeBietzeit;

	/**
	 * @var boolean
	 */
	protected $hoechstgebotZeigen;

	/**
	 * @var decimal
	 */
	protected $mindestpreis;

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
	 * @return date
	 */
	public function getBeginnAngebotsphase(): date {
		return $this->beginnAngebotsphase;
	}

	/**
	 * @return dateTime
	 */
	public function getBeginnBietzeit(): dateTime {
		return $this->beginnBietzeit;
	}

	/**
	 * @return date
	 */
	public function getBesichtigungstermin(): date {
		return $this->besichtigungstermin;
	}

	/**
	 * @return date
	 */
	public function getBesichtigungstermin2(): date {
		return $this->besichtigungstermin2;
	}

	/**
	 * @return date
	 */
	public function getEndeBietzeit(): date {
		return $this->endeBietzeit;
	}

	/**
	 * @return boolean
	 */
	public function getHoechstgebotZeigen(): bool {
		return $this->hoechstgebotZeigen;
	}

	/**
	 * @return decimal
	 */
	public function getMindestpreis(): decimal {
		return $this->mindestpreis;
	}

	/**
	 * @return UserDefinedAnyfield[]
	 */
	public function getUserDefinedAnyfield(): UserDefinedAnyfield[] {
		return $this->userDefinedAnyfield;
	}

	/**
	 * @return UserDefinedExtend[]
	 */
	public function getUserDefinedExtend(): UserDefinedExtend[] {
		return $this->userDefinedExtend;
	}

	/**
	 * @return UserDefinedSimplefield[]
	 */
	public function getUserDefinedSimplefield(): UserDefinedSimplefield[] {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param date $beginnAngebotsphase Setter for beginnAngebotsphase
	 * @return Bieterverfahren
	 */
	public function setBeginnAngebotsphase(date $beginnAngebotsphase) {
		$this->beginnAngebotsphase = $beginnAngebotsphase;
		return $this;
	}

	/**
	 * @param dateTime $beginnBietzeit Setter for beginnBietzeit
	 * @return Bieterverfahren
	 */
	public function setBeginnBietzeit(dateTime $beginnBietzeit) {
		$this->beginnBietzeit = $beginnBietzeit;
		return $this;
	}

	/**
	 * @param date $besichtigungstermin Setter for besichtigungstermin
	 * @return Bieterverfahren
	 */
	public function setBesichtigungstermin(date $besichtigungstermin) {
		$this->besichtigungstermin = $besichtigungstermin;
		return $this;
	}

	/**
	 * @param date $besichtigungstermin2 Setter for besichtigungstermin2
	 * @return Bieterverfahren
	 */
	public function setBesichtigungstermin2(date $besichtigungstermin2) {
		$this->besichtigungstermin2 = $besichtigungstermin2;
		return $this;
	}

	/**
	 * @param date $endeBietzeit Setter for endeBietzeit
	 * @return Bieterverfahren
	 */
	public function setEndeBietzeit(date $endeBietzeit) {
		$this->endeBietzeit = $endeBietzeit;
		return $this;
	}

	/**
	 * @param boolean $hoechstgebotZeigen Setter for hoechstgebotZeigen
	 * @return Bieterverfahren
	 */
	public function setHoechstgebotZeigen(bool $hoechstgebotZeigen) {
		$this->hoechstgebotZeigen = $hoechstgebotZeigen;
		return $this;
	}

	/**
	 * @param decimal $mindestpreis Setter for mindestpreis
	 * @return Bieterverfahren
	 */
	public function setMindestpreis(decimal $mindestpreis) {
		$this->mindestpreis = $mindestpreis;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Bieterverfahren
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Bieterverfahren
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Bieterverfahren
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
