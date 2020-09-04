<?php
include('conn.php');

?>
<html>
<head><title>HOME</title>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

<style>
 body{
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);

}
@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oxygen);

/* Page layout */

body {
    background-color: #fff;
    margin: 0;
    padding: 0;
    font-family: 'Oxygen', sans-serif;
    color: #444;
    font-size: 15px;
    line-height: 18px;
    font-weight: 300;
}

header {
    margin: 0;
    background: #000;
    height: 65px;
    padding: 1px;
}

article {
    margin: 40px 30px;
}

h1 {
    font-family: 'Open Sans Condensed', sans-serif;
    letter-spacing: 1px;
    font-size: 2.3em;
    line-height: 44px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 900;
    margin: 0;
    padding: 10px 0 0 30px;
    letter-spacing: 2px;
}

h2 { margin: 20px 0 10px 0;
    font-weight: 900;
}

p {
    margin: 20px 0 5px 0;
}


/* Table Layout */

table.vitamins {
    margin: 20px 0 0 0;
    border-collapse: collapse;
    border-spacing: 0;
    background: #212121;
    color: #fff;
}

table.vitamins th, table.vitamins td {
    text-align: center;
}

table.vitamins thead {
    line-height: 12px;
    background: #2e63e7;
    text-transform: uppercase;
}

table.vitamins thead th {
    color: #fff;
    padding: 20px;
    letter-spacing: 1px;
    vertical-align: bottom;
}

table.vitamins thead th:nth-child(1) {
    width: 20%;
    text-align: left;
    padding-left: 20px;
}

table.vitamins thead th:nth-child(2) {
    width: 30%;
}

table.vitamins thead th:nth-child(3) {
    width: 35%;
}

table.vitamins thead th:nth-child(4) {
    width: 15%;
}

table.vitamins tbody {
    font-size: 1em;
    line-height: 15px;
}

table.vitamins tbody tr {
    border-top: 2px solid rgba(109, 176, 231, 0.8);
    transition: background 0.6s, color 0.6s;
}

table.vitamins tbody tr:nth-child(even) {
    background: rgba(255, 255, 255, 0.2);
}

table.vitamins tbody tr:hover {
    color: #000;
    background: rgba(255, 255, 255, 0.7);
    font-weight: 900;
}

table.vitamins tbody td {
    padding: 12px;
}

table.vitamins tbody tr:hover td:first-child {
    background: rgba(0,0,0,0);
}

table.vitamins tbody td:first-child {
    text-align: left;
    padding-left: 20px;
    font-weight: 700;
    background: rgba(109, 176, 231, 0.35);
    transition: backgrounf 0.6s;
}

table.vitamins tfoot {
    font-size: 0.8em;
}

table.vitamins tfoot tr {
    border-top: 2px solid #2e63e7;
}

table.vitamins tfoot td {
    color: rgba(255,255,215,0.6);
    text-align: left;
    line-height: 15px;
    padding: 15px 20px;
}


/* Mobile Layout */

@media screen and (max-width: 400px) {
    h1 {
        font-size: 34px;
        line-height: 36px;
        padding-left: 15px;
    }

    article {
        margin: 10px 15px;
    }

    table.vitamins {
        font-size: 0.8em;
    }
}
</style>
</head>
<body>
<div class="logo">
        <img src="images/logo.png" width="150px" height="150px"/>
      </div>
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="userreg.php"><span>Registration</span></a></li>
          <li><a href="login.php"><span>Login</span></a></li>
          <li><a href="services.php"><span>Act & Rules</span></a></li>
        </ul>
    </div>
   </div>
</div><br><br><br><br><br><br>

<article>
<center style="color:#000; font-size:18px;">Speed Limits in Kerala (Kerala Govt. order No. 20/2014/tran dtd 28/2/2014 )</center>
    <table class="vitamins">
        <thead>
            <tr>
                <th> Class	</th>
                <th>Vehicles</th>
                <th>Near School</th>
                <th>In Ghat Roads</th>
                <th>Within Corporation</th>
                <th>National Highway</th>
                <th>State Highway</th>
                <th>Four Lane Road</th>
                <th>Other Places</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>1 </td>
                <td> Motor Cycle</td>
                <td>30	</td>
                <td>45	  </td>
                <td> 50	</td>
                <td> 60	</td>
                <td>50	</td>
                <td>70	 </td>
                <td> 50 </td>
            </tr>
            <tr>
               <td> 1 </td>
                <td> Motor Car	</td>
                <td>30 </td>
                <td>45</td>
                <td>50	 </td>
                <td> 85</td>
                <td>80	</td>
                <td>90</td>
                <td>70 </td>
                
            </tr>
            <tr>
             
                <td> 1</td>
                <td>Autorickshaw </td>
                <td>30	</td>
                <td>35</td>
                <td>30</td>
                <td>50</td>
                <td>50</td>
                <td>50</td>
                <td>40 </td>
            </tr>
            <tr>

                <td>1 </td>
                <td>Light motor vehicle and a transport vehicle	 </td>
                <td>30</td>
                <td> 45 </td>
                <td>50 </td>
                <td>65</td>
                <td>65</td>
                <td>70</td>
                <td>60</td>
            </tr>
            <tr>
                

                <td>2 </td>
                <td>Heavy goods Vehicle	 </td>
                <td>30</td>
                <td>30</td>
                <td>40</td>
                <td>60</td>
                <td>60</td>
                <td>65</td>
                <td>40</td>
            </tr>
            <tr>
             
                <td>2</td>
                <td>Heavy passenger Vehicle	</td>
                <td>30	</td>
                <td>30</td>
                <td>40</td>
                <td>60</td>
                <td>60</td>
                <td>65</td>
                <td>40</td>
            </tr>
            <tr>      
             <td>3 </td>
             <td> Medium Goods Vehicle</td>
                <td>	25	</td>
                <td>	30	  </td>
                <td> 	40</td>
                <td>	65		</td>
                <td>65	</td>
                <td>	65		 </td>
                <td>50  </td>
            </tr>
            <tr>
                
                <td>3 </td>
                <td>Medium Pasenger Vehicle </td>
                <td>	25	</td>
                <td>	30	  </td>
                <td>	40 </td>
                <td>	65	</td>
                <td>	65		</td>
                <td>	65	 </td>
                <td>  50</td>
            </tr>
            <tr>
                
                <td>3 </td>
                <td>Heavy Goods Vehicle </td>
                <td>	25	</td>
                <td>	30	  </td>
                <td>	40	 </td>
                <td>50	</td>
                <td>	65		</td>
                <td>65	 </td>
                <td> 	50 </td>
            </tr>
     
        </tbody>
    </table>
</article>
      
      <div class="fbg">
    <div class="fbg_resize">
    
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Motor Vehicles Department: The Motor Vehicles Department is regulated by the Government of Kerala in terms of policy formulation and its implementation.  The Department is administered by the Transport Commissioner who is the Head of Department.</p>
        <ul class="fbg_ul">
          <li><a href="#">Enforcement of the Motor Vehicles Act and Rules</a></li>
          <li><a href="#">Registration of vehicles</a></li>
          <li><a href="#">Collection of taxes and fees</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p></p>
        <p class="contact_info"> <span>Address:</span> Thiruvandapuram Head Office<br />
          <span>Telephone:</span> 0485-2444551<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> 91152000000<br />
          <span>E-mail:</span> <a href="#">mvd07@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">GA</a>.</p>
      
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>