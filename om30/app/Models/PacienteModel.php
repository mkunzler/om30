<?php 

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table = 'paciente';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome_paciente', 'nome_mae', 'data_nasc', 'cpf', 'cns', 'foto', 'cep',
    'rua', 'bairro', 'cidade', 'uf'];
}