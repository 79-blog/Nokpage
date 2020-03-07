<? require 'header.php'; ?>
<div class="panel-heading">监控面板</div>
<table class="table table-striped">
<thead>
<tr>
<th>名称</th>
<th>标识</th>
<th>状态</th>
<th>可用</th>
</tr>
</thead>
<tbody>
<?
require 'DB.php';
$result=$_SERVER['medoo']->select("status", "*" );
foreach ($result as $value) {
   echo '<tr><td>'.$value['name'].'</td> <td>'.$value['url'].'</td><td>正常</td><td>96％</td>';
 }
?>

</tr>
</tbody>
</table>
</div>
<? require 'footer.php';