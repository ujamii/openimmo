<?php
namespace Ujamii\OpenImmo\API;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Status
 *
 * @XmlRoot("status") 
 */
class Status {

	/**
	 * @Type("int") 
	 * @var int Minimum value (inclusive): -2147483648, Maximum value (inclusive): 2147483647
	 */
	protected $statusnr;

	/**
	 * @Type("string") 
	 * @var string
	 */
	protected $text;

	/**
	 * @param int $statusnr Shortcut setter for statusnr
	 * @param string $text Shortcut setter for text
	 */
	public function __construct(int $statusnr = null, string $text = null) {
		$this->statusnr = $statusnr;
		$this->text = $text;
	}

	/**
	 * @return int
	 */
	public function getStatusnr(): ?int {
		return $this->statusnr;
	}

	/**
	 * @return string
	 */
	public function getText(): ?string {
		return $this->text;
	}

	/**
	 * @param int $statusnr Setter for statusnr
	 * @return Status
	 */
	public function setStatusnr(?int $statusnr) {
		$this->statusnr = $statusnr;
		return $this;
	}

	/**
	 * @param string $text Setter for text
	 * @return Status
	 */
	public function setText(?string $text) {
		$this->text = $text;
		return $this;
	}
}
