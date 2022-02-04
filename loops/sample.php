<table class = 'table table-bordered w-25 mx-auto mt-5'>

<?php
for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
    $total=$row+$col;
    if($total%2==0)
    {
    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
    }
    else
    {
    echo "<td height=30px width=30px bgcolor=#000000></td>";
    }
    }
    echo "</tr>";
}
    ?>
</table>