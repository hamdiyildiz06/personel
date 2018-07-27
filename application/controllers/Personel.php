<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personel extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("personel_model");
    }

    public function index()
    {

        $list = $this->personel_model->get_all();

        $viewData['list'] = $list;

        $this->load->view("personel_listesi", $viewData);
    }

    public function insert_form()
    {
        $this->load->view("personel_ekle");
    }

    public function insert()
    {
//        $personel_ad = $this->input->post("personel_ad");
//        $email       = $this->input->post("email");
//        $telefon     = $this->input->post("telefon");
//        $departman   = $this->input->post("departman");
//        $adres       = $this->input->post("adres");

    //    $data = ;

        $insert = $this->personel_model->insert(
            array(
                "personel_ad"  => $this->input->post("personel_ad"),
                "email"        => $this->input->post("email"),
                "telefon"      => $this->input->post("telefon"),
                "departman"    => $this->input->post("departman"),
                "adres"        => $this->input->post("adres")
            )
        );

        if ($insert){
            echo "ekleme işlemi başarılıdır.. Personel Listesine Dönmek için <a href='". base_url() ."'>Tıklayınız...</a>";
        }else{
            echo "ekleme işlemi başarısızdır.... Personel Listesine Dönmek için <a href='". base_url() ."'>Tıklayınız...</a>";
        }

    }

    public function update_form($id)
    {
        $item = $this->personel_model->get(
            array(
                "id" => $id
            )
        );

        $viewData["item"] = $item;


        $this->load->view("personel_duzenle", $viewData);
    }

    public function update($id)
    {
        $update = $this->personel_model->update(
            array(
                "id" => $id
            ),
            array(
                "personel_ad" => $this->input->post("personel_ad"),
                "email" => $this->input->post("email"),
                "telefon" => $this->input->post("telefon"),
                "departman" => $this->input->post("departman"),
                "adres" => $this->input->post("adres")
            )
        );

        if ($update) {
            echo "güncelleme işlemi başarılı.. Personel listesine Dönmek için <a href='". base_url() ."' >Tıklayınız..</a>";
        }else{
            echo "güncelleme işlemi başarısız oldu tekrar deneyiniz veya Personel listesine Dönmek için <a href='". base_url() ."' >Tıklayınız..</a>";
        }
    }

    public function delete($id)
    {
        $delete = $this->personel_model->delete(
            array(
                "id" => $id
            )
        );

        if ($delete) {
            echo "Silme işlemi başarılı.. Personel listesine Dönmek için <a href='". base_url() ."' >Tıklayınız..</a>";
        }else{
            echo "silme işlemi başarısız oldu tekrar deneyiniz veya Personel listesine Dönmek için <a href='". base_url() ."' >Tıklayınız..</a>";
        }


    }

    public function order()
    {
        echo "merhaba burası sıralama ölçütleri gelecek";
    }
}
