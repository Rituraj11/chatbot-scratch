<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChatBot - Scratch</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<style>

    /* basic */
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }
    html,
    body {
        height: 100%;
    }
    body {
        font: 16px/1.2 "Roboto", sans-serif;
        color: #333;
    }
    input[type="text"],
    button {
        padding: 4px 8px;
        border: 0;
        outline: 0;
    }
    button {
        background-color: transparent;
        cursor: pointer;
    }

    /* container */
    .container {
        width: 450px;
        height: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        border-radius: 10px;
        background-color: #f9fbff;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        overflow: hidden;
    }

    /* chat_box */
    .chat_box {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .chat_box > * {
        padding: 16px;
    }

    /* head */
    .head {
        display: flex;
        align-items: center;
    }
    /* body */
    .body {
        flex-grow: 1;
        background-color: #eee;
        overflow-y: scroll; 
        height:400px;
    }
    .body .bubble {
        display: inline-block;
        padding: 5px 40px;
        margin-bottom: 6px;
        border-radius: 15px;
    }
    .body .bubble p {
        color: #f9fbff;
        font-size: 14px;
        text-align: left;
        line-height: 1.4;
    }
    .body .incoming {
        text-align: left;
    }
    .body .incoming .bubble {
        background-color: #b2b2b2;
    }
    .body .outgoing {
        text-align: right;
    }
    .body .outgoing .bubble {
        background-color: #79c7c5;
    }

    /* foot */
    .foot {
        display: flex;
    }
    .foot .msg {
        flex-grow: 1;
    }

    .submit_btn_icon{
        max-height: 23px;
    }

</style>

<body>
	<div class="container">
		<div class="chat_box">
			<div class="head">
				<div class="user">
					<div class="name">Chat Bot</div>
				</div>
			</div>
			<div class="body">
				<div class="outgoing">
					<div class="bubble lower">
						<p>Hi Bot</p>
					</div>
				</div>
                <div class="incoming">
					<div class="bubble">
						<p>Hello there Human !</p>
					</div>
				</div>
			</div>
			<div class="foot">
				<input type="text" class="msg" placeholder="Type a message..." />
				<button type="submit" id="submit"><img class="submit_btn_icon" src="https://img.icons8.com/paper-plane" /></button>
			</div>
		</div>
	</div>
</body>

<script>
        $(document).ready(function(){
            $("#submit").on("click", function(){
                $value = $(".msg").val();
                $msg = '<div class="outgoing"><div class="bubble"><p>'+ $value +'</p></div></div>';
                $(".body").append($msg);
                $(".msg").val('');
                
                // start ajax code
                $.ajax({
                    url: 'db-config.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="incoming"><div class="bubble"><p>'+ result +'</p></div></div>';
                        $(".body").append($replay);
                        $(".body").scrollTop($(".body")[0].scrollHeight);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
</script>

<script src="//code.tidio.co/8j2s3hdhvfqnj90n3gjugzmslhfpgzh2.js" async></script>

</html>