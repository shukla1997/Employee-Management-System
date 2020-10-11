<?php
$link = mysqli_connect("localhost", "root", "", "record");

$q2 = "SELECT count(id) as total from emp_record";
$result2 = mysqli_query($link, $q2);
$row2 = mysqli_fetch_object($result2);
echo $total = $row2->total;

if (!isset($_GET['limit']))
    $limit = 5;
else
    $limit = $_GET['limit'];


if (!isset($_GET['offset']))
    $offset = 0;
else
    $offset = $_GET['offset'];

$pages = (int) ($total / 5);
if ($total % $limit != 0) {
    $pages = $pages + 1;
}







$q = "SELECT * FROM emp_record LIMIT " . $offset . "," . $limit;
$result = mysqli_query($link, $q);

if (mysqli_num_rows($result) > 0) {
?>
<table width="100%" border="5">
<caption>EMS</caption>
    <tr>
        <th>ID</th>
        <th>EName</th>
        <th>Department</th>
        <th>SSN</th>
        <th>Salary</th>
        <th>Home Address</th>
    </tr>
    <?php
        while ($row = mysqli_fetch_object($result)) {
        ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->ename; ?></td>
        <td><?php echo $row->ssn; ?></td>
        <td><?php echo $row->dept; ?></td>
        <td><?php echo $row->salary;?></td>
        <td><?php echo $row->homeaddress;?></td>
    </tr>
    <?php
        }
        ?>
</table>
<?php
    for ($i = 0; $i < $pages; $i++) {
        $offset = $limit * $i;
    ?>
<a href="pagination.php?offset=<?php echo $offset; ?>&limit=<?php echo $limit; ?>"><?php echo $i + 1; ?></a>
<?php
    }
}
?>