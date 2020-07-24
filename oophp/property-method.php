
<?php
//Property dan Method
class Mesjid{
	public $imam="imam";
	public $makmum="makmum";
	
	public function surau()
	{
		return "$this->imam, $this->makmum";
	}

}
$tempatibadah = new Mesjid();
$tempatibadah->imam="K. ABDULLAH";
$tempatibadah->makmum="Ny. Mazida";

echo "$tempatibadah->imam, $tempatibadah->makmum";

?>