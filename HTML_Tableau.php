<?php

include "Menu.php";
        Menu();

?>

<html>

    <head> 
        <title>Tableau</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' href='Menu.css'>
    </head>
    
    <body>
      <table border="1">
        <thead>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td scope="col"><b>1er Semestre</b></td>
                <td scope="col"><b>2éme Semestre</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="2"  rowspan="3"  scope="rowgroup"><b>SIO1</b></th>
                <td>SI1,SI2,SI3,SI4</td>
                <td>SI5,SI6</td>
            </tr>
            
            
                <td>SLAM</td>
                <td>SISR</td>
            
            <tr>
            
                <td>SLAM1,SLAM2</td>
                <td>SISR1,SISR2</td>
            </tr>
            
                <th colspan="2"  rowspan="3" scope="rowgroup"><b>SIO2</b></th>
            
                <td>SI7</td>
            <tr>
                <td>SLAM</td>
                <td>SISR</td> 
            </tr>
            
            <tr>
                <td>SLAM3,SLAM4,SLAM4</td>
                <td>SISR3,SISR4,SISR5</td>
            </td>
            



        </tbody>
        
        
      </table>
    
    </body>
      
</html>

