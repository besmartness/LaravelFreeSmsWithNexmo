## FOR USING THIS APP YOU HAVE TO GET 'NEXMO_KEY' AND 'NEXMO_SECRET' FROM NEXMO.COM

## THEN PASTE THEY IN .ENV FILE: 

 NEXMO_KEY=YOUR_NEXMO_KEY
 NEXMO_SECRET=YOUR_NEXMO_SECRET

## THEN DOWNLOAD VIA COMPOSER :
				"nexmo/laravel": "dev-master as 1.0",
        			"nexmo/client": "dev-master as 1.0"

## THEN RUN FOLLOWING COMMAND :
 	PHP ARTISAN VENDOR:PUBLISH

## THEN PASTE THIS ROUTE CODE
## IN YOUR ROUTES/WEB.PHP :	
                    Route::get('/sms/send/{receiver}', function(\Nexmo\Client $nexmo, $receiver){
    					$message = $nexmo->message()->send([
       					 	'title' => 'YOUR COMPANY NAME',
        					'to' => $receiver,
        					'url' => 'PASTE LINK WHATEVER YOU WANT(THIS IS OPTIONAL)',
        					'from' => '998903494310',
        					'text' => 'Free 30 sms around the world By Nexmo'
    						]);
    					Log::info('sent message: ' . $message['message-id']);
				    });
				
## NOW YOUR APP IS READY FOR USING. YOU ARE FREE TO SEND 30 SMS AROUND THE WORLD!
## PRICE LIST BELOW 
 https://www.nexmo.com/pricing
## FOR MORE INFORMATION ABOUT NEXMO API VISIT OFFICIAL SITE : 

https://developer.nexmo.com/api/sms