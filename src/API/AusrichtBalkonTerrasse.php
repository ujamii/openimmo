<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AusrichtBalkonTerrasse
 * Ausrichtung der Balkone bzw. der Terrassen, Optionen kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ausricht_balkon_terrasse") 
 */
class AusrichtBalkonTerrasse {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("NORD") 
	 * @var boolean
	 */
	protected $nord;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("NORDOST") 
	 * @var boolean
	 */
	protected $nordost;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("NORDWEST") 
	 * @var boolean
	 */
	protected $nordwest;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("OST") 
	 * @var boolean
	 */
	protected $ost;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SUED") 
	 * @var boolean
	 */
	protected $sued;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SUEDOST") 
	 * @var boolean
	 */
	protected $suedost;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SUEDWEST") 
	 * @var boolean
	 */
	protected $suedwest;

	/**
	 * @Inline 
	 * @Type("string") 
	 * @var string
	 */
	protected $value;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("WEST") 
	 * @var boolean
	 */
	protected $west;

	/**
	 * @param boolean $nord Shortcut setter for nord
	 * @param boolean $ost Shortcut setter for ost
	 * @param boolean $sued Shortcut setter for sued
	 * @param boolean $west Shortcut setter for west
	 * @param boolean $nordost Shortcut setter for nordost
	 * @param boolean $nordwest Shortcut setter for nordwest
	 * @param boolean $suedost Shortcut setter for suedost
	 * @param boolean $suedwest Shortcut setter for suedwest
	 * @param string $value the actual value
	 */
	public function __construct(bool $nord = null, bool $ost = null, bool $sued = null, bool $west = null, bool $nordost = null, bool $nordwest = null, bool $suedost = null, bool $suedwest = null, string $value = null) {
		$this->nord = $nord;
		$this->ost = $ost;
		$this->sued = $sued;
		$this->west = $west;
		$this->nordost = $nordost;
		$this->nordwest = $nordwest;
		$this->suedost = $suedost;
		$this->suedwest = $suedwest;
		$this->value = $value;
	}

	/**
	 * @return boolean
	 */
	public function getNord(): ?bool {
		return $this->nord;
	}

	/**
	 * @return boolean
	 */
	public function getNordost(): ?bool {
		return $this->nordost;
	}

	/**
	 * @return boolean
	 */
	public function getNordwest(): ?bool {
		return $this->nordwest;
	}

	/**
	 * @return boolean
	 */
	public function getOst(): ?bool {
		return $this->ost;
	}

	/**
	 * @return boolean
	 */
	public function getSued(): ?bool {
		return $this->sued;
	}

	/**
	 * @return boolean
	 */
	public function getSuedost(): ?bool {
		return $this->suedost;
	}

	/**
	 * @return boolean
	 */
	public function getSuedwest(): ?bool {
		return $this->suedwest;
	}

	/**
	 * @return string
	 */
	public function getValue(): ?string {
		return $this->value;
	}

	/**
	 * @return boolean
	 */
	public function getWest(): ?bool {
		return $this->west;
	}

	/**
	 * @param boolean $nord Setter for nord
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNord(?bool $nord) {
		$this->nord = $nord;
		return $this;
	}

	/**
	 * @param boolean $nordost Setter for nordost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordost(?bool $nordost) {
		$this->nordost = $nordost;
		return $this;
	}

	/**
	 * @param boolean $nordwest Setter for nordwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordwest(?bool $nordwest) {
		$this->nordwest = $nordwest;
		return $this;
	}

	/**
	 * @param boolean $ost Setter for ost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setOst(?bool $ost) {
		$this->ost = $ost;
		return $this;
	}

	/**
	 * @param boolean $sued Setter for sued
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSued(?bool $sued) {
		$this->sued = $sued;
		return $this;
	}

	/**
	 * @param boolean $suedost Setter for suedost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedost(?bool $suedost) {
		$this->suedost = $suedost;
		return $this;
	}

	/**
	 * @param boolean $suedwest Setter for suedwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedwest(?bool $suedwest) {
		$this->suedwest = $suedwest;
		return $this;
	}

	/**
	 * @param string $value Setter for value
	 * @return AusrichtBalkonTerrasse
	 */
	public function setValue(?string $value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * @param boolean $west Setter for west
	 * @return AusrichtBalkonTerrasse
	 */
	public function setWest(?bool $west) {
		$this->west = $west;
		return $this;
	}
}
