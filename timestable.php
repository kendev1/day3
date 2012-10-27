<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
<!--
@import url("css/style.css");
-->
</style>
</head>
<body>
<?php 
// Set 1 X array
for ($i=0; $i < 5; $i++) {
	$times_1[$i] = 1 * ($i+1);
//	echo ("$times_1[$i] <br>");
}

for ($i=0; $i < 5; $i++) {
	$times_2[$i] = 2 * ($i+1);
//	echo ("$times_2[$i] <br>");
}

for ($i=0; $i < 5; $i++) {
	$times_3[$i] = 3 * ($i+1);
//	echo ("$times_3[$i] <br>");
}

for ($i=0; $i < 5; $i++) {
	$times_4[$i] = 4 * ($i+1);
//	echo ("$times_4[$i] <br>");
}

for ($i=0; $i < 5; $i++) {
	$times_5[$i] = 5 * ($i+1);
//	echo ("$times_5[$i] <br>");
}




?>

<table id="hor-zebra" summary="TimesTable">
    <thead>
    	<tr>
        	<th scope="col">TimesTable</th>
            <th scope="col">x 1</th>
            <th scope="col">x 2</th>
            <th scope="col">x 3</th>
            <th scope="col">x 4</th>
            <th scope="col">x 5</th>
        </tr>
    </thead>
    <tbody>
    	<tr class="odd">
    		<td><?php echo ("one"); ?></td>
        	<td><?php echo ($times_1[0]); ?></td>
            <td><?php echo ($times_1[1]); ?></td>
            <td><?php echo ($times_1[2]); ?></td>
            <td><?php echo ($times_1[3]); ?></td>
            <td><?php echo ($times_1[4]); ?></td>
        </tr>
    	<tr >
    		<td><?php echo ("two"); ?></td>
        	<td><?php echo ($times_2[0]); ?></td>
            <td><?php echo ($times_2[1]); ?></td>
            <td><?php echo ($times_2[2]); ?></td>
            <td><?php echo ($times_2[3]); ?></td>
            <td><?php echo ($times_2[4]); ?></td>
        </tr>
     	<tr class="odd">
     	    <td><?php echo ("three"); ?></td>
        	<td><?php echo ($times_3[0]); ?></td>
            <td><?php echo ($times_3[1]); ?></td>
            <td><?php echo ($times_3[2]); ?></td>
            <td><?php echo ($times_3[3]); ?></td>
            <td><?php echo ($times_3[4]); ?></td>
        </tr>
    	<tr>
    		<td><?php echo ("four"); ?></td>
        	<td><?php echo ($times_4[0]); ?></td>
            <td><?php echo ($times_4[1]); ?></td>
            <td><?php echo ($times_4[2]); ?></td>
            <td><?php echo ($times_4[3]); ?></td>
            <td><?php echo ($times_4[4]); ?></td>
        </tr>
    	<tr class="odd">
    		<td><?php echo ("five"); ?></td>
        	<td><?php echo ($times_5[0]); ?></td>
            <td><?php echo ($times_5[1]); ?></td>
            <td><?php echo ($times_5[2]); ?></td>
            <td><?php echo ($times_5[3]); ?></td>
            <td><?php echo ($times_5[4]); ?></td>
        </tr>                       
    </tbody>
</table>




</body>
</html>
