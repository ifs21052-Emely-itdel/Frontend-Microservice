<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function convert(Request $request) {
        $video = $request->file("video");

        $client = new Client();

        // dd($video);
        
        try {
            $response = $client->post(env("API_GATEWAY")."/convert-to-audio", [
                "multipart" => [
                    [
                        "name" => "video",
                        "contents" => fopen($video->getPathname(), "r"),
                        "filename" => $video->getClientOriginalName(),
                    ]
                ]
            ]);


            $audioPath = public_path("src" . "/" . explode(".", $video->getClientOriginalName())[0] . ".mp3");

            file_put_contents($audioPath, $response->getBody());

            return response()->download($audioPath)->deleteFileAfterSend(true);

        } catch(\Exception $e) {
            return back()->withErrors(["error"=>"failed to convert video to audio"]);
        }        
    }
}
