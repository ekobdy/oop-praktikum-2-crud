<?php
class instanceMahasiswa {
	public string $nim;
	public string $nama;
	public static string $agama="Islam";

	public function setNim(string $nim) {
		return $nim;
	}

	public function setNama(string $b) {
		return $this->nama = $b;
	}

	public function getNama() {
		return $this->nama;
	}

	public static function getAgama() {
		return self::$agama;
	}
}

$mhsw = new instanceMahasiswa();
echo $mhsw->setNim('2207101079');
$mhsw->setNama('Eko Budiyanto');
echo $mhsw->getNama();
echo $mhsw->getAgama();