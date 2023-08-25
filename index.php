<?php
function Sum(float  $arg1, float  $arg2): float  {
	return $arg1 + $arg2;
}

function Math(float $arg1, string $operation, float $arg2 = null): ?float {
	return match ($operation) {
		'+' => $arg1 + $arg2,
		'-' => $arg1 - $arg2,
		'*' => $arg1 * $arg2,
		'/' => $arg1 / $arg2,
		'^' => $arg1 ** $arg2,
		'!' => (gettype($arg1) == 'integer') ? Factorial($arg1) : null,
		default => null
	};
}

function Factorial(int $arg): int {
	$fact = 1;
	for ($i = 1; $i <= $arg; $i++) {
		$fact *= $i;
	}
	return $fact;
}

// echo Sum(2, 46), ' ', Sum(5.67, 4.6);
echo Math(2, '+', 3), ' ', Math(17, '-', 10), ' ', Math(12, '*', 4), ' ', Math(12, '/', 4), ' ', Math(2, '^', 3), ' ', Math(5, '!'), ' ', Math(3, '+'), ' ', Math(3, 'a', 2);


function CartesianProduct(array $A, array $B): array {
	$result = [];
	foreach($A as $a) {
		foreach($B as $b) {
			$result[] = [$a, $b];
		}
	}
// 	for ($i = 0; $i < count($A); $i++) {
// 		for ($j = 0; $j < count($B); $j++) {
// 		    echo $A[$i], $B[$j], ' ';
// 			array_push($result, array($A[$i], $B[$j]));
// 		}
// 	}
	return $result;
}

var_dump(CartesianProduct([1, 2, 3, 4], [5, 8, 9]));

class Matrices {
	public static function Sum(array $array1,array $array2): array|bool {
		if (count($array1) !== count($array2)) return false;

		$count_item1 = count($array1[0]);
		$count_item2 = count($array2[0]);
		foreach ($array1 as $item1) {
			if ($count_item1 !== count($item1)) return false;
			foreach ($array2 as $item2) {
				if ($count_item2 !== count($item2) || count($item1) !== count($item2)) return false;
			}
		}

		$result = [];

		/*сложение*/

		return $result;
	}

	public static function Product(array $array1,array $array2): array|bool {
		$count_item1 = count($array1[0]);
		$count_item2 = count($array2[0]);

		foreach ($array1 as $item1) if ($count_item1 !== count($item1)) return false;
		foreach ($array2 as $item2) if ($count_item2 !== count($item2)) return false;

		if (count($array1) !== $count_item2 && count($array2) !== $count_item1) return false;

		$result = [];

		/*умножение*/

		return $result;
	}
}
$array1 = [
	[1, 2],
	[2, 4],
	[3, 6],
];
$array2 = [
	[1, 2],
	[2, 4],
	[3, 6],
];

$array3 = [
	[1, 2],
	[2, 4],
	[3, 6],
];
$array4 = [
	[1, 2, 5],
	[2, 4, 1],
];

var_dump(Matrices::Sum($array1, $array2));
var_dump(Matrices::Product($array3, $array4));