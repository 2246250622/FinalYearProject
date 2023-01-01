var onlineChat = `
                    <div class="chatbox-title">
                    <i class="fas fa-sign-out-alt" id="out" style="margin-right: 4rem; font-size: 40px; transform: rotate(180deg);"></i><h4><i class="far fa-user" style="margin-right: 0.5rem"></i>Online Chat</h4>
                    <p style="color: white">Agent status: <span style="color: #696969">Offline</span> currently</p>
                    </div>
                    <div class="chat-container">
                    </div>
                    <div class="chatsend-group">
                        <form class="chatform" onsubmit="false">
                            <textarea required id="chatMsg" class="form-input" rows="5" placeholder="leave your message here." style="width:400px"></textarea>
                            <button class="btn" style="border-top-left-radius: 4px; border-top-right-radius: 4px; margin:0 auto; display: block;" id="sendMsg">Send Message</button>
                            </form>
                    </div>
                  `

var onlineInquiry = `
                        <div class="chatbox-title">
                        <h4><i class="fas fa-robot" style="margin-right: 0.5rem"></i>Online Inquiry</h4>
                        </div>
                        <div class="chat-container">
                        <div class="reply-content">
                            <span class="reply-icon" style="margin-right:0.5rem"><i class="fas fa-robot"></i></span>
                            <p>You can try using self-inquiry function to answer your doubt.
                            If still has any question, you can leave a message to us.
                            <br/><span class="reply-time">10:55PM</span></p>
                        </div>
                        </div>

                        <div class="answerbtn-group" >
                        <button id="ctacAsk" class="btn chatBtn">What's CareHK</button>
                        <button id="searchAsk" class="btn chatBtn">Reset password</button>
                        <button id="mkappAsk" class="btn chatBtn">Contact US</button>
                        <button id="chatBtn" class="btn chatBtn">Online Chat</button>
                        </div>
                        `
                    



function appendAnswer(x){
    var target = $(".chat-container");
    var today = new Date();
    var currentHours = today.getHours();
    var currentMins = today.getMinutes();
    currentMins = ("0" + currentMins).slice(-2)
    currentHours = ("0" + currentHours).slice(-2);
    if(x == 1){
        target.append(`        <div class="user-reply" id="reply1">
        <p>What is CareHK and how does it work?
          <br/><span class="reply-time">` + currentHours + `:` + currentMins + `</span></p>
      </div>`);
      setTimeout(function() {
        target.append(`        <div class="reply-content">
        <span class="reply-icon" style="margin-right:0.5rem"><i class="fas fa-robot"></i></span>
        
        <p><br>CareHK is an online marketplace where families looking for care can connect with caregivers.
        <br> <br>
        We provide a comprehensive self-service solution for your family care needs!
        <br>
       
          <br/><span class="reply-time">`+ currentHours + ":" + currentMins + `</span></p>
      </div>`);
        }, 500);
    } else if(x == 2){
        target.append(`<div class="user-reply" id="reply2">
        <p>How to reset password?
          <br/><span class="reply-time">`+ currentHours + ":" + currentMins +`</span></p>
        </div>`);
        setTimeout(function() {
            target.append(`<div class="reply-content">
            <span class="reply-icon" style="margin-right:0.5rem"><i class="fas fa-robot"></i></span>
            <p><br>The "My Profile" screen lets you view your account details, choose the default view that appears when you log on, change your password and more.
              <br/><span class="reply-time">`+ currentHours + ":" + currentMins + `</span></p>
          </div>`);
            }, 500);
    } else if(x == 3){
        target.append(`<div class="user-reply" id="reply3">
        <p>How to contact CareHK team?
          <br/><span class="reply-time">`+ currentHours + ":" + currentMins + `</span></p>
      </div>`);
        setTimeout(function() {
            target.append(`<div class="reply-content">
          <span class="reply-icon" style="margin-right:0.5rem"><i class="fas fa-robot"></i></span>
          <p><br>Need more help? <br><br>You can email to Mr.Cheuk at "21237387@life.hkbu.edu.hk" or <br>click <a href="mailto: 21237387@life.hkbu.edu.hk" class="chat-link">HERE</a>
              <br/><span class="reply-time">`+ currentHours + ":" + currentMins + `</span></p>
          </div>`);
            }, 500);
    } else if(x == 4){
        $(".chatbox").html(onlineChat);
    }
    setTimeout(function() {
        $(".chat-container").animate({ scrollTop: $(".chat-container").prop("scrollHeight") });
        }, 500);
}

function sendMsg(){
    var today = new Date();
    var currentHours = today.getHours();
    var currentMins = today.getMinutes();
    currentMins = ("0" + currentMins).slice(-2)
    currentHours = ("0" + currentHours).slice(-2);
    if(document.getElementsByClassName("chatform")[0].checkValidity()){
        $(".chat-container").append(`<div class="user-reply userchat-reply">
        <p>`+ $("#chatMsg").val() + `
          <br/><span class="reply-time">`+ currentHours + ":" + currentMins +`</span></p>
      </div>`)
      $("#chatMsg").val('');
      setTimeout(function() {
        $(".chat-container").animate({ scrollTop: $(".chat-container").prop("scrollHeight") });
        }, 500);
    }
}

function restore(){
    $(".chatbox").html(onlineInquiry);
}