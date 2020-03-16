<?php
defined('BASEPATH') or exit('No direct script access allowed');

class email extends CI_Controller{


    public function index()
    {
        $config =

            [
                'protocol' => 'smtp',

                'mailpath' => '/usr/sbin/sendmail',

                'smtp_host' => 'ssl://smtp.googlemail.com',

                'smtp_user' => 'ryntooh45@gmail.com',

                'smtp_pass' => 'Makassar012',

                'smtp_post' => 465,

                'mailtype' => 'html',

                'charset' => 'iso-8859-1'


            ];


        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");

        $this->email->from('rintwo512@gmail.com', 'dasdsadsa');

        $this->email->to('webtek19@gmail.com');

        $this->email->subject('testing');

        $this->email->message('hello world');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}