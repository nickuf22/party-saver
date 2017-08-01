<?php /*Template Name: Contact*/?>
<?php get_header(); ?>

<main class="contact">

    <h1>Contact Us</h1>

    <article id="contact_form">

        <p>Thank you for visiting my site. I am excited to hear from you. All inquiries will be responded to within 24 hours. Please fill out the form below or email me at nicholasuptgrow@gmail.com. Thank you again.</p>

        &nbsp;
        &nbsp;

        <form id="contactform" name="contact" method="post" action="form.php" onsubmit="return validateForm(this)">

          <fieldset id="basic">

            <p>
              <label class="label" for="name">Name:</label><br/>
              <input name="req_name" type="text" id="name" placeholder="First and last name" size="30" />

              <br/>
              <br/>

              <label class="label" for="email_address">Email:</label><br/>
              <input name="req_email_address" type="email" id="email_address" size="30" required/>

              <br/>
              <br/>

              <label class="label" for="phone_number">Phone:</label><br/>
              <input name="phone_number" type="tel" id="phone_number" size="30" required/><br/>

            </p>

            <p>
              <label class="label" for="contactmethod">Preferred method of contact:</label>
              <select name="contactmethod" id="contactmethod">
                <option value="phone">Phone</option>
                <option value="email">Email</option>
              </select>
            </p>

            <p>
              <label class="label" for="comments">Enter inquiry below.</label><br/>
              <textarea name="comments" id="comments" rows="10" cols="50"></textarea>
            </p>

          </fieldset>

           &nbsp;

           <p>
             <input type="submit" name="submit" value="Submit"/>
             <input type="reset" name="reset" value="Reset"/>
           </p>

        </form>

    </article>

</main>

<?php get_sidebar(); ?>
