const ENDPOINT = "https://adyanshsolutions.com/";
$("#contact_form").validate({
  rules: {
    name: "required",
    email: {
      required: true,
      email: true,
    },
    phone: "required",
    message: "required",
  },
  messages: {
    name: "Please specify your name",
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com",
    },
  },
  submitHandler: function (form) {
    //preparing api url
    let URL = ENDPOINT + "contactForm/contact_form.php";
    //initiating network request
    fetch(URL, { method: "POST", body: new FormData(form) })
      .then((res) => res.json())
      .then((data) => {
        alert(data.msg);
        // $("#modal_message").html(data.msg);
        // $("#message_modal").modal("show");
        if (data.status) $(form).trigger("reset");
      })
      .catch(() => alert("Something went wrong. Please try again"));
  },
});
