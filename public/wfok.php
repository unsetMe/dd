<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>WFPHPORDERV9.0_wfok</title>
    <style type="text/css">
        <!--
        *{margin:0;padding:0;}
        body{font:14px Arial,Verdana,simsun,\u5b8b\u4f53;color:#333;text-align:left;padding-top:100px;background-color:#fff;} 
        a:link,a:visited{color:#F00;text-decoration:none;}a:hover{color:#090;text-decoration:underline;}
		ul,li{list-style:none;display:block;}
        img{border:0 none;vertical-align:middle;}
		#head{width:620px;margin:0 auto;height:90px;padding:20px;text-align:center;border-bottom:2px dotted #DDD;}
		#foot{width:620px;margin:0 auto;height:90px;padding:20px;text-align:center;border-top:2px dotted #DDD;}
        #wfok{width:600px;margin:20px auto;height:auto;padding:20px;}
        #wfok li{width:600px;height:40px;line-height:40px;border-bottom:1px dotted #DDD;}    
        #wfok li span.l{float:left;width:120px;text-align:right;}    
        #wfok li span.r{float:right;width:450px;color:#BD0000;}   
        -->
    </style>
</head>
<body>
<div id="head">
    <img src="../template/images/wfok.gif" />
</div>
<div id="wfok">
    <ul>
        <li>
            <span class="l">�����ţ�</span>
            <span class="r"><?php echo $_GET['wfno']; ?></span>
        </li>
        <li>
            <span class="l">������Ʒ��</span>
            <span class="r"><?php echo $_GET['wfproduct']; ?></span>
        </li>
        <li>
            <span class="l">�ջ���������</span>
            <span class="r"><?php echo $_GET['wfname']; ?></span>
        </li>
        <li>
            <span class="l">�ֻ����룺</span>
            <span class="r"><?php echo $_GET['wfmob']; ?></span>
        </li>
        <?php if(!empty($_GET['wfprovince'])){echo "
        <li>
            <span class='l'>���ڵ�����</span>
            <span class='r'>".$_GET['wfprovince'].$_GET['wfcity'].$_GET['wfarea']."</span>
        </li>";}?>
        <li>
            <span class="l">���ʽ��</span>
            <span class="r"><?php echo $_GET['wfpay']; ?></span>
        </li>
    </ul>
</div>
<div id="foot">
    <a href='javascript:history.go(-1);' title="������ҳ"><img src="../template/images/wfgo.gif" alt="������ҳ" /></a>
</div>
<!-------------------------- �˴����ͳ��ת������ -------------------------->

<!-------------------------- �˴����ͳ��ת������ -------------------------->
</body>
</html>