<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerDashboard extends CI_Controller
{
    //Recebe um post e retorna os valores necessários para montar o gráfico  "Entradas nos últimos 6 meses"
    //no dashboard
    function salesInLastSixMonths()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
        {
            if($this->input->post())
            {
                try
                {
                    $this->load->model('ManagerDashboard1');
                    $mD = new ManagerDashboard1();
                    $result = $mD->salesInLastSixMonths();

                    $data['response'] = true;
                    $data['result'] = $result;
                    echo json_encode($data);
                    exit();
                }
                catch (Exception $e)
                {
                    $data['response'] = false;
                    $data['msg'] = "Erro ao carregar as entradas nos últimos 6 meses!";
                    echo json_encode($data);
                    exit();
                }

            }
        }
    }

    //Recebe um post e retorna os valores necessários para montar o gráfico  "Entradas x Saídas no mês atual"
    //no dashboard

    function billsToReceiveVsBillsToPay()
    {
        if ($this->session->userdata('isUser') && $this->session->userdata('user_type') == 1)
        {
            if($this->input->post())
            {
                try
                {
                    $this->load->model('ManagerDashboard1');
                    $mD = new ManagerDashboard1();
                    $result = $mD->billsToReceiveVsBillsToPay();

                    $data['response'] = true;
                    $data['result'] = $result;
                    echo json_encode($data);
                    exit();
                }
                catch (Exception $e)
                {
                    $data['response'] = false;
                    $data['msg'] = "Erro ao carregar as Entradas e Saídas do mês atual";
                    echo json_encode($data);
                    exit();
                }

            }
        }
    }

}