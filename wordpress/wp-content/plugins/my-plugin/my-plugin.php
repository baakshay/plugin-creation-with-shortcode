<?php
/**
 * Plugin Name: My Plugin
 * Description: This is my test plugin.
 * Version: 1.0
 * Author: Akshay Bahdurkar
 * Author URI: https://procohat.com
 */


 if(!defined('ABSPATH')){
     header("Location: /custome/wordpress/");
     die();
 }


 function my_plugin_activation(){
     //for communicate db variable $wpdb se connection miljayega database ke sath and %table_prefix for name the table
     global $wpdb,$table_prefix;  
     //asign a table name
     $wp_emp = $table_prefix.'emp';
     //Query for create a new table wp_emp in db
     $q = "CREATE TABLE IF NOT EXISTS `$wp_emp` ( `ID` INT NOT NULL AUTO_INCREMENT ,
      `name` VARCHAR(50) NOT NULL ,`email` VARCHAR(100) NOT NULL , `status` BOOLEAN NOT NULL ,
       PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
      
    $wpdb->query($q);  //for query exicution in wordpress 

    //insert data in db it takes two argument table name and array
    $data = array(
        'name' => 'Akshay',
        'email' => 'baakshay2612@gamai.com',
        'status' => 1
    );
    
    $wpdb->insert($wp_emp,$data);

    
     
 }
 register_activation_hook(__FILE__, 'my_plugin_activation');

 function my_plugin_deactivation(){
    global $wpdb,$table_prefix; 
    $wp_emp = $table_prefix.'emp';
    
    $q = "TRUNCATE `$wp_emp`";
    $wpdb->query($q);
}
register_deactivation_hook(__FILE__, 'my_plugin_deactivation');

//shortcode create
function my_shortcode($atts){
    $atts = array_change_key_case((array) $atts, CASE_LOWER);// for case sensitive case convert all the case in lower for "msg"
    $atts = shortcode_atts(array(
    'type' => 'img_gallery',  //this is for page vise short code value showing
    ),$atts);

     include $atts['type'].'.php';
}
add_shortcode('cust-code','my_shortcode');


//write js code in wordpress in proper way 
/* start */

function my_custom_scripts(){
    $path = plugins_url('js/main.js',__FILE__);
    $path_style = plugins_url('js/main.js',__FILE__);
    $deep = array('jquery');
    $ver = filemtime(plugin_dir_path(__FILE__).'js/main.js');
    $ver_style = filemtime(plugin_dir_path(__FILE__).'css/style.css');
    $is_login = is_user_logged_in() ? 1 : 0;

    wp_enqueue_style('my-custom-style','',$path_style, '',$ver_style);

    wp_enqueue_script('my-custom-js', $path, $dep, $ver, true);
    wp_add_inline_script('my-custom-js', 'var is_login = '.$is_login.';', 'before'); //user login or not code for inline js
}
add_action('wp_enqueue_scripts','my_custom_scripts'); //arg1= hook name , 2arg= function js script load on frontend
add_action('admin_enqueue_scripts','my_custom_scripts'); //arg1= hook name , 2arg= function js script load on backend dashboard

/* end */

/* new short code for get data from database */
/*start*/

function youtube(){
   //for communicate db variable $wpdb se connection miljayega database ke sath and %table_prefix for name the table
   global $wpdb,$table_prefix;  
   //asign a table name
   $wp_emp = $table_prefix.'emp';
   //Query for get the data from table wp_emp in db 
   $q = "SELECT * FROM `$wp_emp`;";
   $results = $wpdb->get_results($q);
//    echo '<pre>';  //array in pre formated format
//    print_r($results); //print_r used for print the array
//    echo '<pre>';
    ob_start()
    ?>
    <table>
        <thead></thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($results as $row):
          ?>  
          <tr>
            <td><?php echo $row->ID;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->status;?></td>
          </tr>
          <?php
          endforeach;
          ?>
        </tbody>
    </table>
    <?php
    $html = ob_get_clean();
    return $html;
}
add_shortcode('youtube','youtube');

/*start*/