<?php
$a = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);
?>
<style>
.first{background:red;color:#fff;}
.second{background:green;color:#fff;}
.third{background:blue;color:#fff;}
.forth{background:#eeeeee;color:#000;}
</style>
<table border="1px solid #000;" width="600">
<thead>
<th>Name</th>
<th>Color</th>
<th>Element</th>
<th>Likes</th>
</thead>
<tbody>
<tr>
<td class="first"><?php echo $a[0]['Name'];  ?></td>
<td class="second"><?php echo $a[0]['Color'];  ?></td>
<td class="third"><?php echo $a[0]['Element'];  ?></td>
<td class="forth"><?php echo $a[0]['Likes'];  ?></td>
</tr>
<tr>
<td class="first"><?php echo $a[1]['Name'];  ?></td>
<td class="second"><?php echo $a[1]['Color'];  ?></td>
<td class="third"><?php echo $a[1]['Element'];  ?></td>
<td class="forth"><?php echo $a[1]['Likes'];  ?></td>
</tr>
<tr>
<td class="first"><?php echo $a[2]['Name'];  ?></td>
<td class="second"><?php echo $a[2]['Color'];  ?></td>
<td class="third"><?php echo $a[2]['Element'];  ?></td>
<td class="forth"><?php echo $a[2]['Likes'];  ?></td>
</tr>

</tbody>

</table>
