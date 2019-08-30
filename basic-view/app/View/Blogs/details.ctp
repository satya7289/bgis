<script language="JavaScript">
		$(document).ready(function() {	
    		var apiUrl = '/Blogs/';
	     	$.ajax({
	         url: apiUrl + 'getBlog',
		       method: 'GET',
		   		success: function(data)
		                 {
						var allData9 = JSON.parse(data);
			   		  for (var y = 0; y < allData9.Blog.length ; y++) 
			         {
          var newFirmDiv9 = $('<li><a href="/details/'+allData9.Blog_id[y]+'" style="line-height: 14px;">'+allData9.Blog[y]+'</a></li><div class="down">&nbsp;</div>');
                   $("#sidebar").append(newFirmDiv9);
				}

		},
		failure: function()
		{			
    	
		}	
});
});
		</script>

<div class="mainouetr">
  <div class="menutree">
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a class="breadcrum_link" href="http://www.enhanceclinics.in/" itemprop="url">
<span itemprop="title">Home</span></a> » <div style="display:inline;" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a class="ml3 breadcrum_link" href="http://www.enhanceclinics.in/career_homepage" itemprop="url"><span itemprop="title">Media</span></a> » <div class="ml3" style="display:inline;" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Blogs</span></div></div></div></div>
         <div class="innermiddle">
         <div class="inner_right_side"><div class="innersidebarmenu">
          <h2>Recent Blogs</h2>
            <ul id="sidebar">
            </ul>
            </div>
          </div>
         
         
         
 <div class="innerleft_side">
  <div class="innermainbanner"><img src="../image/blogs.jpg" title="Blogs At Enhance" alt="enhanceclinics" /></div>
  <div class="innerpagecontent">
  <div class="down">&nbsp;</div>
  <h2 style="font-weight: bold;font-size: 16px;">Blog Release</h2>
  <div class="down">&nbsp;</div>
  <div class="career_content">
   <h2 style="font-weight: bold;font-size: 17px;"><?php echo $subtitle ; ?></h2>
   <div class="down">&nbsp;</div>
   <p> <?php echo $subDesc  ; ?></p>
  </div>
  </div>
  </div>
<div class="newupdate" style="width:975px; float:left; margin:auto; margin-top:20px; margin-bottom:5px;" >
<p style="font-size: 15px;">We have patients coming to us from all over <b style="font-weight: bold;"> India and Abroad </b> for <b style="font-weight: bold;" >Hair Transplantation and Cosmetic Surgeries.</b> </p><br>
<p style="font-size: 15px; line-height:20px;">We have clients from <b style="font-style:italic; font-size: 15px;">Andaman and Nicobar Islands, Port Blair, Kolkata, Andhra Pradesh, Hyderabad, Arunachal Pradesh, Itanagar, Guwahati, Assam, Dispur, Guwahati, Shillong, Bihar, Patna, Chandigarh, Chhattisgarh, Raipur, Bilaspur, Mumbai, Ahmedabad, Panaji, Delhi,  Goa,  Gujarat, Chhattisgarh, Gandhinagar, Ahmedabad, Haryana, Chandigarh, Himachal Pradesh, Shimla, Jammu and Kashmir, Srinagar, Jharkhand, Ranchi, Karnataka, Bengaluru, Bangalore, Mysore, Kerala, Thiruvananthapuram, Kochi, Lakshadweep union territory, Kavaratti, Kochi, Madhya Pradesh, Bhopal, Jabalpur, Nagpur, Maharashtra, Imphal, Meghalaya, Mizoram, Aizawl, Guwahati, Nagaland, Kohima, Orissa, Bhubaneswar, Cuttack, Puducherry, Chennai, Punjab, Chandigarh, Rajasthan, Jaipur, Sikkim, Gangtok, Tamil Nadu, Chennai, Tripura, Agartala, Uttar Pradesh, Lucknow, Kanpur,     Allahabad, Uttarakhand, Dehradun, Nainital, West Bengal, Kolkata.</b></p><br>
<p style="font-size: 15px; line-height:20px;"><b style="font-weight: bold;">International clients </b> from <b style="font-style:italic; font-size: 15px;"> Bangladesh, Dhaka, Nepal, Sri Lanka, Kathmandu, Sri Lanka, United Kingdom, Australia, Scotland, Canada, Africa, Bangkok, Russia, China, Nigeria, USA - Washington D.C., Manhattan, Los Angeles, Houston, Chicago, New York, Austin, Boston, Tucson, Las Vegas, Atlanta, Ohio.</b></p>
</div>
<div class="down">&nbsp;</div>
<div class="upperline" style="width:663px; float:left; margin:auto; margin-top:20px; margin-bottom:20px;"><img src="../image/innerupline.gif" title="" alt="enhanceclinics" /></div>
           </div>   
  </div>