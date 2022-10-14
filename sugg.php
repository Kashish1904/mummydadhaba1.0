<?php

include("includes/header.php");

?>
<link rel="stylesheet" href="sugg.css">
</head>
<body>
<div id="root">
    <div role="dialog" id="wpreview" class="page-1" style="">
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                <h1 class="title">SEND US A MESSAGE</h1>
                    <form method="POST" action="thanks.php" class="form valid pristine">
                        <div class="fields">
                            <div class="field text first valid">
                                <input id="name" class="input-text" required="" type="text" name="name" autocomplete="off" placeholder="Full Name">
                            </div>
                            <div class="field email valid">
                                <input id="email" class="input-text" required="" type="email" name="email" autocomplete="off" placeholder="E-mail">
                            </div>
                            <div class="field text valid">
                                <input id="phone" class="input-text" type="text" name="phone" autocomplete="off" placeholder="Phone">
                            </div>
                            <div class="field textarea valid">
                                <textarea id="message" class="input-textarea" name="message" rows="3" placeholder="Your Message" required=""></textarea>
                            </div>
                            <div class="field checkbox valid">
                                <input class="input-check" type="checkbox" name="subscribe" value="subscribe">
                                <span>Subscribe to our Newsletter</span>
                            </div>
                            
                        </div>
                        <div class="buttons">
                            <button type="submit" class="button primary btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>