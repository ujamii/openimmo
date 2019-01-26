<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class AusrichtBalkonTerrasse
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("ausricht_balkon_terrasse") 
 */
class AusrichtBalkonTerrasse {

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $nord;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $nordost;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $nordwest;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $ost;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $sued;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $suedost;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $suedwest;

	/**
	 * optional
	 *
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $west;

	/**
	 * @return boolean
	 */
	public function getNord(): bool {
		return $this->nord;
	}

	/**
	 * @return boolean
	 */
	public function getNordost(): bool {
		return $this->nordost;
	}

	/**
	 * @return boolean
	 */
	public function getNordwest(): bool {
		return $this->nordwest;
	}

	/**
	 * @return boolean
	 */
	public function getOst(): bool {
		return $this->ost;
	}

	/**
	 * @return boolean
	 */
	public function getSued(): bool {
		return $this->sued;
	}

	/**
	 * @return boolean
	 */
	public function getSuedost(): bool {
		return $this->suedost;
	}

	/**
	 * @return boolean
	 */
	public function getSuedwest(): bool {
		return $this->suedwest;
	}

	/**
	 * @return boolean
	 */
	public function getWest(): bool {
		return $this->west;
	}

	/**
	 * @param boolean $nord Setter for nord
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNord(bool $nord) {
		$this->nord = $nord;
		return $this;
	}

	/**
	 * @param boolean $nordost Setter for nordost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordost(bool $nordost) {
		$this->nordost = $nordost;
		return $this;
	}

	/**
	 * @param boolean $nordwest Setter for nordwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setNordwest(bool $nordwest) {
		$this->nordwest = $nordwest;
		return $this;
	}

	/**
	 * @param boolean $ost Setter for ost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setOst(bool $ost) {
		$this->ost = $ost;
		return $this;
	}

	/**
	 * @param boolean $sued Setter for sued
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSued(bool $sued) {
		$this->sued = $sued;
		return $this;
	}

	/**
	 * @param boolean $suedost Setter for suedost
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedost(bool $suedost) {
		$this->suedost = $suedost;
		return $this;
	}

	/**
	 * @param boolean $suedwest Setter for suedwest
	 * @return AusrichtBalkonTerrasse
	 */
	public function setSuedwest(bool $suedwest) {
		$this->suedwest = $suedwest;
		return $this;
	}

	/**
	 * @param boolean $west Setter for west
	 * @return AusrichtBalkonTerrasse
	 */
	public function setWest(bool $west) {
		$this->west = $west;
		return $this;
	}
}
