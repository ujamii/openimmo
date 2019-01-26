<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Objektkategorie {

	/**
	 * @var Nutzungsart
	 */
	protected $nutzungsart;

	/**
	 * @var Objektart
	 */
	protected $objektart;

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
	 * @var Vermarktungsart
	 */
	protected $vermarktungsart;

	/**
	 * @return Nutzungsart
	 */
	public function getNutzungsart() {
		return $this->nutzungsart;
	}

	/**
	 * @return Objektart
	 */
	public function getObjektart() {
		return $this->objektart;
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
	 * @return Vermarktungsart
	 */
	public function getVermarktungsart() {
		return $this->vermarktungsart;
	}

	/**
	 * @param Nutzungsart $nutzungsart Setter for nutzungsart
	 * @return Objektkategorie
	 */
	public function setNutzungsart(Nutzungsart $nutzungsart) {
		$this->nutzungsart = $nutzungsart;
		return $this;
	}

	/**
	 * @param Objektart $objektart Setter for objektart
	 * @return Objektkategorie
	 */
	public function setObjektart(Objektart $objektart) {
		$this->objektart = $objektart;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Objektkategorie
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedExtend Setter for userDefinedExtend
	 * @return Objektkategorie
	 */
	public function setUserDefinedExtend(array $userDefinedExtend) {
		$this->userDefinedExtend = $userDefinedExtend;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Objektkategorie
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}

	/**
	 * @param Vermarktungsart $vermarktungsart Setter for vermarktungsart
	 * @return Objektkategorie
	 */
	public function setVermarktungsart(Vermarktungsart $vermarktungsart) {
		$this->vermarktungsart = $vermarktungsart;
		return $this;
	}
}
