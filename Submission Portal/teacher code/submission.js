    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

  // Calender jquery
  var currentYear = (new Date).getFullYear();
        var currentMonth = (new Date).getMonth() + 1;
        var date="2016-10-22";
        var count=10;
        $(".responsive-calendar").responsiveCalendar({
          time: currentYear+'-'+ currentMonth,
          events: {
            "2016-10-20": {"number": count },
            date:{"number": 5}, 
            "2016-10-24": {}}
        });

        //Calender js Script
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
        orientation:'top right',
      };
      date_input.datepicker(options);

});
     

    $(".barcontainer").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".barcontainer").toggleClass("change");
    });
   
    $(window).scroll(function(){
      var height = $(window).scrollTop();
      if(height > 0){
        $('.barcontainer').css({'position': 'fixed', 'top': '0px'});
      }
    });
	
	
	
	
	function assignment_details(s){
	$.ajax({
		url:"selectassign.php?var="+s,
		success:function(result){
			$('#togglemodal').modal('show');
			$("#togglemodal .modal-body").html(result);
			// $("#togglemodal").html(result); 
		}
	});
	}
	
	
 function getsub(s){
	$.ajax({
		url:"get_subject.php?var="+s,
		success:function(result){

			$("#sub").html(result);
		}
	});
	}
	
function getsubdrop(s){
	$.ajax({
		url:"sub_drop.php?var="+s,
		success:function(data){
			$("select#subjlist_drop").html(data);
		}
	});
}
 
	
	function getassign(s){
	$.ajax({

		url:"get_assign.php",
		data:'var='+s,
		success:function(result){
			$("#Assignlist .modal-body").html(result);
		}
	});
	}
	
		function assignmentdetails(s){
	$.ajax({
	
		url:"assigndetails.php",
		data:'var='+s,
		success:function(result){
			$(".loader").hide();
			$("#AssignmentDetails .modal-body").html(result);
		}
	});
	}
	
	//$('#btnSubmit').click(function(){
     //var formData = new formData($('#submission'));
     //$.ajax({
       // type: 'POST',
        //url: 'studentsubmitassign.php',
        //data: formData,
         //success: function (data) {
		  //$("#alert").show();
          //$("#alert").html(data); 
		  //alert(data)
         //},
      //});
  //});
//student 
	

	
	function modaltrial(s)
	{$.ajax({
	
		url:"assigndetails2.php",
		data:'var='+s,
		success:function(result){
		$('#mod').modal('show');
		$("#mod .modal-body").html(result);
		}
	});
	
	}
	function modalsoftcopy(s){
		$.ajax({
			url:"entersoftcopygrades.php",
			data:'var='+s,
			success:function(result){
				$("#togglemodal .modal-body").html(result);
			}
		});
	}
	function modalhardcopy()
	{$.ajax({
	
		url:"enterhardcopygrades.php",
		success:function(result){
		// $('#mod').modal('show');
		$("#togglemodal .modal-body").html(result);
		}
	});
	
	}
	
	
	$("form#submission").submit(function(){
    
     var fd = new FormData($(this)[0]);	 
	
	$.ajax({
        type: 'POST',
        url: "submitnewassign.php",
        data: fd,
		async:false,
		cache:false,
		processData: false,
		contentType: false,
         success: function (data) {
        	$("#alert").html(data);
		  $("#alert").show();
        // setTimeout( function(){
         //$("#alert").hide();
        // }, 5000);
     }
      });
	  return false;
});

$("form#hardcopygrades").submit(function(){
    
     var fd = new FormData($(this)[0]);	 
	
	$.ajax({
        type: 'POST',
        url: "submitremarks.php",
        data: fd,
		async:false,
		cache:false,
		processData: false,
		contentType: false,
         success: function (data) {
			 window.alert("JatY");
        	$("#alert").html(data);
		  $("#alert").show();
         setTimeout( function(){
         $("#alert").hide();
         }, 5000);
     }
      });
	  return false;
});

$('form#softcopygrades').submit(function(){
    
     var fd = new FormData($(this)[0]);	 
	
	$.ajax({
        type: 'POST',
        url: 'submitremarks.php',
        data: fd,
		async:false,
		cache:false,
		processData: false,
		contentType: false,
         success: function (data) {
        	$("#alert").html(data);
		  $("#alert").show();
        setTimeout( function(){
         $("#alert").hide();
         }, 5000);
     }
      });
	  return false;
});