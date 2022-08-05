<?php
	abstract class figura{
		
		public static function get_form(){
			$html = '
			<div class="wrapper">
			<form name="figuras" id="figuras" method="POST" action="#" class="form-group">
				<div class="form-group">			
					<h3>INGRESO DATOS DE LA FIGURA</h3>
					<br><br>
						<select class="form-control text-center" name="tipo" id="fig" onchange="seleccionFig();">
							<option value="sel">Seleccione una figura</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
						<br>
						<p id="texto"></p>
					<h4>Lado 1:</h4>
					<div class="form-holder">
					<input class="form-control" type="text" id="lado_1"  name="lado_1" size="4" disabled>
					</div
					<h4>Lado 2:</h4>
					<div class="form-holder">
					<input class="form-control" type="text" id="lado_2"   name="lado_2" size="4" disabled>
					</div>
					<h4>Lado 3:</h4>
					<div class="form-holder">
					<input class="form-control" type="text" id="lado_3"  name="lado_3" size="4" disabled>
					</div>
					<br><br>
					<input class="action-button btn btn-primary btn-lg" type="submit" name="calcular" value="Calcular">
				</div>
			</form>
			</div>
			
			<script src="js/funcion.js"></script>';
			
			return $html;
		}
		
		//METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	   // public abstract function GetTipo();
	}
?>
