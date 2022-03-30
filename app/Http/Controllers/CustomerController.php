<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Spec;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function getCustomers(Request $request) {
        //Example API point, returns all customers
        error_log("There was a request");
        $data = Customer::get();
        return response($data,200);
    }

    public function getRawCustomers(Request $request) {
        //Example Raw query
        $data = DB::select("SELECT * FROM customers");
        return response($data,200);
    }


    public function generateCustomer($name, $color, $number) {
        //Example how to create a new Customer with given name, color and number.
        //Terminal Command: "php artisan generateCustomer Dan green 15"
            $save = new Customer;
            $save->name = $name;
            $save->color = $color;
            $save->number = $number;
            $save->save();
            error_log('Customer created');
    }

    //You can change all the functions above, but it should not be necessary
    //Please complete the functions starting here

    //Problem 1
    public function generateCustomers($number) {
        //Write a function that generates a $number of new customers with random names from names.drycodes.com
        //The color should be randomized from "green" "red" and "yellow"
        //The number is a random number between 20 and 80
        //The terminal command will be "php artisan generateCustomers 12"
        //Remember that there are specific functions to convert a json to array or collection

        $client = new \GuzzleHttp\Client();
        $res = $client->get('http://names.drycodes.com/10?nameOptions=boy_names&separator=space')->getBody();
        
  
    }


    //Problem 2
    //--------------------
    //If you can join the two tables in one go, you don't need to fill the populateCustomers() function

    public function populateCustomers() {
        //There is a free field in customers called "planets"
        //There is table called "specs" in the database that has all the numbers ranging from 1 to 100 with a "descr" column. The column has 2 random planets
        //Populate the "planets" column of the customers with the corresponding "descr" from the "specs" database
    }

    public function getPopulatedList() {
        //Return the customers list with the "specs" filled out from the corresponding "specs" table
        $data = Customer::get();
        //$data = Spec::get();  //uncomment to see the list
        return response($data,200);
    }

    //--------------------

    //Problem 3
    public function getCustomersByName(Request $request){
        //Return a list of customers with a given name 
        //If searching for "max" (getCustomersByName("max")), it should also find "Bethoven Maximilian"
        //ignore upper/lowercase
        //return error if no one with that name
        //Bonus points: Only output a list with the name and the color, ignoring all other properties. Please add a field that shows the length of the name.
        //-->"name":"Bethoven Maximilian","color":"Yellow","name_length":"18"
        if($request->get('name') === "Max")
            return response("Not yet done",200);
    }

    //Helper function
    public function clear() {
        //Method to drop all customers in table
        //Terminal "php artisan clearCustomers"
        Customer::query()->delete();
        error_log('Dropped customers table');
    }
}