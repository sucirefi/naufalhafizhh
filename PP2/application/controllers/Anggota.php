<?php 

class Anggota extends CI_Controller
{
	public function index()
	{
		$data['nip']=array();
		$data['content']='anggota';
		$this->load->view('dashboard_view',$data);
	}
	public function tambah_anggota()
		{
			$data['nip']=array();
			$data['content']='tambah_anggota';
			$this->load->view('dashboard_view',$data);
		}
	public function edit_anggota($nip)
		{
			$data['nip']=$this->db->get_where('tb_anggota',['nip'=>$nip]);
			$data['content']='edit_anggota';
			$this->load->view('dashboard_view',$data);
		}
	function hapus_anggota($nip)
		{
			$this->db->delete('tb_anggota',['nip'=>$nip]);
			redirect('anggota');
		}
	public function simpan(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$tmp=$this->input->post('tmp');
		$tgl=$this->input->post('tgl');
		$jk=$this->input->post('jk');
		$jurusan=$this->input->post('jurusan');
		$data=array(
			'nip'=>$nip,
			'nama'=>$nama,
			'tempat_lahir'=>$tmp,
			'tanggal_lahir'=>$tgl,
			'jk'=>$jk,
			'jurusan'=>$jurusan
		);
		if ($this->db->insert('tb_anggota',$data)) {
		echo "<script>alert('Data Berhasil disimpan !');
		window.location='".base_url('anggota')."'</script>";
		}else{
		echo '<script>alert("Data Gagal disimpan !");</script>';	
		}
	} 
	public function update(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$tmp=$this->input->post('tmp');
		$tgl=$this->input->post('tgl');
		$jk=$this->input->post('jk');
		$jurusan=$this->input->post('jurusan');
		$data=array(
			'nip'=>$nip,
			'nama'=>$nama,
			'tempat_lahir'=>$tmp,
			'tanggal_lahir'=>$tgl,
			'jk'=>$jk,
			'jurusan'=>$jurusan
		);
		$this->db->where('nip',$nip);
		if ($this->db->update('tb_anggota',$data)) {
		echo "<script>alert('Data Berhasil disimpan !');
		window.location='".base_url('anggota')."'</script>";
		}else{
		echo '<script>alert("Data Gagal disimpan !");</script>';	
		}
	}
}

 ?>