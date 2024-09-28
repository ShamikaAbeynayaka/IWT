var submitButton = document.getElementById("submitBtn");

submitButton.addEventListener("click", function(event) {
  event.preventDefault();

  // Perform additional actions or validation here

  
  document.querySelector("form").submit();
});


function handleFormSubmissionSuccess() {
  alert("Payment was successful!");
}


function handleFormSubmissionFailure() {
  alert("Payment failed. Please try again.");
}


var urlParams = new URLSearchParams(window.location.search);
var successParam = urlParams.get('success');

if (successParam === 'true') {
  handleFormSubmissionSuccess();
} else if (successParam === 'false') {
  handleFormSubmissionFailure();
}
