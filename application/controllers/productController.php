<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class productController extends CI_Controller
{
    function index(){
        $data['product'] = $this->getDataAllProduct('produk'); 
        $this->load->view('product/header');
        $this->load->view('product/index',$data);
        $this->load->view('product/footer');
    }
    // function Read
    function getDataAllProduct($tabel){
        return $this->M_data->get_data($tabel)->result();
    }
    //  UUID
    public function guidv4()
    {
        if (function_exists('com_create_guid') === true)
            return trim(com_create_guid(), '{}');
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    // Insert Data
    function insertData(){
        
        $namaProduk = $this->input->post('produk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');
        $data = array(
            'id' => $this->guidv4(),
             'nama_produk'=> $namaProduk, 
             'harga'=>$harga, 
             'jumlah'=>$jumlah, 
             'keterangan'=>$keterangan
        );
        $this->M_data->input_data($data,'produk');
        redirect(base_url() . 'productController/index');
    }
    // Ubah Data 
    function ubahData(){
        $id = $this->input->post('id');
        $data['edit'] = $this->M_data->get_dataWhere('produk',$id)->row();
        $this->load->view('product/header');
        $this->load->view('product/edit',$data);
        $this->load->view('product/footer');
    }
    // Update Data
    function updateData(){
        $id = $this->input->post('id');
        $namaProduk = $this->input->post('produk');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $keterangan = $this->input->post('keterangan');
        $where = array('id'=>$id);
        $data = array(
            'nama_produk'=> $namaProduk, 
            'harga'=>$harga, 
            'jumlah'=>$jumlah, 
            'keterangan'=>$keterangan
        );
        $this->M_data->update_data($where, $data, 'produk');
        redirect(base_url() . 'productController/index');
    }
    // Delete
    function deleteData($id){
        $id = $this->input->post('id');
        $this->M_data->deleteData($id,'produk');
        redirect(base_url() . 'productController/index');
    }
}