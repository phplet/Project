<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<p>欢迎你：<?php echo (session('adminname')); ?><a href="__APP__/Login/doLoginout" target="_top">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />

<table width="1299" height="500" border="1" cellpadding="1" cellspacing="">
  <tr>
    <td width="185"><h3>量表管理</h3></br>
					<a href="__APP__/Question/look">查看量表<a/><br/>
					<a href="__APP__/Question/test">量表测试<a/><br/>
    				<a href="__APP__/Index?type_link=2">增加量表<a/><br/>
					<hr size="4" width="100%" color="#CCCCCC" /></br></br>
					<h3>用户管理</h3></br>
					<a href="__APP__/User/look">查看用户<a/><br/>
					<a href="">删除用户<a/><br/>
                    <a href="">查看用户测评结果<a/><br/>
	&nbsp;</td>
    <td width="1098" height="50"  valign="top" >
	<?php if(is_array($date1)): foreach($date1 as $key=>$vo): if((vo.LB_leibie == 0)): ?><b>健康行为量表</b>
	<?php elseif(vo.LB_leibie == 1): ?><b>心理量表</b>
	<?php else: ?><b> 智力量表</b><?php endif; ?></br>
		<b>量表题目</b>：<?php echo ($vo["LB_title"]); ?><br>
		<b>量表简介</b>：<?php echo ($vo["LB_content"]); ?><br>
		<b>创建时间</b>：<?php echo (date('Y年m月d日H:i:s',$vo["createtime"])); ?><br>
		<b>使用人数</b>：<?php echo ($vo["LB_num"]); ?>	<br><?php endforeach; endif; ?>
	<hr>
	
	
		<form name="form3" method="post" action="">
			<table width="800"  height="65" border="0" cellpadding="">
				<tr height="20">
					<td height="32">请填写儿童信息:</td>
					<td>姓名:<input type="text" name="childname"></td><td>年龄:<input type="text" name="childage"></td><td>性别:<input type="radio" name="childsex" value="0">男<input type="radio" name="childsex" value=1>女</td>
				</tr>
		  </table>
		  <table width="800" border="0" height="300"  cellspacing="10">
		  	请选择最适合孩子日常表现的一项</br>
			<?php
 for($i=1;$i<=count($date2)-2;$i++){ echo "题目$i:".$date2[Question_.$i]; echo "</br>"; for($j=1;$j<=(count($date3)-2)/2;$j++){ echo $date3[A.$j]; } echo "</br>"; } ?>
		  </table>
		</form>
	
	&nbsp;</td>
  </tr>
</table>

</body>
</html>