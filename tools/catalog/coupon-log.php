<?php include("../../lib/opin.inc.php")?>
<?php define("CPAGE","catalog/")?>
<?php include("../inc/header.inc.php")?>
<?php $adm->pageAuth("Coupon Log",$perm);?>

<?php  
	$start = intval($start);
	$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;
	$columns = "select * ";
	$sql = " from #_voucher_log where generatedByadmin  = '".$_SESSION[uid]."'   ";
	$order_by == '' ? $order_by = '(pid)' : true;
	$order_by2 == '' ? $order_by2 = 'desc' : true;
	$sql_count = "select count(*) ".$sql; 
	$sql .= "order by $order_by $order_by2 ";
	$sql .= "limit $start, $pagesize ";
	$sql = $columns.$sql;
	$result = $cms->db_query($sql);
	$reccnt = $cms->db_scalar($sql_count);
?>
<div class="main">
<header>
     
      <div class="hrd-right-wrap">
       <?php /*?> <nav>
          <ul>
            <li> <a href="<?=SITE_PATH_ADM?>"></a> </li>
            <li> <a href="<?=SITE_PATH_ADM?>catalog/collections.php">store_detail</a> </li>
            <li> <a href="<?=SITE_PATH_ADM?>catalog/manage-category.php">Category</a> </li>
            <li> <a href="<?=SITE_PATH_ADM?>setting.php?mode=true">Setting</a> </li>
           <!-- <li> <a href="">System</a> </li>-->
          </ul>
        </nav><?php */?>
        
        <div class="brdcm" id="hed-tit">Banner</div>
        <div class="unvrl-btn"> 
         
        
        </div> 
      </div>
      <div class="cl"></div>
    </header> 
    
 <div class="cl"></div>
<div class="content">
<div class="div-tbl">
<div class="cl"></div>
    <? //$adm->h1_tag('Dashboard &rsaquo; Collection Manager',$others)?>
   
<?php $hedtitle = "Coopon Log"; ?>    
      <?=$adm->alert()?>
      <div class="title"  id="innertit">
        <?=$adm->heading('Coopon Log')?>
      </div>
      <div class="tbl-contant">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="data-tbl">
          <tr class="t-hdr">
            <td width="2%" align="center"><?=$adm->orders('#',false)?></td>
            <td width="3%" align="center" valign="middle"><?=$adm->check_all()?></td>
            <td width="15%" align="center"><?=$adm->orders('Code',true)?></td>
            <td width="10%" align="center"><?=$adm->orders('Purpose',true)?></td>
            <td width="20%" align="center"><?=$adm->orders('User',true)?></td>
           
            <td width="15%" align="center"><?=$adm->orders('Amount',true)?></td>
            <td width="17%" align="center"><?=$adm->orders('Time',true)?></td> 
          </tr>
          <?php if($reccnt){ $nums=1; while ($line = $cms->db_fetch_array($result)){@extract($line);?>
          <tr <?=$adm->even_odd($nums)?>>
            <td align="center"><?=$nums?></td>
            <td align="center"><?=$adm->check_input($pid)?></td>
            <td align="center"><?=$voucherCode?></td>
			<?php 
			switch ($status) {
			  case "Reg":
				$ms = "Registration";
			    
				break;
			  case "renewal_reg":
				$ms = "Registration Renewal";
				 
				break;
			  case "SMS_renewal":
				$ms = "SMS Renewal";
			     
				break;
			  case "shopping":
				$ms = "Shopping";
				break;
			  default:
				$ms = "NA";
			}
			?>
			<td align="center"><?=$ms?></td>
            <td align="center"><?=$cms->getSingleresult("select title from fz_store_detail where store_user_id = '".$user_id."'")?></td>
			 
            <td align="center">Rs. <?=$voucherValue?></td>
			
			<td align="center"><?=$createTime?></td>
          </tr>
          <?php $nums++;}}else{ echo $adm->rowerror(8);}?>
        </table>
      </div>
    </div>
<?php include("../inc/footer.inc.php")?>
</div>
<div class="cl"></div>
</div>
</div>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>
