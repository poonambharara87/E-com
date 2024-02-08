<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>
    <button type="text" class="active">Active</button>
    
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Role</th>
  </tr>

 
  @foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>

    @if($user->role_as == 0)
    <td>Active</td>
    @else
    <td>Inactive</td>
    @endif
  </tr>
  @endforeach
  
</table>
<button class="btn btn-primary"><a href="url('logout')">Logout</a></button>
</body>
<script>
        
        $(document).ready(function(){
            $(document).on('click', '.active', function(){
                $(this).text('Inactive');
                $(this).removeClass('active').addClass('inactive');
            });

        $(document).on('click', '.inactive', function(){
            $(this).text('Active');
            $(this).removeClass('inactive').addClass('active');
        });

        });
        
    
</script>
</html>
