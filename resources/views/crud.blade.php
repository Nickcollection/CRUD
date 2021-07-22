<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
    <link rel="stylesheet" href="{{asset('css\datatable.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
</head>
<body style="background-color:grey;">
    <div class="w-75 p-3  border border-danger">
        <h1>User Details :</h1>
        <form method="POST" action="/user">
            @csrf 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Full Name:</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name:">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">User Name:</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Contact No:</label>
                  <input type="number" class="form-control" name="contactnumber" id="contactnumber" placeholder="Contact No">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Password:</label>
                  <input type="text" class="form-control" name="password" id="password" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">User Role</label>
                    <select id="userrole" name="userrole" class="form-control">
                      <option selected>Choose...</option>
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Confirm Password</label>
                <input type="text" class="form-control" id="confirmpassword">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>

          

          <h1>Users list :</h1>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>fullname</th>
                    <th>email</th>
                    <th>username</th>
                    <th>contactnumber</th>
                    <th>password</th>
                    <th>userrole</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userdetails as $userdetail)
                <tr>
                    <td> {{$userdetail->id}}</td>
                    <td> {{$userdetail->fullname}}</td>
                    <td> {{$userdetail->email}}</td>
                    <td> {{$userdetail->username}}</td>
                    <td> {{$userdetail->contactnumber}}</td>
                    <td> {{$userdetail->password}}</td>
                    <td> {{$userdetail->userrole}}</td>
                </tr>
                @endforeach
            </tbody>
           
            
        </table>
    </div>    



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  
</body>
</html>