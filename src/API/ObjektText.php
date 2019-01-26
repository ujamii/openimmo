<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class ObjektText {

	/**
	 * @var string
	 */
	protected $lang;

	/**
	 * @return string
	 */
	public function getLang() {
		return $this->lang;
	}

	/**
	 * @param string $lang Setter for lang
	 * @return ObjektText
	 */
	public function setLang($lang) {
		$this->lang = $lang;
		return $this;
	}
}
