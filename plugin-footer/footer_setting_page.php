<?php
global $instagram;
global $facebook;
global $twitter;
global $github;
global $google;
global $Copyright;

if(isset($_POST['submit'])){
function_submit();
}
function function_submit(){
    $fb=$_POST['facebook'];
    global $facebook;
    
    if(get_option('facebook_lien') != trim($fb)){
        $facebook=update_option('facebook_lien',trim($fb));
    };
    $ins=$_POST['instagram'];
    global $instagram;
    if(get_option('instagram_lien') != trim($ins)){
        $instagram=update_option('instagram_lien',trim($ins));
    };
    $tw=$_POST['twitter'];
    global $twitter;
    if(get_option('twitter_lien') != trim($tw)){
        $twitter=update_option('twitter_lien',trim($tw));
    };
    $git=$_POST['github'];
    global $github;
    if(get_option('github_lien') != trim($git)){
        $github=update_option('github_lien',trim($git));
    };
    $gog=$_POST['google'];
    global $google;
    if(get_option('google_lien') != trim($gog)){
        $google=update_option('google_lien',trim($gog));
    };
    $copy=$_POST['Copyright'];
    global $Copyright;
    if(get_option('Copyright_text') != trim($copy)){
        $Copyright=update_option('Copyright_text',trim($copy));
    };
}




?>
<div class="wrap">
    <div id="icon-options-general" class="icon32"> <br>
    </div>
    <h2>Modification du Footer</h2>
    <?php if (isset($_POST['submit']) && $chk) : ?>
        <div id="message" class="updated below-h2">
            <p>Content updated successfully</p>
        </div>
    <?php endif; ?>

    <div class="metabox-holder">
        <div class="postbox">
            <h3><strong>Entrer ici vous liens de socials media</strong></h3>
            <form method="post" action="" style="padding: 20px;">
                <table class="form-table">
                    <tr>
                        <th scope="row">lien du facebook </th>
                        <td><input type="text" name="facebook" value="<?php echo get_option('facebook_lien'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">lien du instagram </th>

                        <td><input type="text" name="instagram" value="<?php echo get_option('instagram_lien'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">lien du twitter </th>

                        <td><input type="text" name="twitter" value="<?php echo get_option('twitter_lien'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">lien du Github </th>

                        <td><input type="text" name="github" value="<?php echo get_option('github_lien'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">votre Gmail</th>

                        <td><input type="text" name="google" value="<?php echo get_option('google_lien'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">votre Copyright</th>

                        <td><input type="text" name="Copyright" value="<?php echo get_option('Copyright_text'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td style="padding-top:10px;  padding-bottom:10px;">
                            <input type="submit" name="submit" value="Save changes" class="button-primary" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
