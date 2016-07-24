<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Email Open Tracking Using PHP</title>
        <script src="js/jquery.min.js" type="text/javascript"></script>              
     <script src="js/myjs.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
    </head> 
    <body>        
        <div id="main">
            <h1>Email Open Tracking Using PHP</h1>
            <div id="login">
                <h2>Send Email</h2>
                <hr/>
                <form id="form1"  method="post">
                    <div id="box">
                        <input type="email" placeholder="To : Email Id " name="mailto" required/>  
                        <input type="text" placeholder="Subject : " name="subject" required/>
                        <textarea rows="2" cols="50" placeholder="Meassage : This is the fixed message of test email to get notify when it is read...." name="message" readonly ></textarea>
                        <input type="submit" value="Send" name="send" />   
                    </div>                                     
                </form>
                                
                <div id="loading-image"><img src="http://www.arabianbusiness.com/skins/ab.main/gfx/loading_spinner.gif" alt="Sending....."/></div>
                
                <form id="form2"  method="post">   
                        <div id="view"></div><br><br>
                    <div id="readstatus"></div>
                    <input type="submit" value="Track Status" id="track_mail" name="track"/>                           
                </form>
            </div>
        </div>
    </body>
</html>
