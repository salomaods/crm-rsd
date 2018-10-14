<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Client extends Model
{
    use EntrustUserTrait;

    protected $fillable = [
        'name', 'email', 'cpf', 'rg', 'nameJudicial', 'razaoSocial', 'cnpj', 'cep', 'bairro', 'cidade', 'telefone', 'celular',
        ]; 

}
