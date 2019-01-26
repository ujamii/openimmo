<?php
namespace Ujamii\OpenImmo\API;

/**
 * @package Ujamii\OpenImmo\API
 */
class ObjektText {

	/**
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
