<?php

/**
 *******************************************************************
 ************* �������������������������������������� **************
 ************* ����  DZPHP���߶���ϵͳ�ٷ���ʽ�� ���� **************
 ************* �������������������������������������� **************
 ************* �ٷ����̣�http://mrdzgzs.taobao.com/   **************
 ************* �����޸ģ�MR.DZ                        **************
 ************* �ͻ�����[�Ա�����] star1cjl          **************
 ************* ����֧�֣�[��ѶQQ] 80968296            **************
 *******************************************************************
 *************   �ٷ����� *** ��Ȩ���� *** ����ؾ�   **************
 *******************************************************************
 */

error_reporting(0);
session_start();
date_default_timezone_set('Asia/Shanghai');
define('wfsys', dirname(__FILE__) . '/');
require_once wfsys.'public/wfnet.php';
$mail->Subject = "�ͻ���".$wfname."���ύ���¶�������ע����գ�";
$mail->Body = "
<div style='width:40%;margin: 0 auto;padding:30px 50px;border:5px solid #bd0a01;background:#FFC;'>
	<div style='width:100%;height:30px;line-height:30px;font-size:30px;font-weight:bold;color:#bd0a01;text-align:center;padding:0 0 18px 0;border-bottom:2px dotted #bd0a01;clear:both;'>".$wfsite."-".$mrdzgzsa."</div>
	<p>��������š���<font color='#BD0000'>".$wfno."</font></p>
	<P>���µ�ʱ�䡿��".$wfdate."</P>
	<P>��������Ʒ����".$wfproduct."</P>
	<P>����Ʒ�ͺš���".$wfproductb."</P>
	<P>�������ܼۡ���".$wfmun." / ".$wfprice."</P>
	<P>���ջ���������".$wfname."</P>
	<P>�����ڵ�������".$wfprovince.$wfcity.$wfarea."</P>
	<P>����ϸ��ַ����".$wfaddress."</P>
	<P>���������롿��".$wfpost."</P>
	<P>���ֻ����롿��<a href='http://www.baidu.com/s?wd=".$wfmob."'>".$wfmob."</a></P>
	<P>�������绰����".$wftel."</P>
	<P>���ۿۺ��롿��".$wfqq."</P>
	<P>���������䡿��".$wfemail."</P>
	<P>�����ʽ����".$wfpay."</P>
	<P>�����Ա�ע����".$wfguest."</P>
	<P>����·ҳ�桿��<a href='".iconv("GBK", "UTF-8", $_POST['wfddll'])."'>".iconv("GBK", "UTF-8", $_POST['wfddll'])."</a></P>
	<P>���µ�ҳ�桿��<a href='"."$_SERVER[HTTP_REFERER]"."'>"."$_SERVER[HTTP_REFERER]"."</a></P>
	<P>���µ���IP����<a href='http://www.baidu.com/s?wd="."$_SERVER[REMOTE_ADDR]"."'>"."$_SERVER[REMOTE_ADDR]"."</a></P>
	<p>".$mrdzgzs."</p>
</div>";
if(empty($_POST['wfname'])||empty($_POST['wfmob'])||empty($_POST['wfcode'])||$_POST['wfcode'] != $_SESSION['syscode']){
    echo "<meta http-equiv='Content-Type' content='text/html; charset=gb2312' />";	
    echo "<script>alert('��֤�����벻��ȷ��');javascript:history.go(-1);</script>";
    exit(0);
}
if (isset($_SESSION["post_sep"])){
    if (time() - $_SESSION["post_sep"] < $wfsep){
	    exit("<script>alert('$wfmsg');javascript:history.go(-1);</script>");
	}
	else{
	    $_SESSION["post_sep"] = time();
	} 
}
else{
    $_SESSION["post_sep"] = time(); 
}
if(!$mail->Send()){
    echo $errormsg;
}
elseif($wfpay=="֧����֧��"){
    $url="alipay/pay_".$alipaytype."/alipayapi.php?wfproduct=".urlencode($wfproduct)."&wfmun=".$wfmun."&wfzfbjg=".$wfzfbjg."&wfname=".urlencode($wfname)."&wfaddress=".urlencode($wfaddress)."&wfmob=".$wfmob."&wftel=".$wftel."&wfpost=".$wfpost."&wfguest=".urlencode($wfguest)."&wfno=".$wfno;
    Header("Location:$url"); 
    exit;
}
else{
    $url="public/wfok.php?wfproduct=".urlencode($wfproduct)."&wfproductb=".urlencode($wfproductb)."&wfmun=".$wfmun."&wfprice=".$wfprice."&wfname=".urlencode($wfname)."&wfmob=".$wfmob."&wftel=".$wftel."&wfprovince=".urlencode($wfprovince)."&wfcity=".urlencode($wfcity)."&wfarea=".urlencode($wfarea)."&wfaddress=".urlencode($wfaddress)."&wfqq=".$wfqq."&wfemail=".$wfemail."&wfpost=".$wfpost."&wfpay=".urlencode($wfpay)."&wfno=".$wfno;
    Header("Location:$url");
    exit;
}

?>