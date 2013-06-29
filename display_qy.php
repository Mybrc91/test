<?php
	session_start();
	include("smarty_inc.php");
	include("conn.php");
	header("Content-type:text/html;charset=utf-8");
	$id = $_GET["id"];
	if(!is_numeric($id)) die("id错误");
	$res = mysql_query("select * from jyxt_firm where ID={$id}");
	$row = mysql_fetch_array($res);
	$title = $row["Name"];
	$content = $row["Info"];
	$pubtime = $row["Date"];
	$id = $row["ID"];
	include("head.php");
	$smarty->assign(Title,$title);
	$smarty->assign(putime,$pubtime);
?>

<div class="wz1" style=" width:960px; text-align:center; margin:0px auto; height:auto; border: 1px  solid ; margin-bottom:5px">
      <ul class="wz1path"><!--
        <li style="float:left; padding-left:5px;  padding-right:5px;"><img src="/images/img_11.gif" height="16px;"/></li>
        --><li style="float:left;padding-left:7px;"><a href="index.php" target="_blank">首页</a>&nbsp;>>&nbsp;<a href="list.php?qy=1">企业信息</a> </li>
      </ul>
 <table width="960" border="0" cellpadding="0" cellspacing="6" class="border">
  <tr> 
    <td valign="top" width="100%" class="listcontent" align="center"> 
      <table width="100%" border="0" cellpadding="6" cellspacing="0">
        <tr> 
          <td class="listTitle"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align=center><strong><?php echo $title; ?></strong></td><td align=right>&nbsp;</td>
                </tr>
            </table>
          </td>
        </tr>
        
        <tr> 
          <td valign="top" class="list"> 
<?php echo $content; ?>
<br />
          </td>
        </tr>
        <tr valign="top" class="list">
        ID:<?php echo $id;?>
        </tr>
      </table>
    </td>
  </tr>
        <tr> 
          <td class="listTitle"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    				发布时间：<?php echo $pubtime; ?></td>
    			

                </tr>
            </table>
          </td>
        </tr>
</table>
</div>
<?php include("footer.php"); ?>
<?php //$smarty->display("indexnew.html")?>