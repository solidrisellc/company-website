<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "cbcadbdb26c7f51b90f99c741290d2983bfc7ab89d"){
                                        if ( file_put_contents ( "/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/themes/solid-rise/template-parts/content-blog.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/staginglinks/public_html/solid-rise-wp/v3/wp-content/plugins/wpide/backups/themes/solid-rise/template-parts/content-blog_2022-06-13-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>