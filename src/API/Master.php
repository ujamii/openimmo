<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Master
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("master") 
 */
class Master {

	/**
	 * @XmlAttribute 
	 * @var boolean
	 */
	protected $visible;

	/**
	 * @return boolean
	 */
	public function getVisible(): bool {
		return $this->visible;
	}

	/**
	 * @param boolean $visible Setter for visible
	 * @return Master
	 */
	public function setVisible(bool $visible) {
		$this->visible = $visible;
		return $this;
	}
}
