<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("footer/footer_head.php"); ?>
  </head>

<body class="">   
	<?php include("4_footer_body_pmd.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">申请入党人员信息</h1>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="4_index.php">返回首页</a> /<span class="divider">申请入党人员信息</span></li>
        </ul>

        <div class="container-fluid">
        <div class="row-fluid">
     	<div class="btn-toolbar">
    <button class="btn">导出</button> 
    	</div>
    	<!--搜索框-->
    	<div class="search-well">
                <form class="form-inline">
                    <input class="input-xlarge" placeholder="根据身份证号或姓名查询" id="appendedInputButton" type="text">
                    <button class="btn" type="button"><i class="icon-search"></i> 查询</button>
                </form>
     	</div>
	</div>
  
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr> 
          <th width="308">姓名</th>
          <th width="233">人员类别</th>
          <th width="213">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>张三</td>
          <td>本科生</td>
          <td><a href="4_pmd_applicant_stu.php">详细信息</a></td>
        </tr>
         <tr>
          <td>李四</td>
          <td>教师</td>
          <td><a href="4_pmd_applicant_tea.php">详细信息</a></td>
        </tr>
     
      </tbody>
    </table>
</div>
<!--分页-->
<div class="pagination">
    <ul>
        <li><a href="#">上一页</a></li>
        <li><a href="#">1</a></li> 
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">下一页</a></li>
    </ul>
</div>

<?php include("../footer/footer_bottom.php");?>
</div>
        </div>
    </div>

    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


