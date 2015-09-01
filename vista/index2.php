<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" charset="UTF-8" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="../vista/js/listar_pais.js"></script>
    <title>Pagina Principal</title>
</head>

<body>
<!---------------------------------------------------------------------------------------->

<input type="button" value="menu_1" onclick="cargar_1()">
<input type="button" value="menu_2" onclick="cargar_2()">
<input type="button" value="menu_3" onclick="cargar_3()">
    
<br><br><br>    
    
<div id='carga' style="width: 200px; height: 60px; border-style: solid; border-color: #000000;">
    Valor inicial
</div>


</body>
</html>
  <!---------------------------------------------------------------------------------------->


<script type="text/javascript">

function cargar_1(){
    
    $('#carga').css('border-style', 'solid');
    $('#carga').load('menu.html');
    
}

function cargar_2(){
    
    $('#carga').css('border-style', 'solid');
    $('#carga').load('cargar.php');
    
}

function cargar_3(){
    
    $('#carga').css('border-style', 'none');
    $('#carga').load(location.href + " #carga");;
    
}
</script>