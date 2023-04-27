<?php

class Mahasiswa {

	public string $nim;
	public string $nama;

	public function setNim(string $a) {
		$this->nim = $a;
	}

	public function setNama(string $nama) {
		$this->nama = $nama;
	}

	public function getNim() {
		return $this->nim;
	}
}

$mhsw = new Mahasiswa();
$mhsw->setNim("2207101079");
$mhsw->setNama("Eko Budiyanto");

echo "<p>" .$mhsw->getNim()."</p>";
echo "<p>" .$mhsw->getNama()."</p>";