<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function convert(Request $request) {
        
        $image = $request->file("image");

        // dd($image->getClientOriginalExtension());

        $client = new Client();

        try {
            $response = $client->post(env("API_GATEWAY")."/compress", [
                "multipart" => [
                    [
                        "name" => "image",
                        "contents" => fopen($image->getPathname(), "r"),
                        "filename" => $image->getClientOriginalName(),
                    ]
                ]
            ]);

            $imagePath = public_path("src" . "/" . explode(".", $image->getClientOriginalName())[0] . "." . $image->getClientOriginalExtension());

            // dd($imagePath);

            file_put_contents($imagePath, $response->getBody());

            return response()->download($imagePath)->deleteFileAfterSend(true);

        } catch(\Exception $e) {
            return back()->withErrors(["error"=>"failed to convert video to audio"]);
        }        
    }
}
