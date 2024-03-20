<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model("courses_model");
        $courses = $this->courses_model->show_course();
        
        $this->load->model("team_model");
        $team = $this->team_model->show_member();
        
        $data = array(
            "scripts" => array(
                "core/util.js",
                "home.js",
                "owl.carousel.min.js",
                "theme-scripts.js",
                "sweetalert2.all.min.js"
            ),
            "courses" => $courses,
            "team" => $team
        );
        $this->template->show("home", $data);
    }

    public function ajax_send_email()
    {
        if (! $this->input->is_ajax_request()) {
            die("Acesso não autorizado!");
        }

        $this->load->library("email");

        $json = array();
        $json["status"] = 1;
        $json["error_message"] = array();

        $data = $this->input->post();

        if (empty($data["name"])) {
            $json["error_message"]["#name"] = "Por favor, preencha o campo Nome";
            $json["status"] = 0;
        }

        if (empty($data["email"])) {
            $json["error_message"]["#email"] = "Por favor, preencha o campo E-mail";
            $json["status"] = 0;
        }

        if (empty($data["message"])) {
            $json["error_message"]["#message"] = "Por favor, preencha o campo Mensagem";
            $json["status"] = 0;
        }

        if ($json["status"]) {
            $message = "Nome: " . $data["name"];
            $message .= "\nE-mail: " . $data["email"];
            $message .= "\n\nMensagem: " . $data["message"];
            
            
            
            $this->email->from($data["email"], 'Formulário de contato');
            $this->email->to('contato@evoluirmd.com.br');
            $this->email->subject('Formulário de contato Evoluir');
            $this->email->message($message);

            ($this->email->send()) ? $json["deliveryEmail"] = TRUE : FALSE;
        }

        echo json_encode($json);
    }
}