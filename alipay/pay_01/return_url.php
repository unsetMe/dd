<?php
/* * 
 * ���ܣ�֧����ҳ����תͬ��֪ͨҳ��
 * �汾��3.3
 * ���ڣ�2012-07-23
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���

 *************************ҳ�湦��˵��*************************
 * ��ҳ����ڱ������Բ���
 * �ɷ���HTML������ҳ��Ĵ��롢�̻�ҵ���߼��������
 * ��ҳ�����ʹ��PHP�������ߵ��ԣ�Ҳ����ʹ��д�ı�����logResult���ú����ѱ�Ĭ�Ϲرգ���alipay_notify_class.php�еĺ���verifyReturn
 */

require_once("../../config.php");
require_once("lib/alipay_notify.class.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <style type="text/css">
        <!--
        *{margin:0;padding:0;}
        body{font:14px Arial,Verdana,simsun,\u5b8b\u4f53;color:#333;text-align:left;padding-top:100px;background-color:#fff;} 
        a:link,a:visited{color:#F00;text-decoration:none;}a:hover{color:#090;text-decoration:underline;}
		ul,li{list-style:none;display:block;}
        img{border:0 none;vertical-align:middle;}
        #wfok{width:600px;margin:20px auto;height:auto;padding:20px;}
        #wfok li{width:600px;height:40px;line-height:40px;border-bottom:1px dotted #DDD;}    
        #wfok li span.l{float:left;width:120px;text-align:right;}    
        #wfok li span.r{float:right;width:450px;color:#BD0000;}   
        -->
    </style>
<?php
//����ó�֪ͨ��֤���
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//��֤�ɹ�
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//������������̻���ҵ���߼��������
	
	//�������������ҵ���߼�����д�������´�������ο�������
    //��ȡ֧������֪ͨ���ز������ɲο������ĵ���ҳ����תͬ��֪ͨ�����б�

	//�̻�������

	$out_trade_no = $_GET['out_trade_no'];

	//֧�������׺�

	$trade_no = $_GET['trade_no'];

	//����״̬
	$trade_status = $_GET['trade_status'];


    if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
		//�жϸñʶ����Ƿ����̻���վ���Ѿ���������
			//���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����
			//���������������ִ���̻���ҵ�����
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }
		
	echo "<p style='height:40px;line-height:40px;font-size:14px;color:#BD0000;text-align:center;'>��ϲ������֧���ɹ���</p>";

	//�������������ҵ���߼�����д�������ϴ�������ο�������
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //��֤ʧ��
    //��Ҫ���ԣ��뿴alipay_notify.phpҳ���verifyReturn����
    echo "<p style='height:40px;line-height:40px;font-size:14px;color:#009900;text-align:center;'>֧��ʧ�ܣ�</p>";
}
?>
        <title>֧������ʱ���˽��׽ӿ�</title>
	</head>
    <body>
        <div id="wfok">
            <ul>
                <li>
                    <span class="l">�����ţ�</span>
                    <span class="r"><?php echo $_GET['out_trade_no']; ?></span>
                </li>
                <li>
                    <span class="l">֧�������׺ţ�</span>
                    <span class="r"><?php echo $_GET['trade_no']; ?></span>
                </li>
                <li>
                    <span class="l">�����</span>
                    <span class="r"><?php echo $_GET['total_fee']; ?></span>
                </li>
                <li>
                    <span class="l">����״̬��</span>
                    <span class="r"><?php echo $_GET['trade_status']; ?></span>
                </li>
            </ul>
        </div>
    </body>
</html>