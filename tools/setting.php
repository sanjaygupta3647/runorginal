<?php include("../lib/opin.inc.php")?>
<?php 
if($cms->is_post_back()){
	$cms->sqlquery("rs","setting",$_POST,'id',1);
	$adm->sessset('Record has been updated', 's');
	$cms->redir(SITE_PATH_ADM."setting.php", true);
}
$rsAdmin=$cms->db_query("select * from #_setting where id='1'");
$arrAdmin=$cms->db_fetch_array($rsAdmin);
@extract($arrAdmin);
?>
<?php include_once "inc/header.inc.php"; ?>
 <div class="main">
     <? include "inc/header2.php"; ?>
    <div class="content"> 
    <?php $hedtitle = "Dashboard &rsaquo; Setting"; ?>   
    <div class="internal-box"><?=$adm->alert()?>
      <div class="title">
         Company Details 
      </div>
      <div class="tbl-contant">
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="frm-tbl2">
       <tr class="grey">
          <td width="18%" align="left" valign="middle">Company name:*</td>
          <td width="82%"><input  class="txt medium"  type="text" name="company" lang="R" title="Company" value="<?=$company?>" /></td>
        </tr>
        <tr class="grey">
          <td width="18%" align="left" valign="middle">Address:*</td>
          <td width="82%"><textarea    name="address" lang="R" rows="4" cols="30" title="Address" ><?=$address?></textarea></td>
        </tr>
		<tr >
		  <td width="18%" align="left" valign="middle">Phone:*</td>
		  <td width="82%"><input  class="txt medium"  type="text" name="phone" lang="R" title="Phone" value="<?=$phone?>" /></td>
		  </tr>
		<tr>
		  <td width="18%" align="left" valign="middle">Email:*</td>
		  <td width="82%"><input  class="txt medium"  type="text" name="email" lang="RisEmail" title="Email" value="<?=$email?>" /></td>
		  </tr>
         <tr>
            <td align="left" valign="middle">Max Profit %:*</td>
            <td><input name="pfp" type="text"  class="txt medium"  title="Max Profit" lang="R"  value="<?=$pfp?>"   /></td>
            </tr>
           <tr>
           <tr>
          <td width="18%" align="left" valign="middle">Facebook:</td>
          <td width="82%"><input  class="txt medium"  type="text" name="fb" value="<?=$fb?>" /></td>
        </tr>
         <tr>
          <td width="18%" align="left" valign="middle">Linkedin:</td>
          <td width="82%"><input  class="txt medium"  type="text" name="lin" value="<?=$lin?>" /></td>
        </tr>
         <tr>
          <td width="18%" align="left" valign="middle">Twitter:</td>
          <td width="82%"><input  class="txt medium"  type="text" name="tw" value="<?=$tw?>" /></td>
        </tr>
        <tr>
          <td width="18%" align="left" valign="middle">Google Plus:</td>
          <td width="82%"><input  class="txt medium"  type="text" name="gp" value="<?=$gp?>" /></td>
        </tr>
         <tr>
          <td width="18%" align="left" valign="middle">Youtube:</td>
          <td width="82%"><input  class="txt medium"  type="text" name="yt" value="<?=$yt?>" /></td>
        </tr>
		<tr>
		  <td align="left" valign="middle">&nbsp;</td>
		  <td><input type="submit" name="Submit" class="uibutton  loading" value="Submit" /></td>
		  </tr>
       </table>
      </div>
      <div class="internal-rnd-footer"></div>
    </div>
  </div>  
    <? include"inc/footer.inc.php"; ?>
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
