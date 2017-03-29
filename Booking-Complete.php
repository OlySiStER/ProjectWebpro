<?php 

    $roomstype=$_POST['selectRoomType'];

    //collect room id
    $connect = mysqli_connect("localhost","root","","projectwebpro");
    $sql = 'select idRooms from rooms where RoomsType="'.$roomstype.'" ';
    $result = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($result)){
        
    $roomid=$row['idRooms'];
    }

    mysqli_close($connect);


    $connect = mysqli_connect("localhost","root","","projectwebpro");
    $sql = 'insert into customers_booking_rooms values (null,"1","1","'.$_POST['Title'].'","'.$_POST['FirstName'].'","'.$_POST['LastName'].'","'.$_POST['Email'].'","'.$_POST['Nationality'].'","'.$_POST['PhoneNumber'].'","'.$_POST['Smk'].'","'.$_POST['Floor'].'","'.$_POST['BedType'].'","'.$_POST['Check-in'].'","'.$_POST['Check-out'].'")';
    //$sql = 'insert into customers_booking_rooms values (null,"1","1","aa","aa","aa","aa","aa","aa","aa","aa","aa","2016-12-10","2016-12-10")';
    $result = mysqli_query($connect,$sql);
    
        if(!$result){
        echo mysqli_error().'<br><br>';
        die("Can't connect to database");
    } else {
        echo '<script language="javascript">
        alert("Complete Insert data")
        window.location="Index-cus.php"
        </script>
        ';
    }

        
    
    mysqli_close($connect);
?>