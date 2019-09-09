<?php
class Fecha{
	private $fechaNacimiento;
	private $fechActual;
	private $fechaFin;
	    public function inicializar($fechaNacimiento,$fechActual,$fechaFin){
			$this->fechaNacimiento = $fechaNacimiento;
			$this->fechActual = $fechActual;
			$this->fechaFin= $fechaFin;
		}

		public function conectarBD(){
            $con = mysqli_connect("localhost","root","","fecha") 
            or die ("Problemas con la base de datos");
			return $con;
		}

		public function insertar(){
		mysqli_query($this->conectarBD(),"UPDATE Fecha SET fechaNacimiento='$this->fechaNacimiento',fechActual='$this->fechActual' where id= 1");
		}

		public function desconectarBD(){
			mysqli_close($this->conectarBD());
		}
	}
?>