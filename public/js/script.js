jQuery(document).ready(function () {
    $("#btn_contact_us").click(function () {
        $("#contact_us_modal").modal("show");
    })

    $(document).on("submit", "#contact_us_form", function () {
        const name = $("#contact_us_name").val();
        const email = $("#contact_us_email").val();
        const facebook_account = $("#contact_us_facebook_account").val();
        const mobile_number = $("#contact_us_mobile_number").val();
        const message = $("#contact_us_message").val();

        $("#contact_us_submit").text("Please wait...");
        $("#contact_us_submit").attr("disabled", true);

        var formData = new FormData();

        formData.append('name', name);
        formData.append('email', email);
        formData.append('facebook_account', facebook_account);
        formData.append('mobile_number', mobile_number);
        formData.append('message', message);

        formData.append('contact_us', true);

        $.ajax({
            url: 'vendor/security/server.php',
            data: formData,
            type: 'POST',
            dataType: 'JSON',
            processData: false,
            contentType: false,
            success: function (response) {
                setTimeout(function () {
                    $("#contact_us_modal").modal("hide");

                    $("#contact_us_name").val("");
                    $("#contact_us_email").val("");
                    $("#contact_us_facebook_account").val("");
                    $("#contact_us_mobile_number").val("");
                    $("#contact_us_message").val("");

                    $("#contact_us_submit").text("Submit");
                    $("#contact_us_submit").removeAttr("disabled");

                    Swal.fire({
                        title: "Success!",
                        text: "Message Sent. Please check your email and sms regularly for admin's response.",
                        icon: "success"
                    });
                }, 1500);
            },
            error: function (_, _, error) {
                console.error(error);
            }
        });
    })
})