<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medical Doctors List</title>
</head>
  <body>
      <h1>All Books List </h1>
      <table align="center" border="1px" cellspacing="0">
    		<tr>

          <td> <b>ID</b></td>
    			<td> <b>Book Name</b></td>
    			<td><b>Book Type</b> </td>
    			<td> <b>Book Prize</b></td>
    			<td><b>Book Descriptions</b></td>
    		</tr>
    	@foreach($allBooks as $eachBook)
    		<tr>
          <td><b>{{$eachBook->id}}</b></td>
    			<td><b>{{$eachBook->BookName}}</b></td>
    			<td><b>{{$eachBook->BookType}}</b></td>
    			<td><b>{{$eachBook->BookPrize}}</b></td>
    			<td><b>{{$eachBook->BookDescription}}</b></td>

    		</tr>
    	@endforeach
    	</table>
      <form action ="{{URL::to('/adminBookList/DeleteBooks')}}" method= "get">
        <h3>Remove a Book from Book List</h3>
          <table>
              <tr>
                  <td>
                        Book id
                  </td>
                  <td>
                        <input type = "text" name="bookId">
                  </td>
              </tr>
              <tr>
                  <td>

                  </td>
                  <td>
                        <input type = "submit" name="BookBtn">
                  </td>
              </tr>

          </table>
      </form>


  </body>
</html>
