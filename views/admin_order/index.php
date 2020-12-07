
<?php include ROOT.'/views/include/admin_header.php'; ?>
    <!-- END Header -->

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Выберите orders для изменения</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
  
  <li>
    
    <a href="#" class="addlink">
      Добавить orders
    </a>
  </li>
  


          
        </ul>
    
    
    <div class="module" id="changelist">
      


      

      
        
      

      <form id="changelist-form" method="post" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="dhdQ4702k6Xai62yQx8pgIz9Wy9vL8yG5RksbdkiNgGpZIr8iR4l6r2P0ih18R2K">
      

      
          
<div class="actions">
  
    
    <label>Действие: <select name="action" required>
  <option value="" selected>---------</option>

  <option value="delete_selected">Удалить выбранные orderss</option>

</select></label><input type="hidden" name="select_across" value="0" class="select-across">
    
    
    <button type="submit" class="button" title="Выполнить выбранное действие" name="index" value="0">Выполнить</button>
    
    
    
        <span class="action-counter" data-actions-icnt="8">Выбрано 0 объектов из 8 </span>
        
    
    
  
</div>

          
<input type="button" value="Check All" onclick="check();">
<input type="button" value="Uncheck All" onclick="uncheck();">


<table id="result_list">
<thead>
<tr>

<th scope="col"  class="action-checkbox-column">
   
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="column-__str__">
   
   <div class="text"><span>Orders</span></div>
   <div class="clear"></div>
</th>

</tr>
</thead>
<tbody>

<?php foreach ($ordersList as $order): ?>
	<tr class="row1">
    <td class="action-checkbox">
    	<input type="checkbox" name="_selected_action" value="119" class="action-select">
    </td>
    	<th class="field-__str__">
     		 <a href="/admin/orders/view/<?php echo $order['id'];?>">
     		 	 Пользователь <?php echo  $order['user_name']; ?> сделал заказ <?php echo 'ID '.$order['id'];?> (<?php echo $order['date'];?>)
     		 </a>
 		</th>
	</tr>
<?php endforeach;?>

</tbody>
</table>


          
      
      



</body>
</html>


<?php include ROOT.'/views/include/admin_footer.php'; ?>