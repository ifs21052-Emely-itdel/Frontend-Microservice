<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PdfController extends Controller
{
    public function convert(Request $request) {
        
        $pedef = $request->file("pedef");

        // dd($image->getClientOriginalExtension());

        $client = new Client();

        try {
            $response = $client->post(env("API_GATEWAY")."/pdf-compress", [
                "multipart" => [
                    [
                        "name" => "pdf",
                        "contents" => fopen($pedef->getPathname(), "r"),
                        "filename" => $pedef->getClientOriginalName(),
                    ]
                ]
            ]);

            $pedefPath = public_path("src" . "/" . explode(".", $pedef->getClientOriginalName())[0] . ".pdf");

            // dd($imagePath);

            file_put_contents($pedefPath, $response->getBody());

            return response()->download($pedefPath)->deleteFileAfterSend(true);

        } catch(\Exception $e) {
            return back()->withErrors(["error"=>"failed to convert video to audio"]);
        }        
    }
}
