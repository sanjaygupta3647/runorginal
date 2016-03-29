<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php 
if($cms->is_post_back()){  
	$_POST[url] = $adm->baseurl($_POST[title]);
 
	if($updateid){
		$cms->sqlquery("rs","products",$_POST,'pid',$updateid); 
		$adm->sessset('Record has been updated', 's');
	}else{
		$_POST[submitdate] = time();
		$cms->sqlquery("rs","products",$_POST);
		$updateid = mysql_insert_id();
		$adm->sessset('Record has been added', 's');
	} 
	 
	if(isset($_GET['start']) && $_GET['start'] > 0) {
		$path = SITE_PATH_ADM.CPAGE."/index.php?start=".$_GET['start'];
	} else {
		$path = SITE_PATH_ADM.CPAGE;
	}
	$cms->redir($path, true);
}	
if(isset($id)){
	$rsAdmin=$cms->db_query("select * from #_products where pid='".$id."'");
	$arrAdmin=$cms->db_fetch_array($rsAdmin); 
	@extract($arrAdmin);
}
?>   <table width="100%" border="0" align="left" cellpadding="4" cellspacing="1" class="frm-tbl2">
  
    <tr  class="grey_">
      <td width="25%" class="label">Select Parent Category:</td>
      <td width="75%">
	  <?php $rsAdmin=$cms->db_query("select pid,name from #_category where parentId='0' order by name");
	    ?>
      <select name="cat_id" class="txt medium" id="pcatId" lang="R" title="Parent Category">
      <option value="0")?>---Select Category--</option> <?php      
	  while($arrAdmin=$cms->db_fetch_array($rsAdmin)){
			@extract($arrAdmin);
			?>
				<optgroup label="<?=stripslashes($name)?>"><?php			   
				$rsAdmin2=$cms->db_query("select pid,name from #_category where parentId='$pid' order by name" );
				if(mysql_num_rows($rsAdmin2)){
					while($arrAdmin3=$cms->db_fetch_array($rsAdmin2)){?> 						 
						  <option value="<?=$arrAdmin3[pid]?>" <?=(($arrAdmin3[pid]==$cat_id)?'selected="selected"':'')?>>
						  <?=stripslashes($arrAdmin3[name])?></option>  <?php
						  }
					}
				}?>
				</optgroup><?php
				
	    ?>
	  </select>	      
      </td>
    </tr>
    
    
    
   <tr>
      <td width="25%"  class="label">Name:</td>
      <td width="75%"><input type="text" name="title"  lang="R" title="Name" class="txt medium" value="<?=$title?>" /></td>
    </tr>
	<tr  class="grey_">
      <td width="25%" valign="top" class="label">Meta title:</td>
      <td width="75%"><textarea name="meta_title" cols="80" rows="5" id="meta_title"><?=$meta_title?></textarea></td>
    </tr>
    
   <tr>
      <td width="25%" valign="top"  class="label">Meta keywords :</td>
      <td width="75%"><textarea name="meta_keyword" cols="80" rows="5" id="meta_keyword"><?=$meta_keyword?></textarea></td>
    </tr>
	<tr  class="grey_">
	  <td valign="top" class="label">Meta description :</td> 
	  <td><textarea name="meta_description" cols="80" rows="5" id="meta_description"><?=$meta_description?></textarea></td>
    </tr>
	 
	 <tr>
      <td width="25%"  class="label">Key Feature 1:</td>
      <td width="75%"><input type="text" name="kf1"  class="txt medium"value="<?=$kf1?>" /></td>
    </tr>
	<tr>
      <td width="25%"  class="label">Key Feature 2:</td>
      <td width="75%"><input type="text" name="kf2"  class="txt medium"value="<?=$kf2?>" /></td>
    </tr>
	<tr>
      <td width="25%"  class="label">Key Feature 3:</td>
      <td width="75%"><input type="text" name="kf3"  class="txt medium"value="<?=$kf3?>" /></td>
    </tr>
	<tr>
      <td width="25%"  class="label">Key Feature 4:</td>
      <td width="75%"><input type="text" name="kf4"  class="txt medium"value="<?=$kf4?>" /></td>
    </tr>
	<tr>
      <td width="25%"  class="label">Key Feature 5:</td>
      <td width="75%"><input type="text" name="kf5"  class="txt medium"value="<?=$kf5?>" /></td>
    </tr>
	 
	<!--
	<tr>
	  <td valign="top" class="label">Short description:</td>
	  <td valign="top">
		 <?=$adm->get_editor('body1', stripslashes($body1))?> 
      </td>
	</tr> -->

	 
 
	
	  
	  
  
	 <tr>
      <td width="25%"  class="label">Price:</td>
      <td width="75%"><input type="text" name="price"  class="txt medium"value="<?=$price?>" /></td>
    </tr>

    
          
        
	<tr>
	  <td class="label">Status:<span>*</span></td>
	  <td><select name="status" class="txt medium" lang="R" title="Status">
	  <option value="Active" <?=(($status=='Active')?'selected="selected"':'')?>>Active</option>
	  <option value="Inactive" <?=(($status=='Inactive')?'selected="selected"':'')?>>Inactive</option>
	  </select>	  </td>
    </tr>
	 
    
	<tr>
	  <td>&nbsp;</td>
	  <td>
	  <input type="submit" name="Submit" class="uibutton  loading" value="&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;" /></td>
    </tr>	
  </table>
 <script type="text/javascript">
	$("#price").blur(function(){	
	var price =  $(this).val();  
	var offerprice =  $("#offerprice").val();
	if(offerprice>price){
		alert("Offerprice can not be greater then actual price");	
		$("#offerprice").val(price);
	}
	if(!offerprice){
		$("#offerprice").val(price);
	}
	
	});
	$("#pcatId").change(function(){
		var catid = $(this).val();
			$.ajax({ 
			url: '<?=SITE_PATH_ADM.CPAGE?>/ajax.php?cat_id='+catid, 
			success: function (data) {
				$("#subcat").show();
				$("#ajaxDiv").html(data); 
			},
			error: function (request, status, error) {
			alert(request.responseText);
			}
			}); 
			
			$.ajax({ 
			url: '<?=SITE_PATH_ADM.CPAGE?>/specification.php?cat_id='+catid, 
			success: function (data) {
				$(".specificationtr").show();
				$("#ajaxDiv2").html(data); 
			},
			error: function (request, status, error) {
			alert(request.responseText);
			}
			}); 
		}); 

		$("#change").click(function(){
			var catid = $(this).attr('title');
			$.ajax({ 
			url: '<?=SITE_PATH_ADM.CPAGE?>/specification.php?cat_id='+catid, 
			success: function (data) {
				$(".specificationtr").show();
				$("#ajaxDiv2").html(data); 
			},
			error: function (request, status, error) {
			alert(request.responseText);
			}
			}); 
		}); 
 </script>
 
