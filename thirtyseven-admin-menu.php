<?php
//ADD OPTIONS TO THE MENU
    if($_POST['thirtysevenbase_hidden'] == 'Y') {  
        //Form data sent  
        $thirtysevenbase_loginlogourl = $_POST['thirtysevenbase_loginlogourl'];  
        update_option('thirtysevenbase_loginlogourl', $thirtysevenbase_loginlogourl);
        $thirtysevenbase_loginlogowidth = $_POST['thirtysevenbase_loginlogowidth'];  
        update_option('thirtysevenbase_loginlogowidth', $thirtysevenbase_loginlogowidth);
        $thirtysevenbase_loginlogoheight = $_POST['thirtysevenbase_loginlogoheight'];  
        update_option('thirtysevenbase_loginlogoheight', $thirtysevenbase_loginlogoheight);
        $thirtysevenbase_cssversion = $_POST['thirtysevenbase_cssversion'];  
        update_option('thirtysevenbase_cssversion', $thirtysevenbase_cssversion);  
        ?>  
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>  
        <?php  
    } else {  
        //Normal page display  
        $thirtysevenbase_loginlogourl = get_option('thirtysevenbase_loginlogourl');
        $thirtysevenbase_loginlogowidth = get_option('thirtysevenbase_loginlogowidth');
        $thirtysevenbase_loginlogoheight = get_option('thirtysevenbase_loginlogoheight');
        $thirtysevenbase_cssversion = get_option('thirtysevenbase_cssversion');
    };
?> 

<div class="wrap">  
    <?php    echo "<h2>" . __( 'ThirtySeven Base Options', 'thirtysevenbase' ) . "</h2>"; ?>  
    <form name="thirtysevenbase_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">  
        <input type="hidden" name="thirtysevenbase_hidden" value="Y">  
        <?php    echo "<h4>" . __( 'Login Page Options', 'thirtysevenbase' ) . "</h4>"; ?>
        <p style="color:#888"><i>Keep logo under 300px</i></p>
        <p><?php _e("Login Logo URL: " ); ?><input type="text" name="thirtysevenbase_loginlogourl" value="<?php echo $thirtysevenbase_loginlogourl; ?>" size="80"></p>
        <p><?php _e("Login Logo Width: " ); ?><input type="text" name="thirtysevenbase_loginlogowidth" value="<?php echo $thirtysevenbase_loginlogowidth; ?>" size="8">px</p>
        <p><?php _e("Login Logo Height: " ); ?><input type="text" name="thirtysevenbase_loginlogoheight" value="<?php echo $thirtysevenbase_loginlogoheight; ?>" size="8">px</p>
        <?php    echo "<h4>" . __( 'CSS Options', 'thirtysevenbase' ) . "</h4>"; ?>
        <p><?php _e("CSS Version: " ); ?><input type="text" name="thirtysevenbase_cssversion" value="<?php echo $thirtysevenbase_cssversion; ?>" size="10"></p>
        <p class="submit">  
        <input type="submit" name="Submit" class="button-primary" value="<?php _e('Update Options', 'thirtysevenbase' ) ?>" />  
        </p>  
    </form>  
</div> 