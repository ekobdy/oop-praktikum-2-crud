<?php
class Mahasiswa{ 
	public string $nim;
	public string $nama;
	public int $umur;
	private string $email;  
	protected string $nama_ibu; 
	public function setNim(string $a){
		$this->nim = $a;  
	}

	public function setNama(string $b){  
		$this->nama = $b;
	}  
} 


