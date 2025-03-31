<?php

// use to customize password protected page prompts
function my_custom_password_form() {
    global $post;
    $label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );

    $journal = '
    <div class="passprotected">
        <div class="container">
            <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="form-inline post-password-form" method="post">
                <h1>' . __( 'Holistic Journal Online Companion' ) . '</h1>
                <p>' . __( 'Hello and welcome to the Holistic Journal Online Companion. To access this resource you need a copy of the <a href="https://www.amazon.com/dp/0578337657?ref=exp_drbrookestuart_dp_vv_d" target="blank">Let Go & Grow Holistic Journal</a>. Please navigate to page 12 in your book and find the 9th word in the Intention Ideas chart. Enter the word below and click submit to gain access. '  ) . '</p>
                <p class="' . $label . '"><label for="' . $label . '">' . __( 'Enter word:' ) . ' </label><input name="post_password" id="' . $label . '" class="pw-protected" type="password" size="20" class="form-control" /><button type="submit" name="Submit" class="btn pw-protected">' . esc_attr_x( 'Submit', 'post password form' ) . '</button>
            </p>
            </form>
        </div>
    </div>';

    $zoe = '
    <div class="passprotected">
        <div class="container">
            <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="form-inline post-password-form" method="post">
                <h1>' . __( 'Lets Grow with Zoë Online Companion' ) . '</h1>
                <p>' . __( 'Hello and welcome to the Lets Grow with Zoë Online Companion. To access this resource you need a copy of a <a href="https://www.amazon.com/Zo%C3%AB-Climbs-Stairs-Brooke-Stuart/dp/057839376X/ref=sr_1_1?dib=eyJ2IjoiMSJ9.J9bL7Zhg94MUTOzue-aNVUL78kI1yz6vhClkKUJIpM6me_LS86vE2hOz85dJDDhq8cX2_NqnVoouXtnXV2TwjiYDS2rGg_nFw8Q9GQZGItfhGqSAEug6L-7rTxOTXQsWzTg4-BoJwn6AjNY9GmtkgA.FXHnv3Z8USguuo447sKo21qMPrUgYQ-e9Q0A_tZq9Dg&dib_tag=se&qid=1731184525&refinements=p_27%3ABrooke+Stuart+Dr.&s=books&sr=1-1&text=Brooke+Stuart+Dr." target="blank">Lets Grow with Zoë</a> book. If you have the book, navigate to the dedication page. What is the real Zoës last name?'  ) . ' </p>
                <p class="' . $label . '"><label for="' . $label . '">' . __( 'Enter Zoës last name:' ) . ' </label><input name="post_password" id="' . $label . '" class="pw-protected" type="password" size="20" class="form-control" /><button type="submit" name="Submit" class="btn pw-protected">' . esc_attr_x( 'Submit', 'post password form' ) . '</button>
            </p>
            </form>
        </div>
    </div>';


    $intern = '
    <div class="passprotected">
        <div class="container">
            <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="form-inline post-password-form" method="post">
                <h1>' . __( 'Internship Program' ) . '</h1>
                <p>' . __( 'Hello and welcome to the Internship Program. To access this resource you need a password.'  ) . '</p>
                <p class="' . $label . '"><label for="' . $label . '">' . __( 'Enter word:' ) . ' </label><input name="post_password" id="' . $label . '" class="pw-protected" type="password" size="20" class="form-control" /><button type="submit" name="Submit" class="btn pw-protected">' . esc_attr_x( 'Submit', 'post password form' ) . '</button>
            </p>
            </form>
        </div>
    </div>';

    $guidebook = '
    <div class="passprotected">
        <div class="container">
            <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="form-inline post-password-form" method="post">
                <h1>' . __( 'LG&G Guide Book Online Companion' ) . '</h1>
                <p>' . __( 'Hello and welcome to the LG&G Guide Book Online Companion. To access this resource you need a copy of the <a href="https://www.amazon.com/dp/0578375184?tag=onamzdrbrooke-20&linkCode=ssc&creativeASIN=0578375184&asc_item-id=amzn1.ideas.207ALUOZDB9K5" target="blank">Let Go & Grow Guide Book</a>. Please flip through your book and find the last word on page 8. Enter the word below and click submit to gain access. '  ) . '</p>
                <p class="' . $label . '"><label for="' . $label . '">' . __( 'Enter word:' ) . ' </label><input name="post_password" id="' . $label . '" class="pw-protected" type="password" size="20" class="form-control" /><button type="submit" name="Submit"class="btn pw-protected">' . esc_attr_x( 'Submit', 'post password form' ) . '</button>
            </p>
            </form>
        </div>
    </div>';

    $reminders = '
    <div class="passprotected">
        <div class="container">
            <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="form-inline post-password-form" method="post">
                <h1>' . __( 'LG&G Reminders Online Companion' ) . '</h1>
                <p>' . __( 'Hello and welcome to the LG&G Reminders Online Companion. To access this resource you need a copy of the <a href="https://www.amazon.com/Let-Go-Grow-Reminders-Workbook/dp/B0BNK6YP6G/ref=sr_1_3?dib=eyJ2IjoiMSJ9.J9bL7Zhg94MUTOzue-aNVUL78kI1yz6vhClkKUJIpM6me_LS86vE2hOz85dJDDhq8cX2_NqnVoouXtnXV2TwjiYDS2rGg_nFw8Q9GQZGItfhGqSAEug6L-7rTxOTXQsWzTg4-BoJwn6AjNY9GmtkgA.FXHnv3Z8USguuo447sKo21qMPrUgYQ-e9Q0A_tZq9Dg&dib_tag=se&qid=1731184385&refinements=p_27%3ABrooke+Stuart+Dr.&s=books&sr=1-3&text=Brooke+Stuart+Dr." target="blank">Reminders Workbook</a>. Please flip through your book to find the last word on page 10. Enter the word below and click submit to gain access. '  ) . '</p>
                <p class="' . $label . '"><label for="' . $label . '">' . __( 'Enter word:' ) . ' </label><input name="post_password" id="' . $label . '" class="pw-protected" type="password" size="20" class="form-control" /><button type="submit" name="Submit"class="btn pw-protected">' . esc_attr_x( 'Submit', 'post password form' ) . '</button>
            </p>
            </form>
        </div>
    </div>';


if ( is_page( 17861 ) ) { 
    return $journal;
}

if ( is_page( 17995 ) ) { 
    return $zoe;
}

if ( is_page( 15969 ) ) { 
    return $intern;
}

if ( is_page( 17859 ) ) { 
    return $guidebook;
}

if ( is_page( 17864 ) ) { 
    return $reminders;
}

}
add_filter('the_password_form', 'my_custom_password_form', 99);