<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
<style>
	
	 html {
     position: relative;
     min-height: 100%;
}
 body {
     background-color: #121212;
     color: #888;
     font-size: 13px;
     height: 100%;
}
	 #wrapper {
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
}
 #wrapper #content-wrapper {
     overflow-x: hidden;
     width: 100%;
}
 #wrapper #content-wrapper .container-fluid{
     padding: 30px 30px 30px 255px;
}
:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}
	html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent}@-ms-viewport{width:device-width}
	.article,.aside,.figcaption,.figure,.footer,.header,.hgroup,.main,.nav,.section{display:block}
	.body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}
	
	.dl,.ol,.ul{margin-top:0;margin-bottom:1rem}
	
	.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}
	
	 .sidebar {
     width: 90px !important;
     background: #1c1c1c;
     min-height: 100%;
     z-index: 9;
     padding: 2px 0;
     position: fixed;
     height: 100%;
}
	 @media (min-width: 768px) {
    .sidebar {
        height: 100%;
        position: fixed;
        width: 225px !important;
    }
		 .sidebar:hover {
    overflow: auto;
}

		 .dl,.ol,.ul{margin-top:0;margin-bottom:1rem}
		  .sidebar .nav-item:last-child {
     margin-bottom: 1rem;
}
		 .a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}
		 .a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([tabindex]){color:inherit;text-decoration:none}
		 .a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus{outline:0}
		 .nav-link{display:block;padding:.5rem 1rem}
		 .nav-link:focus,.nav-link:hover{text-decoration:none}
		  .a {
     color: #ff0000;
     text-decoration: none !important;
}
		  @media (min-width: 1200px) {

}
		 .channel{
    width: 60px;
    border-radius: 100%;
}
		  .a:hover, h1, h2, h3, h4, h5, h6 {
     color: #fff;
}
		  .sidebar .nav-item .nav-link {
     font-size: 14px;
     padding: 12px 14px !important;
     text-align: center;
     width: 90px;
     font-weight: 600;
}
		  .sidebar .nav-item .nav-link {
     color: #ffffff;
}
		      .sidebar .nav-item .nav-link {
         display: block;
         width: 100%;
         text-align: left;
         padding: 1rem;
         width: 225px;
    }
		  .navbar-nav .nav-item .nav-link:focus {
     outline: none;
}
		  .sidebar .nav-item .nav-link:hover, .sidebar .nav-item.active .nav-link {
     /*background-color: rgba(255, 255, 255, 0.2);*/
}
		  .sidebar .nav-item .nav-link:active, .sidebar .nav-item .nav-link:focus, .sidebar .nav-item .nav-link:hover {
     color: rgba(255, 255, 255, 0.75);
}
	</style>
	
	    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --input-padding-x: 0.75rem;
    --input-padding-y: 0.75rem;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    line-height: 1.5;
    list-style: none;
    box-sizing: border-box;
    background-color: transparent;
    text-decoration: none !important;
    display: block;
    border-radius: 100%;
    font-size: 14px;
    text-align: center;
    width: 90px;
    font-weight: 600;
    color: #ffffff;
    padding: 8px 14px !important;
</head>
<a class="channel nav-link" data-value="https://live.x2.co.th/live/13livetv-th.m3u8" href="javascript:void(0);" data_liveedit_tagid="0000000010E57F30">National GEO People</a>
#list > li:nth-child(1) > a
	//*[@id="list"]/li[1]/a
	/html/body/div/div[1]/ul/li[1]/a
	
	
	 <body  id="page-top">
    <div id="wrapper">
          <div id="lists">
         <!-- Sidebar -->
         <ul id="list" class="sidebar navbar-nav list">
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.x2.co.th/live/13livetv-th.m3u8" href="javascript:void(0);">National GEO People</a>
            </li>
			  </ul>
		</div>
		 </div>
		 
		 
		 
		 
		 
		 <li class="nav-item" data_liveedit_tagid="0000000010E57CD0">
               <a class="channel nav-link" data-value="https://live.x2.co.th/live/13livetv-th.m3u8" href="javascript:void(0);" data_liveedit_tagid="0000000010E57F30">National GEO People</a>
            </li>
   </body>
	

	document.querySelector("#list > li:nth-child(2)")

</html>