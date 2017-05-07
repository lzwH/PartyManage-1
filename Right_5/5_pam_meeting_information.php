<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("footer/footer_head.php"); ?>
  </head>

<body class="">   
	<?php include("5_footer_body_pam.php"); ?>

	<div class="content"> 
        <div class="header">
            <h1 class="page-title">会议详细信息</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="5_index.php">返回首页</a> / <a href="5_pam_meeting.php">会议信息表</a> / <span class="divider">会议详细信息</span></li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
            
<?php include("../footer/footer_pam_meeting_look.php");?>
<?php include("../footer/footer_pam_attend_look.php");?>
<?php include("../footer/footer_pam_unattend_look.php");?>


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


