<?php

class LaporanModel extends CI_Model
{
    public function kunjungan_poliklinik($tahun, $id_poliklinik)
    {

        $sql = "select COUNT(*) AS jumlah FROM tbl_pendaftaran WHERE tgl_berobat like '$tahun%' and id_poliklinik='$id_poliklinik' GROUP BY MONTH(tgl_berobat)";

        $rs = $this->db->query($sql);

        if ($rs->num_rows() > 0) {
            foreach ($rs->result_array() as $key => $row) {
                $hasil[] = $row;
            }
        } else {
            $hasil[] = 0;
        }

        return $hasil;
    }
}
