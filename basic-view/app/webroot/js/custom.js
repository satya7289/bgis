$(document).ready(function(e) {
	
	// Radio Functions
	$('.c1').click(function(){
		$('.c2').removeAttr('disabled');
	});
	$('.cc1, .cc2').click(function(){
		$('.c2').prop('disabled', true);	
	});
	
	$('.asperscd').click(function(){
		$('.scd').removeAttr('disabled');
	});
	
	//Delivery Radio Function
	$('.del1').click(function(){
		$('.dd1').removeAttr('disabled');
		$('.dd2').prop('disabled', true);
		$('.scd').prop('disabled', true);
	});
	
	$('.del2').click(function(){
		$('.dd1,.dd2').prop('disabled', true);	
	});
	
	$('.del3').click(function(){
		$('.dd2').removeAttr('disabled');
		$('.dd1').prop('disabled', true);
		$('.scd').prop('disabled', true);
	});
	
	//Nature Type Radio Functions
	$('.nt1').click(function(){
		$('.ntt1').removeAttr('disabled');
		$('.ntt2,.ntt3,.ntt4,.ntt5,.ntt6,.ntt7,.ntt8').prop('disabled', true);
	});
	
	$('.nt2').click(function(){
		$('.ntt2').removeAttr('disabled');
		$('.ntt1,.ntt3,.ntt4,.ntt5,.ntt6,.ntt7,.ntt8').prop('disabled', true);
	});
	
	$('.nt3').click(function(){
		$('.ntt3').removeAttr('disabled');
		$('.ntt1,.ntt2,.ntt4,.ntt5,.ntt6,.ntt7,.ntt8').prop('disabled', true);
	});
	
	$('.nt4').click(function(){
		$('.ntt4').removeAttr('disabled');
		$('.ntt1,.ntt2,.ntt3,.ntt5,.ntt6,.ntt7,.ntt8').prop('disabled', true);
	});
	
	$('.nt5').click(function(){
		$('.ntt5').removeAttr('disabled');
		$('.ntt1,.ntt2,.ntt3,.ntt4,.ntt6,.ntt7,.ntt8').prop('disabled', true);
	});
	
	$('.nt6').click(function(){
		$('.ntt6').removeAttr('disabled');
		$('.ntt1,.ntt2,.ntt3,.ntt4,.ntt5,.ntt7,.ntt8').prop('disabled', true);
	});
	
	$('.nt7').click(function(){
		$('.ntt7').removeAttr('disabled');
		$('.ntt1,.ntt2,.ntt3,.ntt4,.ntt5,.ntt6,.ntt8').prop('disabled', true);
	});
	
	
	localStorage.clear();
	localStorage.setItem('count',1);
	
	$('#serial').val(localStorage.getItem('count'));
    $('a.add-more').live("click",function(){
		localStorage.removeItem('dia');
		localStorage.removeItem('length');
		localStorage.removeItem('rate');
		localStorage.removeItem('qty');
		var count = parseInt(localStorage.getItem('count'))+1;
		
		var descHtml = '<tr><td><input class="span1" type="text" value="'+count+'" disabled></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][tech_description]" type="text"></td><td><input class="span2" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][hardness_shore_a]" type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][grade]" type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][dia]" type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][length]" type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][rate]" type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][unit_rate]" disabled type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][quantity]" type="text"></td><td><input class="span1" name="data[OrderSpecification][technical]['+localStorage.getItem('count')+'][amount]" readonly type="text"></td><td>&nbsp;&nbsp;<a class="btn btn-primary add-minus" amount="0" href="javascript:void(0);"><i class="icon-trash icon-large"></i></a></td></tr>';
		$('.descbody').append(descHtml);
		localStorage.setItem('count',count);
	});

	$('a.add-minus').live("click",function(){
		$('#table tr:last').remove();
		localStorage.setItem('count',parseInt(localStorage.getItem('count'))-1);
		var tabLen = $('#table tr:last').index() + 1;

		if(tabLen > 0){
			var nAmount = $(this).attr('amount');
			nAmount = parseInt(nAmount,10);
			if(nAmount > 0){
				var finalVal = parseInt(localStorage.getItem('amount'),10)-nAmount;
				$('.orderamount').val(finalVal);
				localStorage.setItem('amount',finalVal);
			}
		}
	})
	$('#OrderAddForm').submit(function(){
		var quanty = localStorage.getItem('quanty');
		var mainQuantity = localStorage.getItem('qty');
		if(quanty != null && mainQuantity != null){
			if(mainQuantity != quanty){
				alert('Quantity does not matched.');
				return false;	
			}	
		}
	});
	 $('input').live('blur', function() {
		var str = $(this).attr('name');
		var naturequantity = str.search(/nature_total/i);
		var diaSearch = str.search(/dia/i);
		var lengthSearch = str.search(/length/i);
		var rateSearch = str.search(/rate/i);
		var quantitySearch = str.search(/quantity/i);
		var amountSearch = str.search(/amount/i);
		if(diaSearch != -1){
			var dia = $(this).attr('name');
			var dias = parseInt($('input[name="'+dia+'"]').val());	
			if(isNaN(dias)){
				
			}else{
				localStorage.setItem('dia',dias);
			}
		}
		if(lengthSearch != -1){
			var length = $(this).attr('name');
			var lengths = parseInt($('input[name="'+length+'"]').val());	
			
			if(isNaN(lengths)){
				
			}else{
				localStorage.setItem('length',lengths);
			}
		}
		if(rateSearch != -1){
			var rate = $(this).attr('name');
			var rates = parseFloat($('input[name="'+rate+'"]').val());	
			
			if(isNaN(rates)){
				
			}else{
				localStorage.setItem('rate',rates);
			}
		}
		if(quantitySearch != -1){
			var qty = $(this).attr('name');
			var qtys = parseFloat($('input[name="'+qty+'"]').val());	
			
			if(isNaN(qtys)){
				
			}else{
				qc = localStorage.getItem('quanty');
				if(qc != null){
					qqq = parseInt(qc,10) + qtys;
					localStorage.setItem('quanty',qqq);		
				}else{
					localStorage.setItem('quanty',qtys);
				}
				localStorage.setItem('qty',qtys);
			}
			//$(this).prop('readonly',true);
		}
		var dia = localStorage.getItem('dia');
		if(isNaN(dia)){
			alert('DIA cannot be empty'); 
			return false;
		}
		var length = localStorage.getItem('length');
		if(isNaN(length)){ 
			alert('Length cannot be empty'); 
			return false;
		}
		var rate = localStorage.getItem('rate');
		if(isNaN(rate)){
			alert('Rate cannot be empty'); 
			return false;
		}
		var qty = localStorage.getItem('qty');
		if(isNaN(qty)){
			alert('Quantity cannot be empty'); 
			return false;
		}
		
		var amount = parseInt((dia * length * rate * qty) / 100, 10);	

		if(amount > 0){
			var amounts = $(this).attr('name');
			if(amountSearch != -1){
				
				//alert($('input[name="'+amounts+'"]').val());
				if($('input[name="'+amounts+'"]').val() == ""){
					$('input[name="'+amounts+'"]').val(amount);	
					$('input[name="'+amounts+'"]').prop('readonly', true);
					$('#table tr:last a.add-minus').attr('amount',amount);
					var fAmount = localStorage.getItem('amount');
					
					
					if(fAmount != null){
						fAmount = parseInt(fAmount,10) + amount;
						localStorage.setItem('amount',fAmount);
						
					}else{
						localStorage.setItem('amount',parseInt(amount,10));	
					}
					
					$('.orderamount').val(localStorage.getItem('amount'));
				}
			}
		}
		
	});
	
});
function removethis(rowId){
	var rows = rowId.replace(/ /g,'');
	$('tr#'+rowId).remove();	
}