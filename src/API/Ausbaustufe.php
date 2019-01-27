<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Ausbaustufe
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ausbaustufe") 
 */
class Ausbaustufe {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("AUSBAUHAUS") 
	 * @var boolean
	 */
	protected $ausbauhaus;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("BAUSATZHAUS") 
	 * @var boolean
	 */
	protected $bausatzhaus;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SCHLUESSELFERTIGMITBODENPLATTE") 
	 * @var boolean
	 */
	protected $schluesselfertigmitbodenplatte;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SCHLUESSELFERTIGMITKELLER") 
	 * @var boolean
	 */
	protected $schluesselfertigmitkeller;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SCHLUESSELFERTIGOHNEBODENPLATTE") 
	 * @var boolean
	 */
	protected $schluesselfertigohnebodenplatte;

	/**
	 * @return boolean
	 */
	public function getAusbauhaus(): bool {
		return $this->ausbauhaus;
	}

	/**
	 * @return boolean
	 */
	public function getBausatzhaus(): bool {
		return $this->bausatzhaus;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitbodenplatte(): bool {
		return $this->schluesselfertigmitbodenplatte;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitkeller(): bool {
		return $this->schluesselfertigmitkeller;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigohnebodenplatte(): bool {
		return $this->schluesselfertigohnebodenplatte;
	}

	/**
	 * @param boolean $ausbauhaus Setter for ausbauhaus
	 * @return Ausbaustufe
	 */
	public function setAusbauhaus(bool $ausbauhaus) {
		$this->ausbauhaus = $ausbauhaus;
		return $this;
	}

	/**
	 * @param boolean $bausatzhaus Setter for bausatzhaus
	 * @return Ausbaustufe
	 */
	public function setBausatzhaus(bool $bausatzhaus) {
		$this->bausatzhaus = $bausatzhaus;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitbodenplatte Setter for schluesselfertigmitbodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitbodenplatte(bool $schluesselfertigmitbodenplatte) {
		$this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitkeller Setter for schluesselfertigmitkeller
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitkeller(bool $schluesselfertigmitkeller) {
		$this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigohnebodenplatte Setter for schluesselfertigohnebodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigohnebodenplatte(bool $schluesselfertigohnebodenplatte) {
		$this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
		return $this;
	}
}
