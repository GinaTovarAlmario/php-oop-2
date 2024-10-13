<?php 
    require_once __DIR__ . "/prodotto.php";


    class Cibo extends Prodotto{

        private bool $monoprotein;
        private string $tipo_imballaggio;
        private bool $lowincalories;
        protected static $tipo_di_prodotto_visualizzato = 'Cibo';

        
        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 
            bool $monoprotein,
            string $tipo_imballaggio,
            bool $lowincalories
            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $categoria, 
            );
            $this->setMonoprotein($monoprotein);
            $this->setTipoImballaggio($tipo_imballaggio);
            $this->setLowincalories($lowincalories);
        }

        // settings and gettings

        public function getMonoprotein(): bool 
        {
            return $this->monoprotein;
        }
        public function setMonoprotein(bool $monoprotein): void 
        {
            $this->monoprotein = $monoprotein;
        }


	    public function getTipoImballaggio(): string 
        {
            return $this->tipo_imballaggio;
        }
        public function setTipoImballaggio(string $tipo_imballaggio): void 
        {
            $this->tipo_imballaggio = $tipo_imballaggio;
        }


	    public function getLowincalories(): bool 
        {
            return $this->lowincalories;
        }
	    public function setLowincalories(bool $lowincalories): void 
        {
            $this->lowincalories = $lowincalories;
        }
	
        public function getAdditionalInfo() : string {
            return "<ul class =\"list-unstyled\">
                        <li> Tipo di prodotto visualizzato : {$this->getTipoDiProdottoVisualizzato()}</li>
                        <li> Monoproteina : {$this->formatBooleanValue($this->getMonoprotein())}</li>
                        <li>Tipo Imballaggio : {$this-> getTipoImballaggio()}</li>
                        <li>Low in Calories : {$this->formatBooleanValue($this->lowincalories)}</li>
                    </ul>";
        }
    }


?>