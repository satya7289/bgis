<?php if($this->params['controller'] != 'students' ){ ?>
   <div class="uphead">
   <?php $page_name = basename($_SERVER['REQUEST_URI']);?>
      <div class="inneruphead">
     <div id="logo"><a href="/"><?php echo $this->Html->image('logo.png', array('title' =>"BGIS Logo", 'alt' => 'BGIS','style'=>'width:217px; height:140px;')); ?></a></div>
        <div class="better">The Bhaktivedanta Gurukula & International School</div>
       <div id="toprightnavi">
         <div class="drop">
<ul class="drop_menu">
<!--<li><a href='/student' class="<?php echo ($page_name=='student')?'active1':'';?>" >Student</a></li>-->
<li><a href='/faculty' class="<?php echo ($page_name=='faculty')?'active1':'';?>">Faculty</a></li>
<li><a href='/parents' class="<?php echo ($page_name=='parents')?'active1':'';?>">Parents</a>
<ul>
<li><a href='http://parent.bgis.org/'>Parents Login</a></li>	
</ul>
</li>
<!-- <li><a href='/alumni' class="<?php echo ($page_name=='alumni')?'active1':'';?>">Alumni</a></li> -->
<li><a href="/contact" class="<?php echo ($page_name=='contact')?'active':'';?>">Contact Us</a> </li>
</ul>
</div>
        </div>
      </div>
    </div>
    <div class="downhead">
    <div class="navigationpage">
            <ul id="nav">
                  <li><a href="/about" class="<?php echo ($page_name=='about')?'active':'';?>">About us</a>
                  <div class="subs2">
                    <div class="col2">
               <ul id="sub4">
              </ul>
            </div>
          </div>
          </li>
            <!--<li id="campus"><a href="http://newbgis.org/" target="_blank" class="<?php echo ($page_name=='campus')?'active':'';?>" ><span> New BGIS Campus</span></a>
             <!--<div class="subs2" style="width: 190px;">
               <div class="col2">
               <ul id="sub5">
                 </ul>
              </div>
            </div>
          </li-->
          </li>
                <li id="admission" ><a href="/admission" class="<?php echo ($page_name=='admission')?'active':'';?>">Admissions</a>
                   <div class="subs2">
               <div class="col2">
             <ul id="sub2">
              </ul>
            </div>
          </div>
          </li>
                  <li id="dermitiology"><a href="/contribute" class="<?php echo ($page_name=='contribute')?'active':'';?>" >Contribute</a>
                 <div class="subs2">
                 <div class="col2">
                 <ul id="sub3">
                           </ul>
            </div>
          </div>
          </li>
        <li><a href="/latest" class="<?php echo ($page_name=='latest')?'active':'';?>" >News & events</a>
         <div class="subs2">
                    <div class="col2">
              <ul>
               <li><a href="/latest">Latest News</a></li>
                                 <div class="col2">
			               <ul>
			              
			               <li style="margin-left: 5px;"><a href="/result">CISCE Exam Results</a></li>
			               <li style="margin-left: 5px;"><a href="/nirmaan"> Nirmaan Ceremony</a></li>
			               <li style="margin-left: 5px;"><a href="/competition6">Visit of Chief Minister of UP</a></li>
			               <li style="margin-left: 5px;"><a href="/competition5">Gaura Purnima Celebrations</a></li>
			               <li style="margin-left: 5px;"><a href="/competition4">Sport Day: Lets Play</a></li>
			               <li style="margin-left: 5px;"><a href="/competition3">Mission : Virndavan Clean</a></li>
			               <li style="margin-left: 5px;"><a href="/competition2">Gita Jayanti celebration</a></li>
			                <li style="margin-left: 5px;"><a href="/competition">Drawing Competition</a></li>
			                <li style="margin-left: 5px;"><a href="/mphemamalini">MP Hemamalini visits BGIS</a></li>
			                <li style="margin-left: 5px;"><a href="/plantedtree">Students planted trees</a></li>
			                <li style="margin-left: 5px;"><a href="/championship">Swimming Champions 2014</a></li>
			                <li style="margin-left: 5px;"><a href="/media">Shilanyas ceremony</a></li>
			                <li style="margin-left: 5px;"><a href="/mansiganga">Mansi Ganga Innaguration</a></li>>
			               </ul>
			               </div>
              </ul>
            </div>
          </div></li>

       <li><a href="https://www.flickr.com/photos/iskcon_bgis/albums" target="_blank">Gallery</a></li>
       <li><a href="/publication" class="<?php echo ($page_name=='publication')?'active':'';?>">Publications</a></li>
        <!-- <li ><a href="/contact" class="<?php echo ($page_name=='contact')?'active':'';?>">Contact Us</a> 
                 <div class="subs2" style="width: 130px;">
          
                    <div class="col2">
			               <ul>			               
                      <li><a href="/job">Job</a></li>
			               </ul>
			               </div>
          </div></li> -->
    </div>
  </div>
 
    <?php } else { ?> 
     <?php $page_name = basename($_SERVER['REQUEST_URI']);?>
       <div class="uphead">
      <div class="inneruphead">
     <div id="logo"><a href="/"><?php echo $this->Html->image('logo.png', array('title' =>"BGIS Logo", 'alt' => 'BGIS','style'=>'width:217px; height:140px;')); ?></a></div>
         <div class="better">The Bhaktivedanta Gurukula & International School</div>
        <div id="toprightnavi">
         <div class="drop">
<ul class="drop_menu">
<li><a href='/student' class="<?php echo ($page_name=='student')?'active1':'';?>" >Student</a></li>
<li><a href='/faculty' class="<?php echo ($page_name=='faculty')?'active1':'';?>">Faculty</a></li>
<li><a href='/parents' class="<?php echo ($page_name=='parents')?'active1':'';?>">Parents</a>
<ul>
<li><a href='#'>Parents Login</a></li>	
</ul>
</li>
<li><a href='#'>Alumni</a></li>
</ul>
</div>
        </div>
      </div>
    </div>
   <div class="downhead">
      <div class="navigationpage">
        <ul id="nav">
        <li><a href="/about" class="<?php echo ($page_name=='about')?'active':'';?>" >About us</a>
            <div class="subs2">
              <div class="col2">
                <ul>
                  <li><a href="/aboutus/founder-&-vision">Founder & Vision </a></li>
                  <li><a href="/aboutus/what-makes-us-special">What makes us special </a></li>
                  <li><a href="/aboutus/campus-facilities">Campus Facilities</a></li>
                </ul>
              </div>
            </div>
          </li>
         <li id="campus"><a href="/campus" class="<?php echo ($page_name=='campus')?'active':'';?>" >New BGIS Campus</a>
          </li>
            <!-- <div class="subs2">
              <div class="col2">
                <ul>
                  <li><a href="#">Overview</a></li>
                  <li><a href="#">New Campus Infrastructre </a></li>
                  <li><a href="#">Service Centres</a></li>
                  <li><a href="#">Project Estimation Cost</a></li>
                </ul>
              </div>
            </div>-->
          </li>
         <li id="admission"><a href="/admission" class="<?php echo ($page_name=='admission')?'active':'';?>" >Admissions</a>
            <div class="subs2">
              <div class="col2">
                <ul>
                  <li><a href="/admissions/how-to-apply">How to apply</a></li>
                  <li><a href="/admissions/eligibility">Eligibility</a></li>
                  <li><a href="/admissions/tuition-fee">Tuition Fee</a></li>
                  <li><a href="/admissions/financial-aid">Financial Aid</a></li>
                  <li><a href="http://bgis.org/admissions/download-form">Download Form</a></li>
                </ul>
              </div>
            </div>
          </li>
         <li id="dermitiology"><a href="/contribute" class="<?php echo ($page_name=='contribute')?'active':'';?>" >Contribute</a>
            <div class="subs2">
              <div class="col2">
                <ul>
                      <li><a href="/contributes/donate-&-contribute">Donate & Contribute </a></li>
                      <li><a href="/contributes/tax-benefits">Tax Benefits</a></li>
                      <li><a href="/contributes/list-of-donors">List of Donors</a></li>
                      <li><a href="http://bgis.org/contributes/online-payment">Online Payment</a></li>
                </ul>
              </div>
            </div>
          </li>
           <li ><a href="/latest" class="<?php echo ($page_name=='latest')?'active':'';?>" >News & evetns</a>
               <div class="subs2">
                    <div class="col2">
              <ul>
                <h1>News & events</h1>
               <li><a href="/latest">Latest News</a></li>
                                   <div class="col2">
			               <ul>
			               <li style="margin-left: 5px;"><a href="/result">CISCE Exam Results</a></li>
			               <li style="margin-left: 5px;"><a href="/nirmaan"> Nirmaan Ceremony</a></li>
			               <li style="margin-left: 5px;"><a href="/competition6">Visit of Chief Minister of UP</a></li>
			               <li style="margin-left: 5px;"><a href="/competition5">Gaura Purnima Celebrations</a></li>
			               <li style="margin-left: 5px;"><a href="/competition4">Sport Day: Lets Play</a></li>
			               <li style="margin-left: 5px;"><a href="/competition3">Mission : Virndavan Clean</a></li>
			               <li style="margin-left: 5px;"><a href="/competition2">Gita Jayanti celebration</a></li>
			                <li style="margin-left: 5px;"><a href="/competition">Drawing Competition</a></li>
			                <li style="margin-left: 5px;"><a href="/mphemamalini">MP Hemamalini visits BGIS</a></li>
			                <li style="margin-left: 5px;"><a href="/plantedtree">Students planted trees</a></li>
			                <li style="margin-left: 5px;"><a href="/championship">Swimming Champions 2014</a></li>
			                <li style="margin-left: 5px;"><a href="/media">Shilanyas ceremony</a></li>
			                <li style="margin-left: 5px;"><a href="/mansiganga">Mansi Ganga Innaguration</a></li>>
			               </ul>
			               </div>
              </ul>
            </div>
          </div></li>
           <li><a href="/publication" class="<?php echo ($page_name=='publication')?'active':'';?>" >Publications</a></li>
          <li><a href="/contact" class="<?php echo ($page_name=='contact')?'active':'';?>" >Contact Us</a></li>
          </li>
        </ul>
      </div>
    </div>
   <?php } ?>
      <?php if($this->params['controller'] != 'homepages' ){ ?>
      
    <?php } else { ?>
     <div class="slider">
    <div class="bd">
      <ul>
       
       <li><img src="slider/001.jpg"  width="990" height="350" /></li>
       <li><a target="_blank" href="http://bgis.org/latest"><img src="slider/002.jpg" width="990" height="350" /></a></li>
        <li><a target="_blank" href="http://www.bgis.org/campusmain/what-make-us-special"><img src="slider/003.jpg" width="990" height="350" /></a></li>
      
        <li><a target="_blank" href="#"><img src="slider/004.jpg" width="990" height="350" /></a></li>
        <li><a target="_blank" href="http://www.bgis.org/latest"><img src="slider/005.jpg"  width="990" height="350" /></a></li>
        <li><a target="_blank" href="http://www.bgis.org/latest"><img src="slider/006.jpg"  width="990" height="350" /></a></li>
      </ul>
    </div>
    <div class="hd">
      <ul>
      </ul>
    </div>
    <div class="pnBtn prev"> <span class="blackBg"></span> <a class="arrow" href="javascript:void(0)"></a> </div>
    <div class="pnBtn next"> <span class="blackBg"></span> <a class="arrow" href="javascript:void(0)"></a> </div>
  </div>
           <?php } ?>