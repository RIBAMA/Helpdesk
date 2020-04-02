<?php
$title="Tickets";
include 'header.php';
?>
    <div class="main">
        <?php
            include 'asside.php';
        ?> 
        <div class="center">
            <form action="tickets.php" method="post" accept-charset="utf-8">
                <div class="input">
                    <label for="object">Object</label>
                    <input type="text" name="userName" id="userName" value=""
                    placeholder="please write the object of the ticket" required checked>
                </div>
                <div class="input2">
                    <label for="dateDay">Date</label>
                    <input type="date" name="dateDay" id="dateDay"
                    value="" required/>
                </div>
                <div class="input3">
                    <label for="timeHour">Time</label>
                    <input type="time" name="timeHour" id="timeHour"
                    value="" required/>
                </div>
                <div class="input4">
                    <label for="emailInput">Email</label>
                    <input type="email" name="emailInput" id="emailInput"
                    value="" placeholder="pseudo@server.tld" required/>
                </div>
                <label id="lbDescription" for="description">Description</label>
                <textarea name="description" id="description" cols="70" rows="5" placeholder="write a minimal description off the problem"></textarea>

                <input type="submit" name="send" id="send" value="Open a ticket">
                <input type="reset" name="cancel" id="cancel" value="Cancel">
                
            </form>
        </div>
    </div>    
<?php
include 'footer.php';
?>
