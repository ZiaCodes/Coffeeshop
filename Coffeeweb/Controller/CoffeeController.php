<?php
require ("model/coffeeModel.php");
class CoffeeController 
{
    function DropDown()
    {
        $coffeeModel = new coffeeModel;
        $dropdown = "<form action = '' method = 'POST' width = '200px'>
          Please select a type:
          <select name = 'type'><option value = 'All'>All</option value>"
        .$coffeeModel->OptionCreation($coffeeModel->ConnectionSql("SELECT DISTINCT type FROM coffee"))."
          </select><input type = 'submit' value = 'Search 'name = 'Search'/>
          </form>";
        return $dropdown;
    }
    
    function InsertCoffee()
    {
        $coffeeModel = new coffeeModel;
        $addCoffee = "<form action='' method='POST'>
                     <fieldset>
                     <legend>Add a New Coffee</legend>
                       <label for='name'>Name: </label>
                       <input type ='text' class='InputField' id='input-1' name='txtName'autocomplete='off'/><br/>
                       
                      <label for='type'>Type: </label>
                      <select class='InputField' id='input-2' name='ddlType'autocomplete='off'>"
                       .$coffeeModel->OptionCreation($coffeeModel->ConnectionSql("SELECT DISTINCT type FROM coffee"))."
                         </select><br/>
                         
                            <label for='price'>Price: </label>
                          <input type ='text' class='InputField' id='input-3' name='txtPrice' autocomplete='off' ><br/>
                          
                        <label for='Roast'>Roast: </label>
                         <select class='InputField' id='input-4' name='txtRoast'/>
                         <option value='Light'style='color:#ff7700;'>Light</option>
                         <option value='Medium'style='color:#ff7700;'>Medium</option>
                         <option value='Dark'style='color:#ff7700;'>Dark</option>
                         <option value='Extra Dark'style='color:#ff7700;'>Extra Dark</option>
                        </select><br/>
                         
                            <label for='country'>Country: </label>
                          <input type ='text' class='InputField' id='input-5' name='txtCountry'autocomplete='off' /><br/>
                          
                            <label for='image'>Image: </label>
                          <select class='InputField' id='input-6' name='ddlImage'>
                          ". $coffeeModel->GetImages()."</select><br/>
                               
                            <label for='review'>Review: </label>
                          <textarea cols='70' rows='12' id='input-7' name='txtReview'></textarea><br/>
                          
                            <input type='submit' value = 'Insert' name='Submit' class='btn-primary'/></fieldset></form>";
        $coffeeModel->InsertCoffee();
               return $addCoffee;
    }
    
    function OverView()
    {
        $coffeeModel = new coffeeModel;
        $OverV = "<table class ='overviewtable'>
                <tr>
                <td></td>
                <td></td>
                <td><b>Id</b></td>
                <td><b>Name</b></td>
                <td><b>Type</b></td>
                <td><b>Price</b></td>
                <td><b>Roast</b></td>
                <td><b>Country</b></td>
                </tr>".$coffeeModel->OverViewDate($coffeeModel->ConnectionSql("SELECT * FROM coffee"));
        $OverV = $OverV."</table>";
        return $OverV;
    }
    
    function Update()
    {
        $coffeeModel = new coffeeModel;
        $addCoffee = "<form action='' method='POST'>
                     <fieldset>
                     <legend>Update Coffee</legend>"
                       .$coffeeModel->PreUpdateData().
                        "<input type='submit' value = 'Update' name='Submit'/></fieldset></form>";
        if(isset($_POST['Submit']))
        {
            $coffeeModel->UpdateCoffee();
        }
        return $addCoffee;
    }
    
    function Delete($id)
    {
        $coffeeModel = new coffeeModel;
        $coffeeModel->DeleteCoffee($id);
    }
}
