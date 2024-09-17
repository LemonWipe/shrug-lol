<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeamsBotController extends Controller
{
	public function handleMessages(Request $request)
	{
		// Get the incoming message from Teams
		$data = $request->json()->all();
		// Extract the text message sent by the user
		$message = $data['text'] ?? '';
		// Check for the "/shrug" command
		if (trim($message) === '/shrug') {
			// Respond with the shrug emoticon
			return response()->json([
				'type' => 'message',
				'text' => '¯\_(ツ)_/¯'
			]);
		}
		// Default response
		return response()->json([
			'type' => 'message',
			'text' => 'Command not recognized.'
		]);
	}
}