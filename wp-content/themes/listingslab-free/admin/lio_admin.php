<?php
add_action( 'admin_menu', 'lio_admin_menu' );
add_action( 'admin_init', 'register_lio_settings' );


function lio_admin_menu() {
    // https://developer.wordpress.org/resource/dashicons/#vault
	add_menu_page( 
        'LIO Settings Top Level Menu', 
        'LIO Settings', 
        'manage_options',
        'lio-settings',
        'lio_settings',
        'dashicons-star-filled', 
        6  
    );
}
function lio_settings(){
    $title = 'Listingslab IO Settings';
    $status = 'All Good';
    echo '<div class="wrap-admin">';

    echo '<div class="wrap-admin">';
    echo '<a class="button" style="float: right; margin: 16px;" onClick="goBack();" href="#">';
    echo 'Back';
    echo '</a>';
    echo '<h1>'.$title.'</h1>';
    echo '<form method="post" action="options.php">';
    settings_fields( 'lio-group' );
    ?>
    <script>
        function goBack (){
            // console.log ('lio_admin.php');
            window.history.back();
            return false;
        }
    </script>
    <style>
        .wrap-admin {
            /* border: 1px solid black; */
        }
        .indentLeft {
            margin-left: 25px;
        }
    </style>
    <div class="indentLeft">
        <h2>
            Account Status <span style="color: green;">All Good</span>
        </h2>
        <div class="indentLeft">
            API key
            <input 
                    style="width: 50%;"
                    type="text" 
                    name="apikey"
                    value="<?php echo esc_attr( get_option('apikey') ); ?>" />
        </div>
    </div>
    <table class="form-table">

        <tr valign="top">
            <th scope="row">
                <div class="indentLeft">
                    <h2>Colours</h2>
                </div>
            </th>
            <td>
                Find new colours at 
                <a href="https://htmlcolorcodes.com/color-names/" target="_blank">
                    htmlcolorcodes.com
                </a>
            </td>
        </tr>

         
        <tr valign="top">
            <th scope="row">
                <div class="indentLeft">
                    Theme colour
                </div>
            </th>
            <td>
                <input 
                    type="text" 
                    name="theme_color" 
                    value="<?php echo esc_attr( get_option('theme_color') ); ?>" />
            </td>
        </tr>
        
        <tr valign="top">
            <th scope="row">
                <div class="indentLeft">
                    Background colour
                </div>
            </th>

            <td>
                <input 
                    type="text" 
                    name="background_color" 
                    value="<?php echo esc_attr( get_option('background_color') ); ?>" />
            </td>
        </tr>

        <tr valign="top">
            <th scope="row">
                <div class="indentLeft">
                    Text colour
                </div>
            </th>
            <td>
                <input 
                    type="text" 
                    name="text_color" 
                    value="<?php echo esc_attr( get_option('text_color') ); ?>" />
                </td>
        </tr>
    </table>
    <?php
    submit_button();
    echo '</form>';
    echo '</div>';
}

function register_lio_settings() {
    register_setting( 'lio-group', 'apikey' );
    register_setting( 'lio-group', 'theme_color' );
    register_setting( 'lio-group', 'background_color' );
    register_setting( 'lio-group', 'text_color' );
}