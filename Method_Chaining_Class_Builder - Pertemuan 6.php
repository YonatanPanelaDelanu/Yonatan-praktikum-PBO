<?php
class Pengguna {
    private $nama;
    private $email;
    private $role;

    public function setNama($nama) {
        $this->nama = $nama;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    public function tampilkanInfo() {
        echo "Nama: {$this->nama}\n";
        echo "Email: {$this->email}\n";
        echo "Role: {$this->role}\n";
    }
}

$pengguna = new Pengguna();
$pengguna->setNama("Budi")
         ->setEmail("budi@example.com")
         ->setRole("Admin")
         ->tampilkanInfo();
?>
