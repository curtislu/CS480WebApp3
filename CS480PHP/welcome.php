 <html>
     <body>
         Welcome <?php echo $_POST["name"]; ?><br>
         <form action ="test.php" method ="post">
             Search: <input type ="text" name ="search"<br>
             <input type ="submit" value ="Search">
         </form>
     </body>
 </html>