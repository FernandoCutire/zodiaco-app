<?
include ('includes/header.php');
encabezado();?>


<?php
function formulario()
{
?>
<section class="section">

  <div class="formulario"><br><br>
  <form method="POST" action="http://localhost/zodiaco-app-main/php/fechas.php"><br>

    <label for="fname">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre"><br><br>

    <label for="lname">Apellido:</label><br>
    <input type="text" id="apellido" name="apellido" placeholder="Ingrese su Apellido"><br><br>

    <label for="datemax">fecha de Nacimiento:</label><br>
    <!-- <input class="nacimiento"type="text" id="dia" name="dia" max="2022-12-31" placeholder="dd">
    <input class="nacimiento" type="text" id="mes" name="mes" max="2022-12-31"placeholder="mm">
    <input class="nacimiento" type="text" id="año" name="año" max="2022-12-31"placeholder="yyyy"> -->
    


    <select name="dia" class="form-fecha">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>

    <select name="mes" class="form-fecha">
  
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option> 
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option> 
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option> 
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
      </select>

      <select name="anio" class="form-fecha">
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        <option value="1979">1979</option>
        <option value="1978">1978</option>
        <option value="1977">1977</option>
        <option value="1976">1976</option>
        <option value="1975">1975</option>
        <option value="1974">1974</option>
        <option value="1973">1973</option>
        <option value="1972">1972</option>
        <option value="1971">1971</option>
        <option value="1970">1970</option>
        <option value="1969">1969</option>
        <option value="1968">1968</option>
        <option value="1967">1967</option>
        <option value="1966">1966</option>
        <option value="1965">1965</option>
        <option value="1964">1964</option>
        <option value="1963">1963</option>
        <option value="1962">1962</option>
        <option value="1961">1961</option>
        <option value="1960">1960</option>
        <option value="1959">1959</option>
        <option value="1958">1958</option>
        <option value="1957">1957</option>
        <option value="1956">1956</option>
        <option value="1955">1955</option>
        <option value="1954">1954</option>
        <option value="1953">1953</option>
        <option value="1952">1952</option>
        <option value="1951">1951</option>
        <option value="1950">1950</option>
        <option value="1949">1949</option>
        <option value="1948">1948</option>
        <option value="1947">1947</option>
        <option value="1946">1946</option>
        <option value="1945">1945</option>
        <option value="1944">1944</option>
        <option value="1943">1943</option>
        <option value="1942">1942</option>
      </select>

    <br><br>

    <div class="center">
      <input type="submit" name="enviado" value="Enviar" class="sub">
      <input type="reset" value="Borrar" class="del"><br><br>
  </div>
  </form>

</div>
</section>

<section class="section">
<table>
<tbody class="tabla-zodiac">
<tr>
<td>Aries</td>
<td>21 de marzo – 20 de abril</td>
</tr>
<tr>
<td>Tauro</td>
<td>21 de abril – 21 de mayo</td>
</tr>
<tr>
<td>Géminis</td>
<td>22 de mayo – 21 de junio</td>
</tr>
<tr>
<td>Cáncer</td>
<td>22 de junio – 23 de julio</td>
</tr>
<tr>
<td>Leo</td>
<td>23 de julio – 23 de agosto</td>
</tr>
<tr>
<td>Virgo</td>
<td>24 de agosto – 23 de septiembre</td>
</tr>
<tr>
<td>Libra</td>
<td>24 de septiembre – 23 de octubre</td>
</tr>
<tr>
<td>Escorpio</td>
<td>24 de octubre – 22 de noviembre</td>
</tr>
<tr>
<td>Sagitario</td>
<td>23 de noviembre – 21 de diciembre</td>
</tr>
<tr>
<td>Capricornio</td>
<td>22 de diciembre – 20 de enero</td>
</tr>
<tr>
<td>Acuario</td>
<td>21 de enero – 19 de febrero</td>
</tr>
<tr>
<td>Piscis</td>
<td>20 de febrero – 20 de marzo</td>
</tr>
</tbody>
</table>

</section>

<?php }  ?>
<?include ('includes/pie_pag.php');
pie(); ?>
