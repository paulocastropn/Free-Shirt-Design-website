<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Home | Free Design Shirt</title>
    <meta name="author" content="Free Design Shirt, Inc.">
    <meta name="description" content="Free Design Shirt's High-Fidelity Record Player Promotional Website">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/global-nav.php";
		?>
    </header>
    <main>
        <section style="background-color: #985d6f; padding-top: 120px; color: #e3cdbd;">
             <div style="padding-bottom: 32px">
                <div>
                    <img src="imgs/at-lp5x_04(1).png" alt="" style="width: 400px; height: 300px; object-fit: cover;">
                </div>
                <div>
                    <h2>Support</h2>
                    <p>Customer satisfaction is our top priority. Our team is here to assist you at every step of the purchasing journey, providing personalized support, answering questions, and offering recommendations if needed. We want your experience with Georgian Records to be exceptional, from the moment you visit our website to the moment your turntable is playing your favorite tunes.</p>
                </div>
            </div>
        </section>
        <section style="background-color: #1b2132;">
            <div class="support-form">
                <h2 style="margin-top: 0;">Got a question? We're here to help!</h2>
                <h4>Simply fill out the form below and you will be answered by a Georgian Records team member.</h4>
                <!-- Set the action attribute for the form-->
                <form id="edit_info" action="process-form.php" method="get">
                    <!-- Note the hidden form element below - these can be used to other useful name/value pairs to the server -->
                    <input type="hidden" name="form_sent" value="1">
                    <fieldset>
                        <legend>Contact Information</legend>
                        <!-- STEP 3: Build an input element for First Name and Last Name - include type, name, id, required, size, maxlength, and placeholder attributes -->
                        <div>
                            <label for="fname">First Name</label>
                            <input id="fname" type="text" name="fname" required size="29" maxlength="50" placeholder="First Name">
                        </div>
                        <div>
                            <label for="lname">Last Name</label>
                            <input id="lname" type="text" name="lname" size="29" maxlength="50" placeholder="Last Name">
                        </div>
                
                        <!-- Add an input element for phone number (type="tel") -->
                        <div>
                            <label for="tel">Phone</label>
                            <input id="tel" type="tel" name="tel" placeholder="Phone">
                        </div>
                        <!-- STEP 7a: Include an input element and label for email (type="email"), then head to the top of the HTML to add CSS to make the form look better-->
                        <div>
                            <label for="email">Email address</label>
                            <input id="email" type="email" name="email" required placeholder="your@email.com">
                        </div>
                    </fieldset>
                        <fieldset>
                            <legend>Message</legend>
                            <div>
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject" required>
                                    <option value="" disabled selected>Select option</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="Technical Support">Technical Support</option>
                                    <option value="Warranty Service">Warranty Service</option>
                                    <option value="Product Questions">Product Questions</option>
                                    <option value="Product Information">Product Information</option>
                                    <option value="Website Problems / Feedback">Website Problems / Feedback</option>
                                    <option value="Advertising / Promotions">Advertising / Promotions</option>
                                    <option value="Career Opportunity">Career Opportunity</option>
                                </select>
                            </div>
                
                            <div>
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="4" cols="50" placeholder="How can we help?" required></textarea>
                            </div>
                
                        <!-- Add an input and label for a photo (type="file") -->
                        <div>
                            <label for="attach-file">File</label>
                            <input id="attach-file" type="file" name="File">
                        </div>
                        </fieldset>
                        <fieldset class="support-review">
                            <legend>Support page review</legend>
                
                            <label>This support page was helpful?</label>
                            <br>
                            <br>
                            <div class="stars">
                              <span>
                                <input id="review01" type="radio" name="review"><label for="review01">★</label>
                                <input id="review02" type="radio" name="review"><label for="review02">★</label>
                                <input id="review03" type="radio" name="review"><label for="review03">★</label>
                                <input id="review04" type="radio" name="review"><label for="review04">★</label>
                                <input id="review05" type="radio" name="review"><label for="review05">★</label>
                              </span>
                            </div>
                        </fieldset>
                <input class="button" type="submit" name="submitmessage" value="send">
                </form>
            </div>
        </section>
    </main>
    <footer>
    <?php
			include $_SERVER['DOCUMENT_ROOT']."/includes/footer-nav.php";
		?>
    </footer>
</body>
</html>