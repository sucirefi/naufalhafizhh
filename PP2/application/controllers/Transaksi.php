<?php 

class Transaksi extends CI_Controller
{
	public function index()
	{
		$data['nip'] = "nip";	
		$data['content']='transaksi';
		$this->load->view('dashboard_view',$data);
	}
	public function tambah()
		{
			$data['nip']=array();
			$data['content']='tambah_transaksi';
			$this->load->view('dashboard_view',$data);
		}
	function kembali($id)
		{
			$this->db->delete('tb_transaksi',['id'=>$id]);
			redirect('transaksi');
		}
	public function perpanjang($id)
		{
			$data['id']=$this->db->get_where('tb_transaksi',['id'=>$id])->row();
			$data['nip'] = "nip";
			$data['content']='perpanjang';
			$this->load->view('dashboard_view',$data);
		}
	public function simpan(){
		$judul=$this->input->post('judul');
		$tanggal_pinjam=$this->input->post('tanggal_pinjam');
		$tanggal_kembali=$this->input->post('tanggal_kembali');
		$status=$this->input->post('status');
		$data=array(
			'judul'=>$judul,
			'tanggal_pinjam'=>$tanggal_pinjam,
			'tanggal_kembali'=>$tanggal_kembali,
			'status'=>$status
		);
		if ($this->db->insert('tb_transaksi',$data)) {
		echo "<script>alert('Data Berhasil disimpan !');
		window.location='".base_url('transaksi')."'</script>";
		}else{
		echo '<script>alert("Data Gagal disimpan !");</script>';	
		}
	}
	public function update(){
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$tanggal_pinjam=$this->input->post('tanggal_pinjam');
		$tanggal_kembali=$this->input->post('tanggal_kembali');
		$status=$this->input->post('status');
		$data=array(
			'judul'=>$judul,
			'tanggal_pinjam'=>$tanggal_pinjam,
			'tanggal_kembali'=>$tanggal_kembali,
			'status'=>$status
		);
		$this->db->where('id',$id);
		if ($this->db->update('tb_transaksi',$data)) {
		echo "<script>alert('Data Berhasil disimpan !');
		window.location='".base_url('transaksi')."'</script>";
		}else{
		echo '<script>alert("Data Gagal disimpan !");</script>';	
		}
	}
}

 ?>