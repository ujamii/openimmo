<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class BebaubarNach
 * Bebaubar nach Bebauungsrichtlinien, Optionen nicht kombinierbar
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("bebaubar_nach") 
 */
class BebaubarNach {

	/**
	 */
	const BEBAUBAR_ATTR_34_NACHBARSCHAFT = '34_NACHBARSCHAFT';

	/**
	 */
	const BEBAUBAR_ATTR_35_AUSSENGEBIET = '35_AUSSENGEBIET';

	/**
	 */
	const BEBAUBAR_ATTR_B_PLAN = 'B_PLAN';

	/**
	 */
	const BEBAUBAR_ATTR_BAUERWARTUNGSLAND = 'BAUERWARTUNGSLAND';

	/**
	 */
	const BEBAUBAR_ATTR_BAULAND_OHNE_B_PLAN = 'BAULAND_OHNE_B_PLAN';

	/**
	 */
	const BEBAUBAR_ATTR_KEIN_BAULAND = 'KEIN BAULAND';

	/**
	 */
	const BEBAUBAR_ATTR_LAENDERSPEZIFISCH = 'LAENDERSPEZIFISCH';

	/**
	 * optional
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @see BEBAUBAR_ATTR_* constants
	 * @var string
	 */
	protected $bebaubarAttr;

	/**
	 * @return string
	 */
	public function getBebaubarAttr(): string {
		return $this->bebaubarAttr;
	}

	/**
	 * @param string $bebaubarAttr Setter for bebaubarAttr
	 * @return BebaubarNach
	 */
	public function setBebaubarAttr(string $bebaubarAttr) {
		$this->bebaubarAttr = $bebaubarAttr;
		return $this;
	}
}
