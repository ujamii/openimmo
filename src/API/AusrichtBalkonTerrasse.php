<?php
namespace Ujamii\OpenImmo\API;

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
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("NORD") 
	 * @var bool
	 */
	protected $nord;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("NORDOST") 
	 * @var bool
	 */
	protected $nordost;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("NORDWEST") 
	 * @var bool
	 */
	protected $nordwest;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("OST") 
	 * @var bool
	 */
	protected $ost;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("SUED") 
	 * @var bool
	 */
	protected $sued;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("SUEDOST") 
	 * @var bool
	 */
	protected $suedost;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("SUEDWEST") 
	 * @var bool
	 */
	protected $suedwest;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WEST") 
	 * @var bool
	 */
	protected $west;

	/**
	 * @return bool
	 */
	public function getNord(): ?bool {
		return $this->nord;
	}

	/**
	 * @return bool
	 */
	public function getNordost(): ?bool {
		return $this->nordost;
	}

	/**
	 * @return bool
	 */
	public function getNordwest(): ?bool {
		return $this->nordwest;
	}

	/**
	 * @return bool
	 */
	public function getOst(): ?bool {
		return $this->ost;
	}

	/**
	 * @return bool
	 */
	public function getSued(): ?bool {
		return $this->sued;
	}

	/**
	 * @return bool
	 */
	public function getSuedost(): ?bool {
		return $this->suedost;
	}

	/**
	 * @return bool
	 */
	public function getSuedwest(): ?bool {
		return $this->suedwest;
	}

	/**
	 * @return bool
	 */
	public function getWest(): ?bool {
		return $this->west;
	}

	/**
	 * @param bool $nord Setter for nord
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNord(?bool $nord) {
		$this->nord = $nord;
		return $this;
	}

	/**
	 * @param bool $nordost Setter for nordost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordost(?bool $nordost) {
		$this->nordost = $nordost;
		return $this;
	}

	/**
	 * @param bool $nordwest Setter for nordwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordwest(?bool $nordwest) {
		$this->nordwest = $nordwest;
		return $this;
	}

	/**
	 * @param bool $ost Setter for ost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setOst(?bool $ost) {
		$this->ost = $ost;
		return $this;
	}

	/**
	 * @param bool $sued Setter for sued
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSued(?bool $sued) {
		$this->sued = $sued;
		return $this;
	}

	/**
	 * @param bool $suedost Setter for suedost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedost(?bool $suedost) {
		$this->suedost = $suedost;
		return $this;
	}

	/**
	 * @param bool $suedwest Setter for suedwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedwest(?bool $suedwest) {
		$this->suedwest = $suedwest;
		return $this;
	}

	/**
	 * @param bool $west Setter for west
	 * @return AusrichtBalkonTerrasse
	 */
	public function setWest(?bool $west) {
		$this->west = $west;
		return $this;
	}
}
