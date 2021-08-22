     <!-- footer starts here -->
     <footer>
      <p><small>Website by Jonah Byrne ~ © <?=date('Y')?> by Ground Control Studios, All Rights Reserved ~ <a href="contact.php">Contact</a> ~ <a href="disclaimer.php">Legal Disclaimer</a>
        ~ <a id="html-checker" href="#" target="_blank">Valid HTML</a> ~ <a id="css-checker" href="#" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->  
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>

 <!-- Finds the url of the current page for running HTML and CSS validators -->
 <script>
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
	document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
 </script>
</body>
</html>