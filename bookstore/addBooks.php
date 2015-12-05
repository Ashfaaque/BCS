<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<form method="post" action="addbookprocess.php" enctype="multipart/form-data">
   <table class="table table-hover">
      <tr>
         <td height="31" colspan="2">
            <h4 align="center">Add Book</h4>
         </td>
      </tr>
      <tr>
         <td height="31">Book ID: </td>
         <td><input type="text" name="bookID" required="required"/></td>
      </tr>
      <tr>
         <td height="34">Book Name: </td>
         <td><input type="text" name="bookName" required="required"/></td>
      </tr>
      <tr>
         <td height="30">Author:</td>
         <td><input type="text" name="bookAuthor" required="required"/>
         </td>
      </tr>
      <tr>
         <td height="31">Description: </td>
         <td><textarea name="bookDescription" id="bookDescription" cols="30" rows="3"></textarea></td>
      </tr>
      <tr>
         <td height="27">Price: </td>
         <td><input type="text" name="bookPrice" required/></td>
      </tr>
      <tr>
         <td height="37">Image: </td>
         <td><input type="file" name="bookImage"/></td>
      </tr>
      <tr>
         <td></td>
         <td align="right"><button type="submit" name="save" id="save" class="btn btn-primary">
            <i class="glyphicon glyphicon-save"></i>&nbsp;Save</button>
         </td>
      </tr>
   </table>
</form>