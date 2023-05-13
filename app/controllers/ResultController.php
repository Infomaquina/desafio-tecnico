<?php 
namespace app\controllers;

class ResultController{

  public $user;
  public function __construct(){    
    $this->user = isset($_POST['user']) ? trim($_POST['user']) : '';
  }

  public function index(){
    return PlateController::view('result');
  }

  public function search(){ 

    $username = $this->user; 
    // URL da API do GitHub para obter os repositórios do usuário
    $url = "https://api.github.com/users/$username/repos";

    // Configuração da solicitação
    $options = [
        "http" => [
            "header" => "User-Agent: PHP"
        ]
    ];

    // Fazendo a solicitação à API do GitHub
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    // Verificando se a solicitação foi bem-sucedida
    if ($response === false) {
        die("Falha ao obter os repositórios do GitHub para o usuário '$username'. Verifique se o nome de usuário está correto e tente novamente.");
    }

    // Decodificando a resposta JSON em um array associativo
    $repositories = json_decode($response, true);

    // Verificando se há erros na resposta
    if (json_last_error() !== JSON_ERROR_NONE) {
      die("Erro ao decodificar a resposta JSON da API do GitHub.");
    }

    // Ordenando os repositórios pelo número de estrelas em ordem decrescente
    usort($repositories, function ($a, $b) {
      return $b['stargazers_count'] - $a['stargazers_count'];
    });
    
    //Limitar para 5 resultados
    $repositories = array_slice($repositories, 0, 5);

    print json_encode($repositories);
  }
}
 ?>