namespace App\Model;


abstract class Cliente {
    protected string $nome;


    public function __construct(string $nome) {
        $this->nome = $nome;
    }


    public function getNome(): string {
        return $this->nome;
    }


    abstract public function calcularFatura(): float;
}