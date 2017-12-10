   var status_send = false;

	function send(){
		if(status_send){
			var text = $(".chat-input").val();
			if($(".chat-input").val()>1||$(".chat-input").val()!=""){
				var html_start = "<div class='chat-cloud-sender'><div class='chat-text'>";
				var html_end = "</div><div class='chat-arrow'></div></div>";
				$(".chat-container").append(html_start + text + html_end);
				$(".chat-input").val("");
				$(".chat-footer button").removeClass("active");
			}	
			status_send = false;
			$(".chat-footer button").removeClass("active");
		}	
	}
	
	function enable_send(){
	 	if($(".chat-input").val()>1||$(".chat-input").val()!=""){	
	 		
	 		$(".chat-footer button").addClass("active"); 
	 		status_send = true;  
	 	
	 	}
	 	else{
	 		$(".chat-footer button").removeClass("active");
	 		status_send = false;
	 	}
	};
	function open_chat(){
		$(".chat-box").show();
		$(".chat-btn-open").hide();
		$(".chat-btn-close").show();
	}
	function close_chat(){
		$(".chat-box").hide();
		$(".chat-btn-open").show();
		$(".chat-btn-close").hide();
	}