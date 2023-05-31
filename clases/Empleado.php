<?php 

class Empleado{
    private string $nif;
	private string $nombre;
	private $edad;
	private string $departamento;
    //constructor
	public function __construct($i,$n,$e,$p){
        $this->nif=$i;
		$this->nombre=$n;
		$this->edad=$e;
		$this->departamento=$p;
	}
    //setter y getter
    public function setNif($i){$this->nif=$i;}
	public function getNif(){return $this->nif;}

	public function setNombre($n){$this->nombre=$n;}
	public function getNombre(){return $this->nombre;}

	public function setEdad($e){$this->edad=$e;}
	public function getEdad(){return $this->edad;}

	public function setDepartamento($p){$this->departamento=$p;}
	public function getDepartamento(){return $this->departamento;}
//ver
    public function calculoSueldo (){
    return float;
}
	public function verInfo():string{
		return "<p> el nombre es: ".$this->nombre. ". La edad: ".$this->edad. ", y el departamento: ".$this->departamento."</p>";
	
}
protected function datosEmpleadosCsv():string{
    return $this->nif.";" .$this->nombre. ";".$this->edad. ";".$this->departamento;
}

}
$empleado1 =new Empleado("52132356", "Carmen",54,"programación");

echo $empleado1->verInfo();
 ?>