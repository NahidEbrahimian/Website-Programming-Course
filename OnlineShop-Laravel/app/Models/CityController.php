<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function get_all()
    {
        $cities = City::all();
        return view("admin.cities", [
            "cities" => $cities
        ]);
    }
    function add_get()
    {
        return view("admin.add_city");
    }
    function add_post(Request $request)
    {
        $new_city = new City();
        $new_city->name = $request["name"];
        $new_city->save();

        return redirect("/admin/cities");
    }

    function edit_get($id)
    {
        $city = City::find($id);

        return view("admin.edit_city", [
             "city"=>$city
        ]);
    }
    function edit_post(Request $request)
    {
        $city = City::find($request["id"]);

        $city->name = $request["name"];
        $city->update();

        return redirect("/admin/cities");
    }
    function delete($id)
    {
        $city = City::find($id);
        if(!$city)
        {
            $message = "پیدا نشد";
            $message_type = "danger";
        }
        else
        {
            $city->delete();
            $message = "با موفقیت حذف شد";
            $message_type = "success";
        }
        
        return redirect("admin/cities")->with([
            "message" => $message,
            "message_type" => $message_type,
        ]);
    }
}
