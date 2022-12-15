<?php
return function ($kirby, $pages, $page, $site) {
    $alert = null;

    if ($kirby->request()->is("POST") && get("submit")) {

        // check honeypot
        if (empty(get("website")) === false) {
            go($page->url());
            exit;
        }



        // Google reCAPTCHA validation
        $recaptcha = $_POST['g-recaptcha-response'];
        $secret_key = '6Ldspn8jAAAAAFD61yGQSG_B2rJ-CXFgo3-tnStV';
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;
        $response = file_get_contents($url);

        // Response return by google is in JSON format, so we have to parse that json
        $response = json_decode($response);



        // data from contact form
        $data = [
            "name"  => get("name"),
            "email" => get("email"),
            "subject" => get("subject"),
            "message"  => get("message")
        ];



        // Google reCAPTCHA was checked -> execute mail logic
        if ($response->success == true) {

            // the data is invalid
            if ($invalid = invalid($data)) {
                $alert = $invalid;

                // the data is fine, let"s send the email
            } else {
                try {
                    // set email function with correct values
                    $kirby->email([
                        "template" => "email-contact",
                        "from"     => "contact@presentonline.be",
                        "replyTo"  => $data["email"],
                        "to"       => esc($site->email()),
                        "subject"  => esc($data["name"]) . " - presentonline.be - Contact",
                        "data"     => [
                            "name"   => esc($data["name"]),
                            "email" => esc($data["email"]),
                            "subject" => esc($data["subject"]),
                            "message" => esc($data["message"])
                        ]
                    ]);

                    // when an exception error occured
                } catch (Exception $error) {
                    if (option("debug")) :
                        $alert["error"] = "Het formulier kon niet verzonden worden: <strong>" . $error->getMessage() . "</strong>";
                    else :
                        $alert["error"] = "Het formulier kon niet verzonden worden.";
                    endif;
                }

                // no exception occurred, let"s send a success message
                if (empty($alert) === true) {
                    $success = "Je boodschap is goed aangekomen! Je hoort snel van ons terug.";
                    $data = [];

                    if ($page = page('thank-you')) {
                        return $page->go();
                    }
                }
            }
        }
        // Google reCAPTCHA was not checked -> return error
        else {
            $alert['error'] = 'Het formulier kon niet verzonden worden: <strong>Vink het vakje aan om te bewijzen dat u geen robot bent ;)</strong>';
        }
    }

    

    return [
        "alert"   => $alert,
        "data"    => $data ?? false,
        "success" => $success ?? false
    ];
};