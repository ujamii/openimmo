<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class ObjektText
 * Beschreibung in anderer Sprache. "lang" Attribut muss dann vorhanden sein. W3- Language Code Description in other Languages
 *
 * @package Ujamii\OpenImmo\API
 * @XmlRoot("objekt_text") 
 */
class ObjektText {

	/**
	 * required
	 *
	 * @Type("string") 
	 * @XmlAttribute 
	 * @var string
	 */
	protected $lang;

	/**
	 * @return string
	 */
	public function getLang(): string {
		return $this->lang;
	}

	/**
	 * @param string $lang Setter for lang
	 * @return ObjektText
	 */
	public function setLang(string $lang) {
		$this->lang = $lang;
		return $this;
	}
}
