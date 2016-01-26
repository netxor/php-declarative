#Задание

###sum.php
Реализуйте функцию sum из видео, используя итеративный процесс.

###product.php
Реализуйте функцию product, которая сворачивает последовательность с помощью переданной функции. Примеры:

    3 == product(1, 2, function($first, $second) { return $first + $second; }) // sum
    -4 == product(1, 3, function($first, $second) { return $first - $second; }) // minus
