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
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("FLACHDACH") 
	 * @var bool
	 */
	protected $flachdach;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("KRUEPPELWALMDACH") 
	 * @var bool
	 */
	protected $krueppelwalmdach;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("MANSARDDACH") 
	 * @var bool
	 */
	protected $mansarddach;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("PULTDACH") 
	 * @var bool
	 */
	protected $pultdach;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("PYRAMIDENDACH") 
	 * @var bool
	 */
	protected $pyramidendach;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("SATTELDACH") 
	 * @var bool
	 */
	protected $satteldach;

	/**
	 * optional
	 *
	 * @Type("bool") 
	 * @XmlAttribute 
	 * @SerializedName("WALMDACH") 
	 * @var bool
	 */
	protected $walmdach;

	/**
	 * @return bool
	 */
	public function getFlachdach(): ?bool {
		return $this->flachdach;
	}

	/**
	 * @return bool
	 */
	public function getKrueppelwalmdach(): ?bool {
		return $this->krueppelwalmdach;
	}

	/**
	 * @return bool
	 */
	public function getMansarddach(): ?bool {
		return $this->mansarddach;
	}

	/**
	 * @return bool
	 */
	public function getPultdach(): ?bool {
		return $this->pultdach;
	}

	/**
	 * @return bool
	 */
	public function getPyramidendach(): ?bool {
		return $this->pyramidendach;
	}

	/**
	 * @return bool
	 */
	public function getSatteldach(): ?bool {
		return $this->satteldach;
	}

	/**
	 * @return bool
	 */
	public function getWalmdach(): ?bool {
		return $this->walmdach;
	}

	/**
	 * @param bool $flachdach Setter for flachdach
	 * @return Dachform
	 */
	public function setFlachdach(?bool $flachdach) {
		$this->flachdach = $flachdach;
		return $this;
	}

	/**
	 * @param bool $krueppelwalmdach Setter for krueppelwalmdach
	 * @return Dachform
	 */
	public function setKrueppelwalmdach(?bool $krueppelwalmdach) {
		$this->krueppelwalmdach = $krueppelwalmdach;
		return $this;
	}

	/**
	 * @param bool $mansarddach Setter for mansarddach
	 * @return Dachform
	 */
	public function setMansarddach(?bool $mansarddach) {
		$this->mansarddach = $mansarddach;
		return $this;
	}

	/**
	 * @param bool $pultdach Setter for pultdach
	 * @return Dachform
	 */
	public function setPultdach(?bool $pultdach) {
		$this->pultdach = $pultdach;
		return $this;
	}

	/**
	 * @param bool $pyramidendach Setter for pyramidendach
	 * @return Dachform
	 */
	public function setPyramidendach(?bool $pyramidendach) {
		$this->pyramidendach = $pyramidendach;
		return $this;
	}

	/**
	 * @param bool $satteldach Setter for satteldach
	 * @return Dachform
	 */
	public function setSatteldach(?bool $satteldach) {
		$this->satteldach = $satteldach;
		return $this;
	}

	/**
	 * @param bool $walmdach Setter for walmdach
	 * @return Dachform
	 */
	public function setWalmdach(?bool $walmdach) {
		$this->walmdach = $walmdach;
		return $this;
	}
}
