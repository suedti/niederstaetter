
Notice: Undefined offset: 0 in /Users/pvh/Library/Application Support/Coda 2/Plug-ins/CSScomb.codaplugin/Contents/Resources/1E309925-0E58-4297-A1AA-A699C13910B6/Support Files/csscomb.php on line 1135
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Newsletter</title>
    <style type="text/css">
             
                        .ExternalClass {width:100%;} 
                        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                            line-height: 100%;} 
                         
                        body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;} 
                        body {margin:0; padding:0;} 
                        table td {border-collapse:collapse;}    
                 
                        p {margin:0; margin-bottom:0; padding:0;}       
                         
                        h1, h2, h3, h4, h5, h6 {
                           color: black; 
                           line-height: 100%; 
                           }  
                
                
                 h1 a {text-decoration: none;
                           }       
 

                        a, a:link {
                           color:#2A5DB0;
                           text-decoration: underline;
                           }       
 
                        body, #body_style {
                           min-height:1000px;
                           background:#f5f5f5;
                           color:#000;
                           font-size:12px;
                           font-family:Helvetica,Arial,  sans-serif;
                           } 
                            
                        span.yshortcuts { border:none; background-color:transparent; color:#000;}
                        span.yshortcuts:hover,
                        span.yshortcuts:active,
                        span.yshortcuts:focus { border:none; background-color:transparent;color:#000;}
                     
                        a:visited { color: #3c96e2; text-decoration: none;} 
                        a:focus   { color: #3c96e2; text-decoration: underline;}  
                        a:hover   { color: #3c96e2; text-decoration: underline;}  
                        
                        .single-table {
margin-bottom: 54px !important;
}

p.entry-title{	
margin-bottom: 0px;
	color: #00549f;
text-transform:uppercase;
	font-weight: bold;

	
	font-size: 26px;
}
p.news-subtitle{
margin-top: 10px;	
margin-bottom: 35px;
	color: #00549f;
text-transform:uppercase;
	font-weight: normal;

	
	font-size: 18px;
	
}

p.entry-title a:link, p.entry-title a:visited, p.entry-title a:active{
	color: #00549f;
	
	text-decoration: none;
}
 table.logo-table{
	                            background-color:#f5f5f5;

	 
 }
 
 div.entry-content{
margin-top: 35px;
padding-right: 150px;
letter-spacing: 0.1em;
font-size: 15px;
line-height: 20px;
	 
 }
 
 
td.spacer-row{
	 height: 30px;
	 background-color: #F5F5F5 !important;
 }
 
 
td.news-row{
	 background-color: white;
 }
 
td.logo-row{
	 padding-left: 15px;
 }
 
 .entry-title {
padding-top: 20px;
}
    


 
@media only screen and (max-device-width: 480px) {

	  .entry-content{
margin-top: 35px !important;
padding-right: 150px !important;
letter-spacing: 0.1em !important;
font-size: 21px !important;
line-height: 26px !important;
	 
 }
 
 .entry-title{

	
	font-size: 33px;

}
.news-subtitle{

	
	font-size: 24px;



	
}
                        }       
                         
                        
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px)  {          
 
                        }              
 
       </style>   
<?php
//$cats = wp_get_post_categories(get_the_ID());}



/* get last sub-cat for newsletter title
$subb_cat=wp_list_categories('orderby=id&echo=0&style=none&show_count=0&use_desc_for_title=0&child_of='.$cat);



function getUrlLinkText($url){
 
    PREG_MATCH('/\>(.*)<\/a>/', $url, $matches);
    RETURN $matches[1];;
}


preg_match_all('#<a\s+href\s*=\s*"([^"]+)"[^>]*>([^<]+)</a>#i', $subb_cat, $matches, PREG_SET_ORDER);
foreach ($matches as $match) {

    $subtitle_date=$match[2];; 
}
*/



?>

     
</head>
<body style="background:#ccccc; min-height:1000px; color:#000000;font-family:Arial; font-size:12px"
alink="#FF0000" link="#FF0000" bgcolor="#ccccc" text="#00000" yahoo="fix"> 

 
    <div id="body_style" style="padding:15px"> 
    
    
    <table cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" width="550" align="center" class="logo-table">
            <tr>
                <td width="550" class="logo-row">
<img src="/wp-content/Newsletter_logo@2.gif" alt="Newsletter_logo" width="440" height="116" style="padding-left: 2px;" />
<br/><br/>

<img src="/wp-content/fonts.php?t=Newsletter <?php  echo date('m Y'); ?><?php //echo $subtitle_date; ?>" alt="Newsletter_subtitle"  />



<br/><br/><br/>
                </td>
            </tr>
                        
                        
            
        </table> 
        
         <table cellpadding="15" cellspacing="0" border="0" bgcolor="white" width="550" align="center" class="single-table">
