<option disabled selected>Select Subcategory</option> 
 <?php  
      foreach ($kategori->result() as $row)  
      {  
    ?>
<option value="<?php echo $row->pk_subcategory;?>"><?php echo $row->subcategory;?></option>
<?php } ?>