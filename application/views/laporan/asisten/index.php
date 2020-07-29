<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Laporan Asisten</h3>
            	<div class="box-tools">
                 
                </div>
            </div>
            <div class="box-body">
               <?php
			   $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,6,'ID',1,0);
        $pdf->Cell(40,6,'NAMA',1,0);
        $pdf->Cell(85,6,'ALAMAT',1,0);
        $pdf->Cell(35,6,'TELP',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('asisten')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(30,6,$row->id_asisten,1,0);
            $pdf->Cell(40,6,$row->nm_asisten,1,0);
            $pdf->Cell(85,6,$row->addrs_asisten,1,0);
            $pdf->Cell(35,6,$row->telp_asisten,1,1); 
        }
        $pdf->Output();
			   ?>         
            </div>
        </div>
    </div>
</div>
