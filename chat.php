<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title></title>
	<style>
		body {
    display: flex;
    justify-content: center;
    background-image:url("images/c.png");
    background-attachment: fixed;
    background-position:cover;
    background-size:100%;
    background-repeat:repeat;
}
i{
  margin-right:10px;
  font-size:21px;
  color:grey;
}
.chatbot-container {
    width: 500px;
    margin: 0 auto;
    background-color: #f5f5f5;
    border: 1px solid #cccccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

#chatbot {
    background-color: #f5f5f5;
    border: 1px solid #eef1f5;
    box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1);
    border-radius: 4px;
  }
  
  #header {
    background-color:green;
    color: #ffffff;
    padding: 20px;
    font-size: 1em;
    font-weight: bold;
  }

  message-container {
    background: #ffffff;
    width: 100%;
    display: flex;
    align-items: center;
  }
  
  
  #conversation {
    height: 400px;
    overflow-y: auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
  }

  @keyframes message-fade-in {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .chatbot-message {
    display: flex;
    align-items: flex-start;
    position: relative;
    font-size: 16px;
    line-height: 20px;
    border-radius: 20px;
    word-wrap: break-word;
    white-space: pre-wrap;
    max-width: 100%;
    padding: 0 15px;
  }

  .user-message {
    justify-content: flex-end;
  }


.chatbot-text {
    background-color: white;
    color: #333333;
    font-size: 1.1em;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  #input-form {
    display: flex;
    align-items: center;
    border-top: 1px solid #eef1f5;
  }
  
  #input-field {
    flex: 1;
    height: 60px;
    border: 1px solid #eef1f5;
    border-radius: 4px;
    padding: 0 10px;
    font-size: 14px;
    transition: border-color 0.3s;
    background: #ffffff;
    color: #333333;
    border: none;
  }

  .send-icon {
    margin-right: 10px;
    cursor: pointer;
  }
  
  #input-field:focus {
    border-color: #333333;
    outline: none;
  }
  
  #submit-button {
    background-color: transparent;
    border: none;
  }

  p[sentTime]:hover::after {    
    content: attr(sentTime);
    position: absolute;
    top: -3px;
    font-size: 14px;
    color: gray;
  }

  .chatbot p[sentTime]:hover::after {  
    left: 15px;
  }

  .user-message p[sentTime]:hover::after {  
    right: 15px;
  }

  /* width */
::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }
	</style>
</head>
<body>
 <div class="chatbot-container">
        <div id="header">
            <h1>Chatbot</h1>
        </div>
        <div id="chatbot">
            <div id="conversation">
              <div class="chatbot-message">
                <p class="chatbot-text" style="background: red;">Hi! 👋 it's great to see you!</p>
              </div>
            </div>
            <form id="input-form">
              <message-container>
                <input id="input-field"  style="background: red;" type="text" placeholder="Type your message here">
                <button id="submit-button" type="submit">
                  <i class="fa fa-paper-plane"  aria-hidden="true"></i>
                </button>
              </message-container>
                
            </form>
        </div>  

    </div>
</body>

<script>
const chatbot = document.getElementById('chatbot');
const conversation = document.getElementById('conversation');
const inputForm = document.getElementById('input-form');
const inputField = document.getElementById('input-field');

// Add event listener to input form
inputForm.addEventListener('submit', function(event) {
  // Prevent form submission
  event.preventDefault();

  // Get user input
  const input = inputField.value;


  // Clear input field
  inputField.value = '';
  const currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: "2-digit" });

  // Add user input to conversation
  let message = document.createElement('div');
  message.classList.add('chatbot-message', 'user-message');
  message.innerHTML = `<p class="chatbot-text" sentTime="${currentTime}">${input}</p>`;
  conversation.appendChild(message);

  // Generate chatbot response
  const response = generateResponse(input);

  // Add chatbot response to conversation
  message = document.createElement('div');
  message.classList.add('chatbot-message','chatbot');
  message.innerHTML = `<p class="chatbot-text" sentTime="${currentTime}">${response}</p>`;
  conversation.appendChild(message);
  message.scrollIntoView({behavior: "smooth"});
});

// Generate chatbot response function
function generateResponse(input) {
    // Add chatbot logic here
    const responses = [
      "What is your name 😊",
      "Mobile Number😕",
      "Address 📩",
      "Remarks? 🤔",
      "Category Wholesale or Retail💡",
    ];
    // Return a random response
    return responses[Math.floor(Math.random() * responses.length ).toFixed()];
  //   for(let i=0;i<responses.length;i++){
  //   return responses[i];
  // }
  }
  
</script>
</html>

<?php
  
?>