<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php 
if($cms->is_post_back()){  
	$_POST[url] = $adm->baseurl($_POST[title]);
	if(count($_POST[size])){
		$_POST[psize] = implode(',',$_POST[size]);
	}
	if(count($_POST[color])){
		$_POST[colors] = implode(',',$_POST[color]);
	}
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
      <td width="75%"><input type="text" name="meta_title"  lang="R" title="Title" class="txt medium" value="<?=$meta_title?>" />
	  </td>
    </tr>
    
   <tr>
      <td width="25%" valign="top"  class="label">Meta keywords :</td>
      <td width="75%"><textarea name="meta_keyword" cols="80" rows="5" id="meta_keyword"><?=$meta_keyword?></textarea></td>
    </tr>
	<tr  class="grey_">
	  <td valign="top" class="label">Meta description :</td> 
	  <td><textarea name="meta_description" cols="80" rows="5" id="meta_description"><?=$meta_description?></textarea></td>
    </tr>

	<tr  class="grey_">
	  <td valign="top" class="label">Size :</td> 
	  <td><?php  
	      if($psize){
			$arr = explode(',',$psize);
		  }else{
			$arr = array();
		  }
	      $result = $cms->db_query("Select name from #_dimension where status = 'Active' ");
		  while ($d = $cms->db_fetch_array($result)){ 
				?><div style="height:25px;float: left;margin: 5px;">
				<input type="checkbox" name="size[]" <?=(in_array($d[name],$arr))?'checked':''?> value="<?=$d[name]?>" /> &nbsp; <?=$d[name]?></div><?php
		  }
		  ?>    
    
	  </td>
    </tr>

	<tr  class="grey_">
	  <td valign="top" class="label">Color :</td> 
	  <td><?php  
	      if($colors){
			$arr = explode(',',$colors);
		  }else{
			$arr = array();
		  }
	      $result = $cms->db_query("Select name from #_color where status = 'Active' ");
		  while ($d = $cms->db_fetch_array($result)){ 
				?><div style="height:25px;float: left;margin: 5px;">
				<input type="checkbox" name="color[]" <?=(in_array($d[name],$arr))?'checked':''?> value="<?=$d[name]?>" /> &nbsp; <?=$d[name]?></div><?php
		  }
		  ?>    
    
	  </td>
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
	 
	 <?php if($front  and is_file($_SERVER['DOCUMENT_ROOT'].SITE_SUB_PATH."uploaded_files/orginal/".$front)==true){?>
          <tr>
            <td valign="top" class="label">&nbsp;</td>
            <td valign="top"><img src="<?=SITE_PATH?>uploaded_files/orginal/<?=$front?>" width="100"> &nbsp;&nbsp;
            </td>
          </tr>
          <?php } ?>

          <tr>
            <td valign="top" class="label">Front Image:</td>
            <td valign="top"> <input type="text" name="front" value="<?=$front?>" class="txt medium" id="upimg" />
       <img onClick="window.open('<?=SITE_PATH_ADM."crop/imageupload.php?imgid=upimg&image=product&view=thumb&name=".$front?>','mywindow','width=900,height=400,left=200,scrollbars=yes, top=100,screenX=0,screenY=100')" src="<?=SITE_PATH_ADM?>images/clickhere.png" alt=""  class="img-click" /> <br /></td>
          </tr>
          
        <?php if($back   and is_file($_SERVER['DOCUMENT_ROOT'].SITE_SUB_PATH."uploaded_files/orginal/".$back)==true){?>
          <tr>
            <td valign="top" class="label">&nbsp;</td>
            <td valign="top"><img src="<?=SITE_PATH?>uploaded_files/orginal/<?=$back?>" width="100"> &nbsp;&nbsp;
            </td>
          </tr>
          <?php } ?>
          <tr>
            <td valign="top" class="label">Back Image:</td>
            <td valign="top"> <input type="text" name="back" value="<?=$back?>" class="txt medium" id="upimg2" />
       <img onClick="window.open('<?=SITE_PATH_ADM."crop/imageupload.php?imgid=upimg2&image=product&view=big&name=".$back?>','mywindow','width=900,height=400,left=200,scrollbars=yes, top=100,screenX=0,screenY=100')" src="<?=SITE_PATH_ADM?>images/clickhere.png" alt="" class="img-click" /> <br /></td>
          </tr>
	  
	  

	 
 
	
	  
	  	  
	  

  
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
 
 
