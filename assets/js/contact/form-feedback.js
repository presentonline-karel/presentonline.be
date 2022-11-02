const formFeedback = () => {
    var submitEvent = null;
  
    //form
    const form = document.querySelector(".contact-form");
  
    //inputs
    const name = document.querySelector(".name");
    const email = document.querySelector(".email");
    const subject = document.querySelector(".subject");
    const message = document.querySelector(".message");
  
    //all inputs
    const inputs = document.querySelectorAll(".input");
  
    form.addEventListener("submit", (e) => {
      submitEvent = e;
  
      checkInputs();
  
      name.addEventListener("input", checkInputs);
      email.addEventListener("input", checkInputs);
      subject.addEventListener("input", checkInputs);
      message.addEventListener("input", checkInputs);
    });
  
    //Check inputs on submit
    function checkInputs() {
      const nameValue = name.value.trim();
      const emailValue = email.value.trim();
      const subjectValue = subject.value.trim();
      const messageValue = message.value.trim();
  
      //name
      if (nameValue === "") {
        setErrorFor(name, "Vul uw naam in.");
      } else {
        setSuccessFor(name);
      }
  
      //email
      if (emailValue === "") {
        setErrorFor(email, "Vul uw e-mail in.");
      } else if (!isEmail(emailValue)) {
        setErrorFor(email, "Vul een geldig e-mailadres in.");
      } else {
        setSuccessFor(email);
      }
  
      //subject
      if (subjectValue === "") {
        setErrorFor(subject, "Vul een onderwerp in.");
      } else {
        setSuccessFor(subject);
      }
  
      //message
      if (messageValue === "") {
        setErrorFor(message, "Vul een boodschap in.");
      } else {
        setSuccessFor(message);
      }
    }
  
    //Put error on input
    function setErrorFor(input, message) {
      const formControl = input.parentElement; //input-group
      const small = formControl.querySelector("small");
  
      //change error message of form input
      small.innerText = message;
  
      //add error class to form input
      formControl.className = "input-group error";
  
      //prevent form from submitting
      submitEvent.preventDefault();
    }
  
    //Put success on input
    function setSuccessFor(input) {
      const formControl = input.parentElement;
      formControl.className = "input-group success";
    }
  
    //Check if input user is a valid email
    function isEmail(email) {
      return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        email
      );
    }
  };
  
  formFeedback();