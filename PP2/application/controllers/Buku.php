<?php  

class Buku extends CI_Controller
{
	public function index()
	{
		$data['nip'] = "nip";
		$data['content']='buku';
		$this->load->view('dashboard_view', $data);
		
	}
	public function tambah_buku()
		{
			$data['nip'] = "nip";
			$data['content']='tambah_buku';
			$this->load->view('dashboard_view',$data);
		}
	public function edit_buku($id)
		{
			$data['id']=$this->db->get_where('tb_buku',['id'=>$id])->row();
			$data['nip'] = "nip";
			$data['content']='edit_buku';
			$this->load->view('dashboard_view',$data);
		}
	function hapus_buku($id)
		{
			$this->db->delete('tb_buku',['id'=>$id]);
			redirect('buku');
		}	
	public function simpan(){
		$judul=$this->input->post('judul');
		$pengarang=$this->input->post('pengarang');
		$penerbit=$this->input->post('penerbit');
		$tahun_terbit=$this->input->post('tahun');
		$isbn=$this->input->post('isbn');
		$jumlah_buku=$this->input->post('jumlah_buku');
		$lokasi=$this->input->post('lokasi');
		$tanggal_input=date('Y-m-d H:i:s');
		$data=array(
			'judul'=>$judul,
			'pengarang'=>$pengarang,
			'penerbit'=>$penerbit,
			'tahun_terbit'=>$tahun_terbit,
			'isbn'=>$isbn,
			'jumlah_buku'=>$jumlah_buku,
			'lokasi'=>$lokasi,
			'tanggal_input'=>$tanggal_input
		);
		if ($this->db->insert('tb_buku',$data)) {
		echo "<script>alert('Data Berhasil disimpan !');
		window.location='".base_url('buku')."'</script>";
		}else{
		echo '<script>alert("Data Gagal disimpan !");</script>';	
		}
	} 
	public function update(){
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$pengarang=$this->input->post('pengarang');
		$penerbit=$this->input->post('penerbit');
		$tahun_terbit=$this->input->post('tahun_terbit');
		$isbn=$this->input->post('isbn');
		$jumlah_buku=$this->input->post('jumlah_buku');
		$lokasi=$this->input->post('lokasi');
		$tanggal_input=date('Y-m-d H:i:s');
		$data=array(
			'judul'=>$judul,
			'pengarang'=>$pengarang,
			'penerbit'=>$penerbit,
			'tahun_terbit'=>$tahun_terbit,
			'isbn'=>$isbn,
			'jumlah_buku'=>$jumlah_buku,
			'lokasi'=>$lokasi,
			'tanggal_input'=>$tanggal_input
		);
		$this->db->where('id',$id);
		if ($this->db->update('tb_buku',$data)) {
		echo "<script>alert('Data Berhasil disimpan !');
		window.location='".base_url('buku')."'</script>";
		}else{
		echo '<script>alert("Data Gagal disimpan !");</script>';	
		}
	}
}

?>