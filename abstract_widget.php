<?php

interface Observer {
  public function update(Observable $subject);
}


abstract class Widget implements Observer {

  protected $internalData = array();

  abstract public function draw();

  public function update(Observable $subject) {
         $this->internalData = $subject->getData();
  }
}


class AAA extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=130>";
         $html .= "<tr><td colspan=3 bgcolor=#cccccc>
                        <b>Instrument Info<b></td></tr>";

         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                $html .=  "<tr><td>$instms[$i]</td><td> $prices[$i]</td>
                           <td>$years[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class FancyWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>
                <tr><td colspan=3 bgcolor=#cccccc>
                <b><span class=blue>Our Latest Prices<span><b>
                </td></tr>
                <tr><td><b>instrument</b></td>
                <td><b>price</b></td><td><b>date issued</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $instms = $this->internalData[0];
                $prices = $this->internalData[1];
                $years =  $this->internalData[2];
                
                $html .= 
                "<tr><td>$instms[$i]</td><td> 
                        $prices[$i]</td><td>$years[$i]
                        </td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}
class WidgetMenu extends Widget {

  function __construct() {
  }

  public function draw() {
         $html = "<table border=1 width=500 style='background-color:black; color: white'>";
         $html .= "<tr><td colspan=5>
                        <b>Recibo<b></td></tr>";
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $nombre   = $this->internalData[0];
                $precio   = $this->internalData[1];
                $cantidad = $this->internalData[2];
                
                $html   .=  "<tr><td>$nombre[$i]</td><td> $precio[$i]</td>
                           <td>$cantidad[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}


class aWidget extends Widget {
  
  function __construct() {
  }
  
  public function draw() {
         $html = 
         "<table  cellpadding=5  style='border-collapse: collapse; '>
                <tr><td colspan=5 style='text-align: center; background-color:#cccccc ; border: 3px solid black' >
                <b><span class=blue>Recibo de la comida<span><b>
                </td></tr>
                <tr><td><b>Nombre del producto</b></td>
                <td><b>Precio</b></td><td><b>Cantidad</b>
                </td><td><b>IVA</b>
                </td><td><b>Precio Final</b>
                </td></tr>";
         
         $numRecords = count($this->internalData[0]);
         for($i = 0; $i < $numRecords; $i++) {
                $nombre   = $this->internalData[0];
                $precio   = $this->internalData[1];
                $cantidad = $this->internalData[2];
                $iva      = $this->internalData[3];
                $preciof  = $this->internalData[4];
                $html   .=  "<tr><td>$nombre[$i]</td><td> $precio[$i]</td>
                           <td>$cantidad[$i]</td><td>$iva[$i]</td><td>$preciof[$i]</td></tr>";
                }
         $html .= "</table><br>";
         echo $html;
  }
}

?>
