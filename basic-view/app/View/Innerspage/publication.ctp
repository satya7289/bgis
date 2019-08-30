<script>
$(document).ready(function() 
{
      	    var apiUrl = '/innerspage/';
	     	  $.ajax({
	           url: apiUrl + 'getPublication',
		       method: 'GET',
			   type:'application/json',
		          success: function(data)
		 		{
						   var allData9 = JSON.parse(data);		 
			   	    	  for (var y = 0; y < allData9.News_id.length ; y++) 
		   	               {                                        
  var newFirmDiv9 = ' <li><a href="#"><img src= "img/newsletter/'+allData9.News_image[y]+'" /></a><p style="text-align:center; font-size:15px;">'+allData9.News_date[y]+'</p></li>';
                   $("ul#publication").append(newFirmDiv9);
				      }

		},
		failure: function()
		{			
    	
		}	
});
});


</script>

<div class="bannerinner">
      <div class="bannerinner"><img src="img/publication.jpg" /></div>
    </div>
 <div class="down">&nbsp;</div>
 <div class="middlecontent">
      <div class="publication">
        <h1>Directors Message</h1>
        <p >It is a moment of pride to let you know that BGIS publishing house has brought out Sanskrit text books for standards VI, VII and VIII. This is a complete in-house effort where each topic has been derived based on Bhagavata teachings. Interested persons can download these copies from this page. We hope to bring out more such in-house publications.</p>
        <h2>Books for Everyone </h2>
        <div class="bookslot"> <a href="../pdf/BGIS_magazine-2.pdf" target="_blank"><img src="img/publication/book2017.jpg" />
          <p>BGIS Annual Magazine 2017</p>
          </a></div>
          
        <div class="bookslot"> <a href="../pdf/BGIS Megazine 2012 (1).pdf" target="_blank"><img src="img/publication/book1.jpg" />
          <p>BGIS Annual Magazine 2012</p>
          </a></div>
        <div class="bookslot"> <a href="../pdf/6 cover_merged.pdf" target="_blank"><img src="img/publication/book2.jpg" />
          <p>Sanskrit Text Book VIth Grade</p>
          </a></div>
        <div class="bookslot"> <a href="../pdf/7 cover_merged.pdf" target="_blank"><img src="img/publication/book3.jpg" />
          <p>Sanskrit Text Book VIIth Grade</p>
          </a></div>
        <div class="bookslot"> <a href="../pdf/8 cover_merged.pdf" target="_blank"><img src="img/publication/book4.jpg" />
          <p>Sanskrit Text Book VIIIth Grade</p>
          </a></div>
        <div class="down">&nbsp;</div>
        <h1>Newsletter</h1>
        
        
        <div class="yearone">
         <h2>2015</h2>
          <ul id="publication">
           <li><a href="../pdf/1st_Quarter_2015-16.pdf"><img src="img/newsletter/4quarternewslatter.jpg"></a><p style="text-align:center; font-size:15px;">2015-08-04</p></li>
          <li><a href="../pdf/4quarternewslatter.pdf"><img src="img/newsletter/4quarternewslatter.jpg"></a><p style="text-align:center; font-size:15px;">2015-05-04</p></li>
           </ul>
        </div>
       
        <div class="yearone">
         <h2>2014</h2>
          <ul id="publication">
          <li><a href="../pdf/3rdQuarter.pdf"><img src="img/newsletter/251114.jpg"></a><p style="text-align:center; font-size:15px;">2014-11-06</p></li>
           </ul>
        </div>
        
        <div class="yearone2">
        <h2>2013</h2>
          <ul>
            <li><a href="../pdf/January 2013.pdf" target="_blank"><img src="img/newsletter/January2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Jan - 2013</p>
            </li>
            <li><a href="../pdf/February2013.pdf" target="_blank"><img src="img/newsletter/February2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Feb - 2013</p>
            </li>
            <li><a href="../pdf/March 2013.pdf" target="_blank"><img src="img/newsletter/March2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">March - 2013</p>
            </li>
            <li><a href="../pdf/April 13.pdf" target="_blank"><img src="img/newsletter/April13.jpg" /></a>
              <p style="text-align:center; font-size:15px;">April - 2013</p>
            </li>
            <li><a href="../pdf/May 2013.pdf" target="_blank"><img src="img/newsletter/May2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">May - 2013</p>
            </li>
            <li><a href="../pdf/June 2013.pdf" target="_blank"><img src="img/newsletter/June2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">June - 2013</p>
            </li>
            <li><a href="../pdf/July 2013 -.pdf" target="_blank"><img src="img/newsletter/July2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">July - 2013</p>
            </li>
            <li><a href="../pdf/Aug 2013.pdf" target="_blank"><img src="img/newsletter/Aug2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Aug - 2013</p>
            </li>
            <li><a href="../pdf/Sep 2013.pdf" target="_blank"><img src="img/newsletter/Sep2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Sep - 2013</p>
            </li>
            <li><a href="../pdf/November 2013.pdf" target="_blank"><img src="img/newsletter/November2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Nov - 2013</p>
            </li>
            <li><a href="../pdf/December 2013.pdf" target="_blank"><img src="img/newsletter/December2013.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Dec - 2013</p>
            </li>
          </ul>
        </div>
  
        <div class="yearone2">
              <h2>2012</h2>
          <ul>
            <li><a href="../pdf/12/Newsletter January 2012.pdf" target="_blank"><img src="img/newsletter/January2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Jan - 2012</p>
            </li>
            <li><a href="../pdf/12/Newsletter January 2012.pdf" target="_blank"><img src="img/newsletter/February2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Feb - 2012</p>
            </li>
            <li><a href="../pdf/12/Newsletter for the month of March.pdf" target="_blank"><img src="img/newsletter/March2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">March - 2012</p>
            </li>
            <li><a href="../pdf/April Newsletter.pdf" target="_blank"><img src="img/newsletter/April2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">April - 2012</p>
            </li>
            <li><a href="../pdf/May_2012.pdf" target="_blank"><img src="img/newsletter/May2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">May - 2012</p>
            </li>
            <li><a href="../pdf/Newsletter for the month of June.pdf" target="_blank"><img src="img/newsletter/june2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">June - 2012</p>
            </li>
            <li><a href="../pdf/Newletter for the month of July.pdf" target="_blank"><img src="img/newsletter/July2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">July - 2012</p>
            </li>
            <li><a href="../pdf/Newsletter for the month of Auguest.pdf" target="_blank"><img src="img/newsletter/Aug2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Aug - 2012</p>
            </li>
            <li><a href="../pdf/12/Newsletter for the month of September.pdf" target="_blank"><img src="img/newsletter/Sep2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Sep - 2012</p>
            </li>
            <li><a href="../pdf/October NS.pdf" target="_blank"><img src="img/newsletter/oct2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Oct - 2012</p>
            </li>
            <li><a href="../pdf/12/November 2012.pdf" target="_blank"><img src="img/newsletter/November2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Nov - 2012</p>
            </li>
            <li><a href="../pdf/12/December 2012.pdf" target="_blank"><img src="img/newsletter/December2012.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Dec - 2012</p>
            </li>
          </ul>
        </div>
       
        <div class="yearone2">
         <h2>2011</h2>
          <ul>
            <li><a href="../pdf/Newsletter for the month of June.pdf" target="_blank"><img src="img/newsletter/june2011.jpg" /></a>
              <p style="text-align:center; font-size:15px;">June - 2011</p>
            </li>
            <li><a href="../pdf/Newletter for the month of July.pdf" target="_blank"><img src="img/newsletter/July2011.jpg" /></a>
              <p style="text-align:center; font-size:15px;">July - 2011</p>
            </li>
            <li><a href="../pdf/Newsletter for the month of Auguest.pdf" target="_blank"><img src="img/newsletter/Aug2011.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Aug - 2011</p>
            </li>
            <li><a href="../pdf/Newsletter for the month of September.pdf" target="_blank"><img src="img/newsletter/Sep2011.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Sep - 2011</p>
            </li>
            <li><a href="../pdf/October Newsletter.pdf" target="_blank"><img src="img/newsletter/oct2011.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Oct - 2011</p>
            </li>
            <li><a href="../pdf/November 2011- Revised.pdf" target="_blank"><img src="img/newsletter/November2011.jpg" /></a>
              <p style="text-align:center; font-size:15px;">Nov - 2011</p>
            </li>
          </ul>
        </div>
      </div>
    </div>    