<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model {
    
    public function getDataSoal($id, $dosen)
    {
        $this->datatables->select('a.id_soal, a.soal, FROM_UNIXTIME(a.created_on) as created_on, FROM_UNIXTIME(a.updated_on) as updated_on, b.nama_matkul, c.nama_dosen, d.nama_kategori');
        $this->datatables->from('tb_soal a');
        $this->datatables->join('matkul b', 'b.id_matkul=a.matkul_id');
        $this->datatables->join('dosen c', 'c.id_dosen=a.dosen_id');
        $this->datatables->join('kategori d', 'd.id_kategori=a.kategori_id');
        if ($id!==null && $dosen===null) {
            $this->datatables->where('a.matkul_id', $id);            
        }else if($id!==null && $dosen!==null){
            $this->datatables->where('a.dosen_id', $dosen);
        }
        return $this->datatables->generate();
    }

    public function getSoalById($id)
    {
        return $this->db->get_where('tb_soal', ['id_soal' => $id])->row();
    }

    public function getMatkulDosen($nip)
    {
        $this->db->select('matkul_id, nama_matkul, id_dosen, nama_dosen, nama_kategori, kategori_id, nama_kategori');
        $this->db->join('matkul b', 'a.matkul_id=b.id_matkul');
        $this->db->join('kategori c', 'a.kategori_id=c.id_kategori');
        $this->db->from('dosen a')->where('a.nip', $nip);
        return $this->db->get()->row();
    }

    public function getAllDosen()
    {
        $this->db->select('*');
        $this->db->from('dosen a');
        $this->db->join('matkul b', 'a.matkul_id=b.id_matkul');
        $this->db->join('kategori c', 'a.kategori_id=c.id_kategori');
        return $this->db->get()->result();
    }
}