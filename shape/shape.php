<?php

Interface CanCountPerimeter {
	function perimeter();
	function area();
}

abstract class FlatFigure implements CanCountPerimeter {
	abstract function perimeter();
	abstract function area();

	function __toString() {
		return get_class($this) . PHP_EOL . "Perimeter is equal to " . $this->perimeter() . PHP_EOL . "Area is equal to ". $this->area();
	}
}

class Round extends FlatFigure {

	public $radius;

	function __construct($radius = 0) {
		$this->radius = $radius[0];
	}

	function perimeter() {
		return $this->radius * 2 * M_PI;
	}

	function area() {
		return M_PI * ($this->radius * $this->radius);
	}
}

class Polygon extends FlatFigure {

	public $sizes;

	function __construct($sizes = []) {
		$this->sizes = $sizes;
	}

	function perimeter() {
		return array_sum($this->sizes);
	}

	function area() {
		return pow(array_sum($this->sizes), 2);
	}
}

class Rectangle extends Polygon {

	function perimeter() {
		return 2*($this->sizes[0] + $this->sizes[1]);
	}

	function area() {
		return ($this->sizes[0] * $this->sizes[2]);
	}
}

class Square extends Polygon {

	function perimeter() {
		return 4*($this->sizes[0]);
	}

	function area() {
		return ($this->sizes[0] * $this->sizes[0]);
	}
}

class Triangle extends Polygon {

	function perimeter() {
		return ($this->sizes[0] + $this->sizes[1] + $this->sizes[2]);
	}

	function area() {
		$p = ($this->sizes[0] + $this->sizes[1] + $this->sizes[2]) / 2;
		return sqrt($p*($p - $this->sizes[0]) * ($p - $this->sizes[1]) * ($p - $this->sizes[2]));
	}
}

function createFigure($sizes) {

	if(count($sizes) == 1) {
		return new Round($sizes);
	} elseif(($sizes[0] == $sizes[1]) && (($sizes[2] == $sizes[3]))) {
		return new Square($sizes);
	} elseif ($sizes[0] == $sizes[2] && $sizes[1] == $sizes[3]) {
		return new Rectangle($sizes);
	} elseif(count($sizes) == 3){
		return new Triangle($sizes);
	} else return new Polygon($sizes);
}

	$new_obj1 = createFigure([4, 2, 4, 4, 3, 3, 3, 3]);
	$new_obj2 = createFigure([3]);
	$new_obj3 = createFigure([3, 7, 8]);
	$new_obj4 = createFigure([7, 7, 7, 7]);
	$new_obj5 = createFigure([3, 9, 2, 5]);
	$obj = [$new_obj1, $new_obj2, $new_obj3, $new_obj4, $new_obj5];
	foreach ($obj as $key => $value) {
		echo $value . PHP_EOL;
	}

/*$poly1 = new Square();
$poly1->sizes = [3, 4, 5];
$poly2 = $poly1;
echo $poly2->perimeter() . PHP_EOL;
echo $poly2;*/