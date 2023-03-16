<?php
class Sequencia
{
    public $inicio;
    public $fim;

    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    public function setFim($fim)
    {
        $this->fim = $fim;
    }

    public function exibirTodosNumeros()
    {
        $numeros = array();
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            $numeros[] = $i;
        }
        echo implode(',', $numeros);
    }

    public function exibirImpares()
    {
        $numeros = array();
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 != 0) {
                $numeros[] = $i;
            }
        }
        echo implode(',', $numeros);
    }

    public function exibirPares()
    {
        $numeros = array();
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 == 0) {
                $numeros[] = $i;
            }
        }
        echo implode(',', $numeros);
    }
}
?>
