
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
  .table{
    width: 100%;
  }
</style>

<table class="table table-bordered">
  <tbody>
  
    <?php 
    $n = 7;
    for($j = 0; $j < 10; $j++ ){ ;  ?>
      
    <tr>
      <?php for($i = 0; $i < 25; $i++ ){ ?>
      <td><?php echo $n; $n++;?></td>
      <?php }?>
    </tr>
    <?php ; }?>

  </tbody>
</table>