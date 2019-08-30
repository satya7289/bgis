 
<?php   $name = $this->request->data['name'];  $amount = $this->request->data['amount']; ?>
  <div class="bannerinner">
  <?php echo $this->Html->image('onlinepament.jpg',array('title' =>"BGIS about", 'alt' => 'BGIS')); ?>
 </div>
    <div class="down">&nbsp;</div>
      <div class="middlecontent">
        <div class="rightsidecontent">
         <div class="aboutus">
          <h1>Pay Online</h1>
          <h2>Please proceed to donate.</h2>
         <p style="padding-top:10px;"><img src="../img/axisbank.jpg" /></p>
     <p><a href="http://www.bgis.org/vpc/vpc_php_serverhost2.php?user_name=<?php echo "$name";?>&amount=<?php echo "$amount";?>&id=<?php  echo "$id";?>"><img src="img/onlinepayment.png" style="padding-top:20px;" /></a></p>
       <!--   <p style="padding-top:10px;color: #760208;font-size: 25px; margin-left: 79px;"><b style="font-size: 25px;">OR</b> </p>
         <p style="padding-top:10px;color: #760208;font-size: 25px; margin-left: 36px;"><b style="font-size: 25px;">Pay Through</b></p>
        <p><a href="http://iskcon-krish.com/proceed.php"><img src="img/onlinepayment1.png" style="padding-top:10px;margin-right: 551px;" /></a></p>-->
        </div> 
         
      <!--        <div class="aboutmiddlecontent">   
        </div>-->
    </div>
    </div>