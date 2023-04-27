<?php

class Mahasiswa {

	private string $nim = "2207101079";
	public string $nama = "Eko Budiyanto";

	public function setNim(string $a) {
		$this->nim = $a;
	}

	class Nilai extends Mahasiswa{
		
		public function getNim() {
		return $this->nim;

	}

	public function getNama() {
		return $this->nama;
	}
}

$mhsw = new Nilai();

echo "<p>" .$mhsw->getNim()."</p>";
echo "<p>" .$mhsw->getNama()."</p>";