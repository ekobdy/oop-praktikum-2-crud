<?php
class scopeMahasiswa {
	public static function setNama(string $nama) {
		return $nama;
	}
}

echo Mahasiswa::setNama('Eko Budiyanto');