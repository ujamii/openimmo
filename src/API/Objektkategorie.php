<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Objektkategorie
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("objektkategorie") 
 */
class Objektkategorie {

	/**
	 * @Type("Ujamii\OpenImmo\API\Nutzungsart") 
	 * @var Nutzungsart
	 */
	protected $nutzungsart;

	/**
	 * @Type("Ujamii\OpenImmo\API\Objektart") 
	 * @var Objektart
	 */
	protected $objektart;

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
	 * @Type("Ujamii\OpenImmo\API\Vermarktungsart") 
	 * @var Vermarktungsart
	 */
	protected $vermarktungsart;

	/**
	 * @return Nutzungsart
	 */
	public function getNutzungsart(): Nutzungsart {
		return $this->nutzungsart;
	}

	/**
	 * @return Objektart
	 */
	public function getObjektart(): Objektart {
		return $this->objektart;
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
	 * @return Vermarktungsart
	 */
	public function getVermarktungsart(): Vermarktungsart {
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
