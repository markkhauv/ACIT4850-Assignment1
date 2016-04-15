<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    </head>
    <body>
          <span class="myhead"><img src="../../assets/Robots.jpg" alt="Robot" style="width:100%;height:176px;"></img></span>
        <nav>
           
                   <a href="#" class="nav-toggle-btn"> <img src="../../assets/click.jpg" alt="Robot" style="width:50px;height:50px;"></img></a>
             
                    <ul>
                        
                        <h2> Dashboard </h2>
                        <li><a href="/">Home</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/assembly">Assembly</a></li>
                        <li>{username}</li>
                        
                        
                         <li>
                           <a href="/login">Login</a>
                          
                            
                        </li>
                        
                        
                        <li>
                           <a href="<?=site_url('/homepage/logout/')?>">Logout</a>
                          
                            
                        </li>
                     
                    </ul>
        </nav>
           
            
            <div id="content">
                {content}
            </div>
            <div id="footer">
                Copyright &copy; 2016 | Ramon Dhami, Victor Van, Sivan Alkalay and Mark Khauv
            </div>
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        
        (function() {
            
            var bodyEl = $('body'),
                navToggleBtn = bodyEl.find('.nav-toggle-btn');
            
            navToggleBtn.on('click', function(e) {
                bodyEl.toggleClass('active-nav');
                e.preventDefault();
            });
            
            
            
        })();
        
        
    </script>
    </body>
</html>
