<?php include "header.php" ?>

    <div class="container" id="contact">

        <p> <span style="background-color: pink"> Do you want to contact me? Leave your message below: </span></p>
        <form action="sendemail.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control col-sm-5" type="text" name="name" id="name" maxlength=100 required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-control col-sm-5" type="email" name="email" id="email" maxlength=100 required>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input class="form-control col-sm-5" type="text" name="subject" id="subject" maxlength=100 required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control col-sm-5"  type="text" name="message" id="message" maxlength=10000> </textarea>
            </div>

            <button type="submit" class="btn btn-outline-danger">Submit</button>
        
        </form>
        
    </div>

<?php include "footer.php" ?>