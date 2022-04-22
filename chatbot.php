<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChatBot - Scratch</title>
</head>

<style>
    /*
    * Design Reference – https://codepen.io/juliepark/pen/QxWVPv
    */

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
    .blog {
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }
    .alink {
        display: inline-block;
        text-align: center;
        cursor: pointer;
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
    button:hover i {
        color: #79c7c5;
        transform: scale(1.2);
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
    .head .user {
        display: flex;
        align-items: center;
        flex-grow: 1;
    }
    .head .user .avatar {
        margin-right: 8px;
    }
    .head .user .avatar img {
        display: block;
        border-radius: 50%;
    }
    .head .bar_tool {
        display: flex;
    }
    .head .bar_tool i {
        padding: 5px;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* body */
    .body {
        flex-grow: 1;
        background-color: #eee;
    }
    .body .bubble {
        display: inline-block;
        padding: 10px;
        margin-bottom: 5px;
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

    @keyframes bounce {
        50% {
            transform: translate(0, 5px);
        }
        100% {
            transform: translate(0, 0);
        }
    }
    .ellipsis {
        display: inline-block;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background-color: #b7b7b7;
    }
    .dot_1 {
        /* animation: name duration timing-function delay iteration-count */
        animation: bounce 0.8s linear 0.1s infinite;
    }
    .dot_2 {
        animation: bounce 0.8s linear 0.2s infinite;
    }
    .dot_3 {
        animation: bounce 0.8s linear 0.3s infinite;
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
				<div class="incoming">
					<div class="bubble">
						<p>Hey, Father's Day is coming up..</p>
					</div>
					<div class="bubble">
						<p>What are you getting.. Oh, oops sorry dude.</p>
					</div>
				</div>
				<div class="outgoing">
					<div class="bubble lower">
						<p>Nah, it's cool.</p>
					</div>
					<div class="bubble">
						<p>Well you should get your Dad a cologne. Here smell it. Oh wait! ...</p>
					</div>
				</div>
				<div class="typing">
					<div class="bubble">
						<div class="ellipsis dot_1"></div>
						<div class="ellipsis dot_2"></div>
						<div class="ellipsis dot_3"></div>
					</div>
				</div>
			</div>
			<div class="foot">
				<input type="text" class="msg" placeholder="Type a message..." />
				<button type="submit"><img class="submit_btn_icon" src="https://img.icons8.com/paper-plane" /></button>
			</div>
		</div>
	</div>
</body>

</html>