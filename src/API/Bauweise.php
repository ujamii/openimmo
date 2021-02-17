<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Bauweise
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bauweise") 
 */
class Bauweise {

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FERTIGTEILE") 
	 * @var bool
	 */
	protected $fertigteile;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("HOLZ") 
	 * @var bool
	 */
	protected $holz;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("MASSIV") 
	 * @var bool
	 */
	protected $massiv;

	/**
	 * @param bool $massiv Shortcut setter for massiv
	 * @param bool $fertigteile Shortcut setter for fertigteile
	 * @param bool $holz Shortcut setter for holz
	 */
	public function __construct(bool $massiv = null, bool $fertigteile = null, bool $holz = null) {
		$this->massiv = $massiv;
		$this->fertigteile = $fertigteile;
		$this->holz = $holz;
	}

	/**
	 * @return bool
	 */
	public function getFertigteile(): ?bool {
		return $this->fertigteile;
	}

	/**
	 * @return bool
	 */
	public function getHolz(): ?bool {
		return $this->holz;
	}

	/**
	 * @return bool
	 */
	public function getMassiv(): ?bool {
		return $this->massiv;
	}

	/**
	 * @param bool $fertigteile Setter for fertigteile
	 * @return Bauweise
	 */
	public function setFertigteile(?bool $fertigteile) {
		$this->fertigteile = $fertigteile;
		return $this;
	}

	/**
	 * @param bool $holz Setter for holz
	 * @return Bauweise
	 */
	public function setHolz(?bool $holz) {
		$this->holz = $holz;
		return $this;
	}

	/**
	 * @param bool $massiv Setter for massiv
	 * @return Bauweise
	 */
	public function setMassiv(?bool $massiv) {
		$this->massiv = $massiv;
		return $this;
	}
}
