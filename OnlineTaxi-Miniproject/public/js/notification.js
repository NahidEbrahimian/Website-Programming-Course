function notify()
{
    var notify = new Notification("سفر جدید", {
        body: "سلاام شما یک سفر جدید دارید",
        // icon: ""
    });
    setTimeout(function(){notify.close()}, 5000);
}

function show_notification()
{
    if("notification" in window){
        if(Notification.permission == "granted"){
            notify();
        }
        else if(Notification.permission == "denied"){

        }
    }
    else{
        alert("نوتیفیکیشن در مرورگر شما پشتیبانی نمی شود.");
    }
}