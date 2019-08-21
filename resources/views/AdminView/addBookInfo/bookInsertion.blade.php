<html>
  <head>
      <title></title>
  </head>
  <body>
    <h1 align ="center" >Book Insertion Process</h1>
      <form action = "{{URL::to('/insertingBooksInfo')}}" method = "get">
          <table align = "center">
              <tr>
                  <td>Book Name</td>
                  <td>
                      <input type = "text" name="bookName">
                  </td>
              </tr>
              <tr>
                  <td>Book Type</td>
                  <td>
                      <select name = "booksType">
                          <option>Novel</option>
                          <option>Literature</option>
                          <option>Science Fictions</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>Book Prize</td>
                  <td>
                      <input type = "text" name="book_prizee">
                  </td>
              </tr>
              <tr>
                  <td>Book Descriptions</td>
                  <td>
                      <input type = "text" name="book_description">
                  </td>
              </tr>
              <tr>
                  <td></td>
                  <td><input type = "submit" name="book_btn_submit"></td>
              </tr>
          </table>
      </form>
  </body>
</html>
