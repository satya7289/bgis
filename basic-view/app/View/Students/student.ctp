<script type="text/javascript" src="js/jquery00.js"></script>
<style>
#accordion {
	background:#FFFFFF  repeat scroll 0;
	height:285px;
	padding:10px 0 10px 20px;
	width:970px;
	border:1px solid #ddd;
}
/* accordion header */
#accordion img {
	float:left;
	margin-right:10px;
	cursor:pointer;
	opacity:0.5;
	filter: alpha(opacity=50);
}
/* currently active header */
#accordion img.current {
	cursor:default;
	opacity:1;
	filter: alpha(opacity=100);
}
/* 
	accordion pane. should initially have zero width and display:none.
	the first pane should override these with inline style
*/
#accordion div {
	width:0px;
	float:left;
	display:none;
	margin-right:10px;
}
/* content inside a pane should have fixed width */
#accordion div h3 {
	color:#444;
	margin:0 0 -10px 0;
	width:260px;
	font-size:18px;
	margin-bottom: 8px;
}
#accordion div p {
	font-size:14px;
	width:400px;
	line-height:18px;
}
</style>
<style>
.menutree {
width: 980px;
margin: auto;
float: left;
text-align: left;
color: #656567;
font-size: 12px;
font-family: Arial;
margin-top: 10px;
margin-left: 10px;
}
</style>
  <div class="bannerinner">
  <?php echo $this->Html->image('/img/students/'.$banner_img,array('title' =>"BGIS Students", 'alt' => 'BGIS')); ?>
 </div>
    <div class="down">&nbsp;</div>
       <div class="middlecontent">  
       <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Student</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
         <?php echo $content;?>
       </div>
<script>
$(function() {
$("#accordion").tabs("#accordion div", {
	tabs: 'img', 
	effect: 'horizontal'
});
});
</script>