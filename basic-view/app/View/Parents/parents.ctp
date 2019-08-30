  <style>
   .parentsicons
   {
   width:980px; margin:auto; float:left; border-top:1px #CCC solid; padding-top:15px; margin-top:15px;
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
  <?php echo $this->Html->image('/img/parents/'.$banner_img,array('title' =>"BGIS Parents", 'alt' => 'BGIS')); ?>
 </div>
    <div class="down">&nbsp;</div>
       <div class="middlecontent">  
       <div class="menutree">
<div itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://bgis.org/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" itemprop="url"><span itemprop="title">Parent</span></a> 
</div></div></div>
<div class="down">&nbsp;</div>
         <?php echo $content;?>
       </div>
       <div class="parentsicons"><a href="http://parent.bgis.org/"><img src="../img/parentslogin.png" /></a></div>