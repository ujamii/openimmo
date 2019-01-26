<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Openimmo
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("openimmo") 
 */
class Openimmo {

	/**
	 * @XmlList(inline = true, entry = "anbieter") 
	 * @var Anbieter[]
	 */
	protected $anbieter;

	/**
	 * @var Uebertragung
	 */
	protected $uebertragung;

	/**
	 * @XmlList(inline = true, entry = "user_defined_anyfield") 
	 * @var UserDefinedAnyfield[]
	 */
	protected $userDefinedAnyfield;

	/**
	 * @XmlList(inline = true, entry = "user_defined_simplefield") 
	 * @var UserDefinedSimplefield[]
	 */
	protected $userDefinedSimplefield;

	/**
	 * Returns array of Anbieter
	 *
	 * @return array
	 */
	public function getAnbieter(): array {
		return $this->anbieter;
	}

	/**
	 * @return Uebertragung
	 */
	public function getUebertragung(): Uebertragung {
		return $this->uebertragung;
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
	 * Returns array of UserDefinedSimplefield
	 *
	 * @return array
	 */
	public function getUserDefinedSimplefield(): array {
		return $this->userDefinedSimplefield;
	}

	/**
	 * @param array $anbieter Setter for anbieter
	 * @return Openimmo
	 */
	public function setAnbieter(array $anbieter) {
		$this->anbieter = $anbieter;
		return $this;
	}

	/**
	 * @param Uebertragung $uebertragung Setter for uebertragung
	 * @return Openimmo
	 */
	public function setUebertragung(Uebertragung $uebertragung) {
		$this->uebertragung = $uebertragung;
		return $this;
	}

	/**
	 * @param array $userDefinedAnyfield Setter for userDefinedAnyfield
	 * @return Openimmo
	 */
	public function setUserDefinedAnyfield(array $userDefinedAnyfield) {
		$this->userDefinedAnyfield = $userDefinedAnyfield;
		return $this;
	}

	/**
	 * @param array $userDefinedSimplefield Setter for userDefinedSimplefield
	 * @return Openimmo
	 */
	public function setUserDefinedSimplefield(array $userDefinedSimplefield) {
		$this->userDefinedSimplefield = $userDefinedSimplefield;
		return $this;
	}
}
