<?php
add_action('admin_menu', 'custom_site_options');
function custom_site_options()
{
    add_theme_page( 'Theme Settings','Theme Settings', 'add_users', 'custom_site_options','custom_site_optionscb');
}
function custom_site_optionscb()
{
    if(isset($_POST['hdnsbmt']))
    {
        extract($_POST);
        global $wpdb;
        update_option( "header_logo", $header_logo );
        update_option( "phone_number", $phone_number );
        update_option( "contact_link", $contact_link);
        update_option( "footer_image", $footer_image );
        update_option( "footer_image_link", $footer_image_link );
        update_option( "footer_copyright", $footer_copyright);
    }
    $header_logo = get_option("header_logo");
    $phone_number = get_option("phone_number");
    $contact_link = get_option("contact_link");
    $footer_image = get_option("footer_image");
    $footer_image_link = get_option("footer_image_link");
    $footer_copyright = get_option("footer_copyright");
    ?>
    <div class="wrap">
        <div id="icon-edit" class="icon32"><br/></div>
        <h2>Site Options</h2> 
    </div>
    <div class="custom_theme_options">
            <form action="" method="post" >
                
                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Header Logo:</div>
                    <div class="snglfld">
                        <input type="text" value="<?php echo $header_logo;?>" name="header_logo" />
                        <input type="button" onclick="custom_upload_image(this);" value="Upload" class="button button-primary" />
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Phone Number:</div>
                    <div class="snglfld">
                        <input name="phone_number" value="<?php echo $phone_number; ?>">
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Contact Link:</div>
                    <div class="snglfld">
                        <input name="contact_link" value="<?php echo $contact_link; ?>">
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Footer Image Link:</div>
                    <div class="snglfld">
                        <input type="text" value="<?php echo $footer_image_link;?>" name="footer_image_link" />
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Footer Image:</div>
                    <div class="snglfld">
                        <input type="text" value="<?php echo $footer_image;?>" name="footer_image" />
                        <input type="button" onclick="custom_upload_image(this);" value="Upload" class="button button-primary" />
                    </div>
                </div>

                <div class="snglbckrw">
                    <div class="sngllbl" width="190">Footer Copyright:</div>
                    <div class="snglfld">
                        <textarea name="footer_copyright"><?php echo str_replace("\\", '', $footer_copyright); ?></textarea>
                    </div>
                </div>

                <div class="snglbckrw">
                    <input type="submit" name="submit" value="Save" class="button-primary">
                    <input type="hidden" name="hdnsbmt">
                </div>
                
            </form>
    </div>
<style>
.custom_theme_options{
	width: 100%;
    float: left;
    margin: 0;
    padding: 0;
}

.upldbtn
{
    float: left;
    width:  100%;
    padding: 10px 0;
}
.snglbckrw
{
    width: 100%;
    float: left;
    margin: 5px 0;
    padding: 0;
}
.snglbckrw .sngllbl
{
    width: 150px;
    float: left;
    margin: 0;
    padding: 0;
}

.snglbckrw .snglfld
{
    width: 500px;
    float: left;
    margin: 0;
    padding: 0;
}
.snglbckrw .snglfld input[type="text"], .snglbckrw .snglfld textarea
{
    width: 300px;
    float: left;
}
</style>
    <?php
}
?>