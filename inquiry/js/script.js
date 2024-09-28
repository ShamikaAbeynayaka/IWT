var inquiry_select = document.getElementById("inquiry_select");

var email = null;

var inquiry_id = null;

inquiry_select.addEventListener('change', function handleChange(event) {

    inquiry_id = inquiry_select.value;

    if (inquiry_id != "None") {
        var r = new XMLHttpRequest();

        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                var text = r.responseText;
                if (text != "fail") {
                    obj = JSON.parse(text)
                    var question = document.getElementById("question");
                    question.innerHTML = obj.question;
                    email = obj.email;
                } else {
                    alert("Something wrong. Please try again");
                }
            }
        }

        r.open("POST", "question_select.php", true);
        r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        r.send("iid=" + inquiry_id);
    }


});

function answerProcess() {

    var answer = document.getElementById("answer").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text = "Success") {
                alert(text)
                location.reload();
            } else {
                alert("Something wrong. Please try again");
            }
        }
    }

    r.open("POST", "email_process.php", true);
    r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    r.send("answer=" + answer + "&email=" + email + "&iid=" + inquiry_id);

}