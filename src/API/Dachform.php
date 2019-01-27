<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Dachform
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("dachform") 
 */
class Dachform {

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("FLACHDACH") 
	 * @var boolean
	 */
	protected $flachdach;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("KRUEPPELWALMDACH") 
	 * @var boolean
	 */
	protected $krueppelwalmdach;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("MANSARDDACH") 
	 * @var boolean
	 */
	protected $mansarddach;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("PULTDACH") 
	 * @var boolean
	 */
	protected $pultdach;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("PYRAMIDENDACH") 
	 * @var boolean
	 */
	protected $pyramidendach;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("SATTELDACH") 
	 * @var boolean
	 */
	protected $satteldach;

	/**
	 * optional
	 *
	 * @Type("boolean") 
	 * @XmlAttribute 
	 * @SerializedName("WALMDACH") 
	 * @var boolean
	 */
	protected $walmdach;

	/**
	 * @return boolean
	 */
	public function getFlachdach(): bool {
		return $this->flachdach;
	}

	/**
	 * @return boolean
	 */
	public function getKrueppelwalmdach(): bool {
		return $this->krueppelwalmdach;
	}

	/**
	 * @return boolean
	 */
	public function getMansarddach(): bool {
		return $this->mansarddach;
	}

	/**
	 * @return boolean
	 */
	public function getPultdach(): bool {
		return $this->pultdach;
	}

	/**
	 * @return boolean
	 */
	public function getPyramidendach(): bool {
		return $this->pyramidendach;
	}

	/**
	 * @return boolean
	 */
	public function getSatteldach(): bool {
		return $this->satteldach;
	}

	/**
	 * @return boolean
	 */
	public function getWalmdach(): bool {
		return $this->walmdach;
	}

	/**
	 * @param boolean $flachdach Setter for flachdach
	 * @return Dachform
	 */
	public function setFlachdach(bool $flachdach) {
		$this->flachdach = $flachdach;
		return $this;
	}

	/**
	 * @param boolean $krueppelwalmdach Setter for krueppelwalmdach
	 * @return Dachform
	 */
	public function setKrueppelwalmdach(bool $krueppelwalmdach) {
		$this->krueppelwalmdach = $krueppelwalmdach;
		return $this;
	}

	/**
	 * @param boolean $mansarddach Setter for mansarddach
	 * @return Dachform
	 */
	public function setMansarddach(bool $mansarddach) {
		$this->mansarddach = $mansarddach;
		return $this;
	}

	/**
	 * @param boolean $pultdach Setter for pultdach
	 * @return Dachform
	 */
	public function setPultdach(bool $pultdach) {
		$this->pultdach = $pultdach;
		return $this;
	}

	/**
	 * @param boolean $pyramidendach Setter for pyramidendach
	 * @return Dachform
	 */
	public function setPyramidendach(bool $pyramidendach) {
		$this->pyramidendach = $pyramidendach;
		return $this;
	}

	/**
	 * @param boolean $satteldach Setter for satteldach
	 * @return Dachform
	 */
	public function setSatteldach(bool $satteldach) {
		$this->satteldach = $satteldach;
		return $this;
	}

	/**
	 * @param boolean $walmdach Setter for walmdach
	 * @return Dachform
	 */
	public function setWalmdach(bool $walmdach) {
		$this->walmdach = $walmdach;
		return $this;
	}
}
