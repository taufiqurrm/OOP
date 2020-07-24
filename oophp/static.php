<?php 
// class uimStatic{
// 	public static $numb = 1;

// 	public static function kampus() {
// 		return "Kampus Hijau " . self::$numb++ . " Fakultas.";
// 	}
// }

// echo uimStatic::$numb;
// echo "<br>";
// echo uimStatic::kampus();
// echo "<br>";

class uimStatic{
	public static $numb = 1;

	public function kampus() {
		return "Kampus Hijau " . self::$numb++ . " Fakultas. <br>";
	}
}

$duta = new uimStatic;
echo $duta->kampus();
echo $duta->kampus();
echo $duta->kampus();

echo "<hr>";
$duta2 = new uimStatic;
echo $duta2->kampus();
echo $duta2->kampus();
echo $duta2->kampus();
