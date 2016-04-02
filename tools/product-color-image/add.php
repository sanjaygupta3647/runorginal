<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php 
 
if($cms->is_post_back()){ 
	$_POST['prod_id'] = $_GET['prod_id'];
	if($id){ 
		$cms->sqlquery("rs","products_cimage",$_POST,'pid',$updateid);
		$adm->sessset('Record has been updated', 's');
		
	} else { 
			$cms->sqlquery("rs","products_cimage",$_POST);
			$adm->sessset('Record has been added', 's'); 
		}
		//$cms->redir(SITE_PATH_ADM.CPAGE, true);
	
 
    $path = SITE_PATH_ADM.CPAGE."?prod_id=".$prod_id;
	 
	$cms->redir($path, true);	
	
}
	 
	
	
 
if(isset($id)){
	$rsAdmin=$cms->db_query("select * from #_products_cimage where pid='".$id."'");
	$arrAdmin=$cms->db_fetch_array($rsAdmin); 
	@extract($arrAdmin);
}
?>
  
      <table width="100%" border="0" align="left" cellpadding="2" cellspacing="1"  class="frm-tbl2">
        
      <tr  class="grey_">
      <td width="25%" class="label">Select Color:</td>
      <td width="75%">
	  <?php $rsAdmin=$cms->db_query("select pid,name from #_color where status = 'Active' order by name");
	    ?>
      <select name="color_id" class="txt medium" id="pcatId" lang="R" title="Parent Category">
      <option value="0")?>---Select Color--</option> <?php      
				while($c=$cms->db_fetch_array($rsAdmin)){?> 
						  <option value="<?=$c[pid]?>" <?=(($c[pid]==$color_id)?'selected="selected"':'')?>>
						  <?=stripslashes($c[name])?></option>  <?php 
				} 
				
	    ?>
	  </select>	      
      </td>
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
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" class="uibutton  loading" value="&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;" /></td>
          </tr>
        </table>
     
 
 