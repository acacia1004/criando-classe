<?php 

class Pessoa{
    private string $nome;
    private int $idade;
    private int $cpf;

    public function __construct(
        string $nome,
        int $idade,
        int $cpf)
    {
       $this ->nome = $nome;
       $this ->idade = $idade;
       $this ->cpf = $cpf; 
    }
}

$pessoa01 = new Pessoa("Acacia", 18, 98273253201)
?>

<?php 
class produto{
    private string $nome;
    private int $preco;
    private int $quantidade;
    private string $categoria;

    public function __construct(
        string $nome,
        int $preco,
        int $quantidade,
        string $categoria)
    {
        $this ->nome = $nome;
        $this ->preco = $preco;
        $this ->quantidade =$quantidade;
        $this ->categoria = $categoria;
    }
    public function pegarnome(){
        return $this->nome;
    }
    public function pegarpreco(){
        return $this->preco;
    }
    public function pegarquantidade(){
        return $this->quantidade;
    }
    public function pegarcategoria(){
        return $this->categoria;
    }
}

$produto01 = new produto("cafe", 17, 10, "alimento")
?>