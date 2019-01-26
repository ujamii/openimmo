<?php
namespace Ujamii\OpenImmo\API;

/**
 */
class Boden {

	/**
	 * @var boolean
	 */
	protected $dielen;

	/**
	 * @var boolean
	 */
	protected $doppelboden;

	/**
	 * @var boolean
	 */
	protected $estrich;

	/**
	 * @var boolean
	 */
	protected $fertigparkett;

	/**
	 * @var boolean
	 */
	protected $fliesen;

	/**
	 * @var boolean
	 */
	protected $granit;

	/**
	 * @var boolean
	 */
	protected $kunststoff;

	/**
	 * @var boolean
	 */
	protected $laminat;

	/**
	 * @var boolean
	 */
	protected $linoleum;

	/**
	 * @var boolean
	 */
	protected $marmor;

	/**
	 * @var boolean
	 */
	protected $parkett;

	/**
	 * @var boolean
	 */
	protected $stein;

	/**
	 * @var boolean
	 */
	protected $teppich;

	/**
	 * @var boolean
	 */
	protected $terrakotta;

	/**
	 * @return boolean
	 */
	public function getDielen() {
		return $this->dielen;
	}

	/**
	 * @return boolean
	 */
	public function getDoppelboden() {
		return $this->doppelboden;
	}

	/**
	 * @return boolean
	 */
	public function getEstrich() {
		return $this->estrich;
	}

	/**
	 * @return boolean
	 */
	public function getFertigparkett() {
		return $this->fertigparkett;
	}

	/**
	 * @return boolean
	 */
	public function getFliesen() {
		return $this->fliesen;
	}

	/**
	 * @return boolean
	 */
	public function getGranit() {
		return $this->granit;
	}

	/**
	 * @return boolean
	 */
	public function getKunststoff() {
		return $this->kunststoff;
	}

	/**
	 * @return boolean
	 */
	public function getLaminat() {
		return $this->laminat;
	}

	/**
	 * @return boolean
	 */
	public function getLinoleum() {
		return $this->linoleum;
	}

	/**
	 * @return boolean
	 */
	public function getMarmor() {
		return $this->marmor;
	}

	/**
	 * @return boolean
	 */
	public function getParkett() {
		return $this->parkett;
	}

	/**
	 * @return boolean
	 */
	public function getStein() {
		return $this->stein;
	}

	/**
	 * @return boolean
	 */
	public function getTeppich() {
		return $this->teppich;
	}

	/**
	 * @return boolean
	 */
	public function getTerrakotta() {
		return $this->terrakotta;
	}

	/**
	 * @param boolean $dielen Setter for dielen
	 * @return Boden
	 */
	public function setDielen($dielen) {
		$this->dielen = $dielen;
		return $this;
	}

	/**
	 * @param boolean $doppelboden Setter for doppelboden
	 * @return Boden
	 */
	public function setDoppelboden($doppelboden) {
		$this->doppelboden = $doppelboden;
		return $this;
	}

	/**
	 * @param boolean $estrich Setter for estrich
	 * @return Boden
	 */
	public function setEstrich($estrich) {
		$this->estrich = $estrich;
		return $this;
	}

	/**
	 * @param boolean $fertigparkett Setter for fertigparkett
	 * @return Boden
	 */
	public function setFertigparkett($fertigparkett) {
		$this->fertigparkett = $fertigparkett;
		return $this;
	}

	/**
	 * @param boolean $fliesen Setter for fliesen
	 * @return Boden
	 */
	public function setFliesen($fliesen) {
		$this->fliesen = $fliesen;
		return $this;
	}

	/**
	 * @param boolean $granit Setter for granit
	 * @return Boden
	 */
	public function setGranit($granit) {
		$this->granit = $granit;
		return $this;
	}

	/**
	 * @param boolean $kunststoff Setter for kunststoff
	 * @return Boden
	 */
	public function setKunststoff($kunststoff) {
		$this->kunststoff = $kunststoff;
		return $this;
	}

	/**
	 * @param boolean $laminat Setter for laminat
	 * @return Boden
	 */
	public function setLaminat($laminat) {
		$this->laminat = $laminat;
		return $this;
	}

	/**
	 * @param boolean $linoleum Setter for linoleum
	 * @return Boden
	 */
	public function setLinoleum($linoleum) {
		$this->linoleum = $linoleum;
		return $this;
	}

	/**
	 * @param boolean $marmor Setter for marmor
	 * @return Boden
	 */
	public function setMarmor($marmor) {
		$this->marmor = $marmor;
		return $this;
	}

	/**
	 * @param boolean $parkett Setter for parkett
	 * @return Boden
	 */
	public function setParkett($parkett) {
		$this->parkett = $parkett;
		return $this;
	}

	/**
	 * @param boolean $stein Setter for stein
	 * @return Boden
	 */
	public function setStein($stein) {
		$this->stein = $stein;
		return $this;
	}

	/**
	 * @param boolean $teppich Setter for teppich
	 * @return Boden
	 */
	public function setTeppich($teppich) {
		$this->teppich = $teppich;
		return $this;
	}

	/**
	 * @param boolean $terrakotta Setter for terrakotta
	 * @return Boden
	 */
	public function setTerrakotta($terrakotta) {
		$this->terrakotta = $terrakotta;
		return $this;
	}
}
