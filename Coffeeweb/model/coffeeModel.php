<script>
        function showConfirm(id){
        var c = confirm("Are you Sure you wish to delete this item?");
        if(c)
            window.location = "OverView.php?delete=" + id;
     
    }
</script>
<?php
    class coffeeModel 
    {
        
        function ConnectionSql($sql)
        {
            $conn = mysqli_connect("localhost","root","","coffeedb");
            $result = mysqli_query($conn, $sql);
        
             $conn->close();
            return $result;
        }
        
        function QuaryTable()
        {
            $sql = "";
            if(isset($_POST['Search']))
            {
                 $types = $_POST['type'];
                  if($types == '' || $types == 'All')
                 {
                      $sql = "SELECT * FROM coffee";
                 }
                 else
                 {
                      $sql="SELECT * FROM coffee WHERE type = '$types'";
                   }
            }
            else
            {
                $sql = "SELECT * FROM coffee";
            }
            return $sql;
        }
        
        function TableCreation($result)
        {
             $i = array();
             $Option = "";
             while($row = mysqli_fetch_assoc($result))
             {
                 $info = "<form action ='' method =''><table class = 'coffeeTable'
                          <tr><th rowspan= '6' width = '150px' ><img runat = 'server' src = ".$row['image']." /></th>
                          <th width = '75px' >Name: </th><td>".$row['name']."</td></tr>
                
                          <tr><th>Type: </th><td>".$row['type']."</td></tr>
                            
                          <tr><th>Price: </th><td>".$row['price']."</td></tr>                        
                        
                          <tr><th>Roast: </th><td>".$row['roast']."</td></tr>                        
                        
                          <tr><th>Origin: </th><td>".$row['country']."</td></tr>
                        
                          <tr><td colspan= '2' >".$row['review']."</td></tr></table></form>";
                 array_push($i, $info);
             }
            $Option = $Option.implode($Option, $i);
             return $Option;
    
         }
        
        function OptionCreation($result)
        {
             $i = array();
             $Option = "";
            while($row = mysqli_fetch_assoc($result))
            {
                  $info = "<option value = '".$row['type']."'style='color:#ff7700;'>".$row['type']."</option value>";
                  array_push($i, $info);
            }
             $Option = $Option.implode($Option, $i);
             return $Option;
        }
        
        function GetImages()
        {
                 $i = "";
                $pic = "";
               $handle = opendir("Images/Coffee");
              while($image = readdir($handle))
               {
                     $images[] = $image;  
               }
               closedir($handle);
                $imageArray = array();
                 foreach($images as $image)
                {
                       $i = "<option value ='$image'style='color:#ff7700;'>Images/Coffee/$image</option>";
                        if(strlen($image) > 2)
                        {
                             array_push($imageArray, $i);
                         }
                }
                  $result = implode($pic, $imageArray);
                  return $result;
         }
         
        function InsertCoffee()
         {
             if(isset($_POST['Submit']))
            {
                $name = $_POST['txtName'];
                $type = $_POST['ddlType'];
                $price = $_POST['txtPrice'];
                $roast = $_POST['txtRoast'];
                $country = $_POST['txtCountry'];
                $image = "Images/Coffee/".$_POST['ddlImage'];
                $review = $_POST['txtReview'];
                $sql= "INSERT INTO coffee
                           (name,type,price,roast,country,image,review) VALUES
                           ('$name','$type','$price','$roast','$country','$image','$review')";
                if($name!= '' && $type!= '' && $price!= '' && $roast!= '' && $country!= '' && $image!= '' && $review!= '')
                {    
                    $this->ConnectionSql($sql);
                    echo "Coffee Added Successfully.";
                }

                else 
                {
                    echo "Please Insert all the Values";
                }
            }
         }
         
        function OverViewDate($result)
        {
            $i = array();
            $data="";
            while($row = mysqli_fetch_assoc($result))
            {   
                $id =$row['id'];
                $info="<tr>
                <td><a href='CoffeeUpdate.php?update=$id'>Update</a></td>
                <td><a href='#' onclick='showConfirm($id)'>Delete</a></td>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['type']."</td>
                <td>".$row['price']."</td>                        
                <td>".$row['roast']."</td>                        
                <td>".$row['country']."</td>
                </tr>";
                array_push($i,$info);
            }
            $data = $data.implode("", $i);
            return $data;
        }
        
        function UpdateCoffee()
        {
            if(isset($_GET['update']))
            {
                $id = $_GET['update'];
                $name = $_POST['txtName'];
                $type = $_POST['ddlType'];
                $price = $_POST['txtPrice'];
                $roast = $_POST['txtRoast'];
                $country = $_POST['txtCountry'];
                $image = "Images/Coffee/".$_POST['ddlImage'];
                $review = $_POST['txtReview'];
                $sql= "UPDATE coffee SET 
                            name='$name',type='$type',price='$price',roast='$roast',country='$country',image='$image',review='$review' WHERE id = '$id'";
                if($name!= '' && $type!= '' && $price!= '' && $roast!= '' && $country!= '' && $image!= '' && $review!= '')
                {
                    $this->ConnectionSql($sql);
                    echo "Coffee Updated Successfully";
                }
                else 
                {
                    echo "Please Insert all the Values";
                }
            }
            return $sql;
        }
        
        function PreUpdateData()
        {
            $id = $_GET['update'];
            $result = $this->ConnectionSql("SELECT * FROM coffee WHERE id = '$id'");
            
            $data="";
            while($row = mysqli_fetch_assoc($result))
            {   
                
                $data
                        ="<label for='name'>Name: </label>
                       <input type ='text' class='InputField' name='txtName' value='".$row['name']."'/><br/>
                       
                      <label for='type'>Type: </label>
                      <select name='ddlType' class='InputField'>"
                        . "<option value='".$row['type']."'>".$row['type']."</option>"
                       .$this->OptionCreation($this->ConnectionSql
                               ("SELECT DISTINCT type FROM coffee WHERE type != '".$row['type']."' "))."
                         </select><br/>
                         
                            <label for='price'>Price: </label>
                          <input type ='text' class='InputField' name='txtPrice' value='".$row['price']."'/><br/>
                          
                        <label for='Roast'>Roast: </label>
                         <select class='InputField' name='txtRoast'>
                         <option value='".$row['roast']."'>".$row['roast']."</option>
                         <option value='Light'>Light</option>
                         <option value='Medium'>Medium</option>
                         <option value='Dark'>Dark</option>
                         <option value='Extra Dark'>Extra Dark</option>
                        </select><br/>
                         
                            <label for='country'>Country: </label>
                          <input type ='text' class='InputField' name='txtCountry' value='".$row['country']."'/><br/>
                          
                            <label for='image'>Image: </label>
                          <select class='InputField' name='ddlImage'>
                              <option value='".$row['image']."'>".$row['image']."</option>
                          ". $this->GetImages()."</select><br/>
                              
                            <label for='review'>Review: </label>
                          <textarea cols='70' rows='12' name='txtReview' >".$row['review']."</textarea><br/>"."<tr>";
             }
             return $data;
        }
        
        function DeleteCoffee($id)
        {
            $sql ="DELETE FROM `coffee` WHERE id = $id";
            $this->ConnectionSql($sql);
        }
    }

