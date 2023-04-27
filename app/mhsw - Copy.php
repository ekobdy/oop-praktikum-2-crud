<?php
 class mhsw {
 private $db;
 public function __construct()
     {
   try {
 $this->db = new PDO("mysql:host=localhost;dbname=dbakademik", "root", ""); } catch (PDOException $e) { die ("Error " . $e->getMessage());
        }
    }
    public function tampil()
    {
        $sql = "SELECT * FROM tb_mhsw";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
            }
        return $data;
    }

    public function simpan()
    {
        $sql = "insert into tb_mhsw values ('','".$_GET['nim']."','".$_GET['nama']."','".$_GET['alamat']."')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        echo "DATA BERHASIL DISIMPAN !";
    } 

    public function hapus()
    {
        $sqls = "delete from tb_mhsw where mhsw_id='".$_GET['mhsw_id']."'";
        $stmts = $this->db->prepare($sqls);
        $stmts->execute();
        echo "DATA BERHASIL DIHAPUS !";
    }      
    public function tampil_update()
    {
        $sql = "SELECT * FROM tb_mhsw where mhsw_id='".$_GET['mhsw_id']."'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
            }
        return $data;
    }
    public function update($id, $nim,$nama,$alamat)
    {
		
        {
            $sql="UPDATE tb_mhsw SET mhsw_nim=:mhsw_nim, mhsw_nama=:mhsw_nama, mhsw_alamat=:mhsw_alamat WHERE mhsw_id=:mhsw_id";
            $stmt=$this->db->prepare($sql);
            $stmt->bindParam(":mhsw_id",$id);
            $stmt->bindParam(":mhsw_nim",$nim);
            $stmt->bindParam(":mhsw_nama",$nama);
            $stmt->bindParam(":mhsw_alamat",$alamat);
            $stmt->execute();
            
            echo "DATA BERHASIL DIUPDATE BRO";
        }             	
    }   
    public function tampil_cari($nim,$nama,$alamat)
    {
       try {
        $searchNim = '%' . $nim . '%';
        $searchNama = '%' . $nama . '%';
        $searchAlamat = '%' . $alamat . '%';

        $sql = "SELECT * FROM tb_mhsw WHERE mhsw_nim LIKE :mhsw_nim AND mhsw_nama LIKE :mhsw_nama AND mhsw_alamat LIKE :mhsw_alamat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':mhsw_nim', $searchNim);
        $stmt->bindParam(':mhsw_nama', $searchNama);
        $stmt->bindParam(':mhsw_alamat', $searchAlamat);
        $stmt->execute();

        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    }
}