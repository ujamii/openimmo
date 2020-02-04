<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
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
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * @param boolean $bausatzhaus Shortcut setter for bausatzhaus
	 * @param boolean $ausbauhaus Shortcut setter for ausbauhaus
	 * @param boolean $schluesselfertigmitkeller Shortcut setter for schluesselfertigmitkeller
	 * @param boolean $schluesselfertigohnebodenplatte Shortcut setter for schluesselfertigohnebodenplatte
	 * @param boolean $schluesselfertigmitbodenplatte Shortcut setter for schluesselfertigmitbodenplatte
	 * @param string $value the actual value
	 */
	public function __construct(bool $bausatzhaus = null, bool $ausbauhaus = null, bool $schluesselfertigmitkeller = null, bool $schluesselfertigohnebodenplatte = null, bool $schluesselfertigmitbodenplatte = null, string $value = null) {
		$this->bausatzhaus = $bausatzhaus;
		$this->ausbauhaus = $ausbauhaus;
		$this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
		$this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
		$this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getAusbauhaus(): ?bool {
		return $this->ausbauhaus;
	}

	/**
	 * @return boolean
	 */
	public function getBausatzhaus(): ?bool {
		return $this->bausatzhaus;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitbodenplatte(): ?bool {
		return $this->schluesselfertigmitbodenplatte;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigmitkeller(): ?bool {
		return $this->schluesselfertigmitkeller;
	}

	/**
	 * @return boolean
	 */
	public function getSchluesselfertigohnebodenplatte(): ?bool {
		return $this->schluesselfertigohnebodenplatte;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @param boolean $ausbauhaus Setter for ausbauhaus
	 * @return Ausbaustufe
	 */
	public function setAusbauhaus(?bool $ausbauhaus) {
		$this->ausbauhaus = $ausbauhaus;
		return $this;
	}

	/**
	 * @param boolean $bausatzhaus Setter for bausatzhaus
	 * @return Ausbaustufe
	 */
	public function setBausatzhaus(?bool $bausatzhaus) {
		$this->bausatzhaus = $bausatzhaus;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitbodenplatte Setter for schluesselfertigmitbodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitbodenplatte(?bool $schluesselfertigmitbodenplatte) {
		$this->schluesselfertigmitbodenplatte = $schluesselfertigmitbodenplatte;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigmitkeller Setter for schluesselfertigmitkeller
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigmitkeller(?bool $schluesselfertigmitkeller) {
		$this->schluesselfertigmitkeller = $schluesselfertigmitkeller;
		return $this;
	}

	/**
	 * @param boolean $schluesselfertigohnebodenplatte Setter for schluesselfertigohnebodenplatte
	 * @return Ausbaustufe
	 */
	public function setSchluesselfertigohnebodenplatte(?bool $schluesselfertigohnebodenplatte) {
		$this->schluesselfertigohnebodenplatte = $schluesselfertigohnebodenplatte;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return Ausbaustufe
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}
}
