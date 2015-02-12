<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Профил</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
	 
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery.ui.totop.js"></script>

       
		
		
     <script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });      
     </script>
     </head>
	 <style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input, select, radio,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"],[type="reset"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
</style>
     <body  class="">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="pochetna.html"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
          
         
           <div class="clear"></div>
      </div>
<div class="menu_block">
           <nav	class="" >
						<ul class="sf-menu">
                 <li ><a href="pochetna.html">Почетна</a></li>
                   <li ><a href="za_nas.html">За нас</a>
                   </li>
                   <li><a href="galerija.html">Галерија</a></li>
                   <li><a href="ponudi.html">Понуди</a></li>
                   <li class="current"><a href="najavi.html">Најави</a></li>
                   <li><a href="kontakt.html">Контакт</a></li>
                 </ul>
							</nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
          </div>
</header>

<div class="main">
<!--=======content================================-->
 
<div class="content"><div class="ic"></div>
  <div class="container_12">
    
	
		<center><h3>Направете резервација</h3></center>
			<div id="wrapper">	
      <section>        

	<form action="skripta2.php" method="post">
            <fieldset>
               
				Понуда:<br/><br/>
				<div>
				 <?php
 $connect = mysql_connect('localhost', 'root', '');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_set_charset('utf8', $connect);
$db_selected = mysql_select_db('agencija', $connect);
echo '<select name="ponuda">';
$result=mysql_query("SELECT ime FROM ponudi");
WHILE ($row = mysql_fetch_row($result)){

for($i=0;$i<mysql_num_fields($result);$i++)
{
echo "<option>".$row[$i]."</option>";
}

}
echo "</select>";
		mysql_close($connect);	  
			  
			  
			  
			  ?>
				</div>
				Термин:
				<div>
				<?php
			  
			  $connect = mysql_connect('localhost', 'root', '');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_set_charset('utf8', $connect);
$db_selected = mysql_select_db('agencija');
echo '<select name="termin">';
$result=mysql_query("SELECT termin1, termin2, termin3 FROM ponudi", $connect);
WHILE ($row = mysql_fetch_row($result)){

for($i=0;$i<mysql_num_fields($result);$i++)
{
echo "<option >".$row[$i]."</option>";
}

}
echo "</select>";
		mysql_close($connect);	  
			  
			  
			  
			  ?>
                            
                </select>
				</div>
				Тип на сместување:
				<div>
				 <select name="smestuvanje">
                            <option value="Хотелско сместување">Хотелско сместување</option>
                            <option value="Приватно сместувањ">Приватно сместување</option>
                        </select>
				</div>
				<div>
				<input type="radio" name="prevoz" value="Автобус">Автобус
				<input type="radio" name="prevoz" value="Авион">Авион
				<input type="radio" name="prevoz" value="Комбе">Комбе
				<input type="radio" name="prevoz" value="Сопствен превоз">Сопствен превоз
				</div>
				<div>
                    <input type="text" name="ime" placeholder="Име"/>
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email"/>
				</div>	
          
              <div>
                    <input type="text" name="tel" placeholder="Телефон"/>
					</div>
                <div>
                    
                    <textarea name="baranja" placeholder="Други барања"></textarea>
                </div>    
               <center><input type="submit" name="rezerviraj" value="Резервирај"/>
				   <input  type="reset" name="otkazi" value="Откажи"/></center>
            </fieldset>    
        </form>
		 </section>
		 
			 
			  
			  
			
    
	</div>
	
<!-- /form -->
    </div>
    
  <br/><br/><center> <a href="najavi.html"><input type="submit" name="odjava" value="Одјави се"/></a></center>
  </div>
</div>
 <div class="clear"></div>
<!--=======bottom================================-->
<div class="bottom_block">
	<div class="container_12">
	
		<div class="grid_2 prefix_2">
			<ul>
				 <center><li><a href="http://www.savana.mk/" target="blank">T.A. Савана<a/></li></center>
				 <br/>
				<center><li><a href="http://www.kouzoncorporation.com/" target="blank">Коузон Corporation<a/></li></center>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<center><li><a href="http://www.tourismmacedonia.gov.mk/" target="blank">АППТ<a/></li></center>
				<br/>
				<center><li><a href="http://www.crvoexpress.com.mk/" target="blank">T.A. Црво Експрес<a/></li></center>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<center><li><a href="http://www.atlas.com.mk/" target="blank">Т.А Атлас<a/></li></center>
				 <br/>
				 <center><li><a href="http://mediteran.mk/" target="blank">Т.А. Медитеран<a/></li></center>
			</ul>
		</div>
		<div class="grid_2">
			<ul>
				<center><li><a href="http://www.aurora.com.mk/" target="blank">T.A. Аурора Турс<a/></li></center>
				<br/>
				 <center><li><a href="http://www.ferijalkasikov.com.mk/" target="blank">T.A. Феријал Кашиков<a/></li></center>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>
<!--==============================footer=================================-->

</div>
<footer>		
	<div class="container_12">
	<div class="grid_12">
		
			<div class="copy">
		 Атлантида &copy; 2015 | <a href="#">Полиса на приватност</a>
		 </div></div>
		 <div class="clear"></div>
	</div>

</footer>

</body>
</html>