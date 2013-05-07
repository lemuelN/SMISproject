$(document).ready(function(){
	$('#div_tabs').tabs();
	$('#div_tabs').hide();
	
	$('#btn_searchStudID').click(function(){
		var obj = {"studID":$('input[name=studID]').val()};
		$.ajax({
			type: 'POST',
			url: 'searchStudent.php',
			data: obj,
			success: function(data){
				var objstud = JSON.parse(data);
				$('#studId').html(objstud.studID);
				$('#firstname').html(objstud.firstname);
				$('#middlename').html(objstud.middlename);
				$('#lastname').html(objstud.lastname);
				$('#yr_level').html(objstud.yearlevel);
			},
			error: function(data){
				alert('error->'+data);
			}
		});
	});
	
	$('#btn_fee_sub').click(function(){
		$('#div_tabs').show('blind');
		var t_amount=0;
		var obj = {"yr_level":$('#yr_level').html()};
			
			$.ajax({
				type: 'POST',
				url: 'viewFees_by_year_level.php',
				data: obj,
				success: function(data){
					$('#tbl_body_for_fees').html(data);
					var tbody = document.getElementById('tbl_body_for_fees');
					var trID = tbody.getElementsByTagName('tr');
					
					for(var ctr=0;ctr<trID.length;ctr++){
						var bal = trID[ctr].getElementsByTagName('td')[1];
				
						t_amount = t_amount + parseInt(bal.innerHtml);
						alert(t_amount);
					}
				},
				error: function(data){
					alert('error->'+data);
				}
			});
			
			
	});
	
});

	function computeBal(fee_id,amount){
	var your_pay;
	var balance;
		your_pay = $('#input_'+fee_id).val();
		var amnt = amount;
		balance = amnt - your_pay;
		if(balance>=0){
			$('#balance_'+fee_id).html(balance);
		}else if(your_pay>=amnt){
			balance = amount;
			your_pay = "";
			$('#balance_'+fee_id).html(balance);
			var pay_length = your_pay.length;
			$('#input_'+fee_id).val(your_pay);
		}
	}