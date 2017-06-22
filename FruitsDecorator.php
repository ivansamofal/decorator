<?
abstract class FruitsDecorator implements Fruits{
	protected $decoratedFruits;
	public function __construct(Fruits $decoratedFruits){
		$this->decoratedFruits = $decoratedFruits;
	}
	public function getFruit(){
		$this->decoratedFruits->getFruit();
	}
}