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

function GetDateStr(AddDayCount){
	var dd = new Date();
	dd.setDate(dd.getDate()+AddDayCount);
	var y = dd.getFullYear();
	var m = dd.getMonth()+1;
	var d = dd.getDate();
	return y+"-"+m+"-"+d;
}

var i=0;
for(i=0;i<22;i++){
	document.write(GetDateStr(-1));	
	var rand1=parseInt(Math.random()*22+1);	
	quotes=new Array 
	quotes[1]=' ������' 
	quotes[2]=' �Ϻ���'
	quotes[3]=' ����'
	quotes[4]=' ���ϵ�'
	quotes[5]=' ������'
	quotes[6]=' ������'
	quotes[7]=' �㶫��'
	quotes[8]=' ������'
	quotes[9]=' �����'
	quotes[10]=' �Ĵ���'
	quotes[11]=' ɽ����'
	quotes[12]=' ���ϵ�'
	quotes[13]=' �ӱ���'
	quotes[14]=' ɽ����'
	quotes[15]=' ���ݵ�'
	quotes[16]=' ��������'
	quotes[17]=' ������'
	quotes[18]=' �㽭��'
	quotes[19]=' ���յ�'
	quotes[20]=' ������'
	quotes[21]=' ���ϵ�'
	quotes[22]=' ������'
	var quote=quotes[rand1]
	document.write(quote)	
	var rand1=parseInt(Math.random()*22+1);	
	quotes=new Array
	quotes[1]='��С��'
	quotes[2]='��С��'
	quotes[3]='������'
	quotes[4]='��С��'
	quotes[5]='������'
	quotes[6]='��С��'
	quotes[7]='��С��'
	quotes[8]='������'
	quotes[9]='��С��'
	quotes[10]='��С��'
	quotes[11]='��С��'
	quotes[12]='��С��'
	quotes[13]='������'
	quotes[14]='¬С��'
	quotes[15]='��С��'
	quotes[16]='������'
	quotes[17]='��С��'
	quotes[18]='��С��'
	quotes[19]='��С��'
	quotes[20]='��С��'
	quotes[21]='������'
	quotes[22]='��С��'	
	var quote=quotes[rand1]
	document.write(quote)
	var rand1=parseInt(Math.random()*5+1)
	quotes=new Array
	quotes[1]='��13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'��' 
	quotes[2]='��15'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'��' 
	quotes[3]='��13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'��' 
	quotes[4]='��18'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'��' 
	quotes[5]='��13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'��' 
	var quote=quotes[rand1]
	document.write(quote)
	document.write('<br>')
	var rand1=parseInt(Math.random()*6+1)
	quotes=new Array
	quotes[1]='<p>������ ��Ʒ��AAAAAAAAAA �ѷ��� ����EMS <font color="#FF0000">��</font></p>'
	quotes[2]='<p>������ ��Ʒ��BBBBBBBBBB �ѷ��� Բͨ�ٵ� <font color="#FF0000">��</font></p>'
	quotes[3]='<p>������ ��Ʒ��CCCCCCCCCC �ѷ��� ��ͨ��� <font color="#FF0000">��</font></p>'
	quotes[4]='<p>������ ��Ʒ��DDDDDDDDDD �ѷ��� ��ͨ�ٵ� <font color="#FF0000">��</font></p>'
	quotes[5]='<p>������ ��Ʒ��AAAAAAAAAA �ѷ��� �ϴ���� <font color="#FF0000">��</font></p>'
	quotes[6]='<p>������ ��Ʒ��BBBBBBBBBB �ѷ��� ˳������ <font color="#FF0000">��</font></p>'
	var quote=quotes[rand1]
	document.write(quote)
	document.write('<br>');
}

// WFPHPORDER