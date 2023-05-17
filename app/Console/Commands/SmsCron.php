<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Service;

class SmsCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute SMS Service';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $TwoDaysBefore = Carbon::now()->addDays(2);

        $Appointments = Appointment::whereDate('start_datetime',$TwoDaysBefore)->get();

        foreach($Appointments as $Appointment){

        $getCustomer = Customer::where('user_id',$Appointment->user_id)->first();
        $getService =  Service::where('id',$Appointment->service_id)->first()->serviceName;
        $receiverNumber =  $getCustomer->custPhone;
        $CustomerName = $getCustomer->custName;

        $AppDate = \Carbon\Carbon::parse($Appointment->start_datetime)->format('d M Y');
        $AppTime = \Carbon\Carbon::parse($Appointment->start_datetime)->format('h:i A');

        $message = "Dear $CustomerName,You have an Appointment for $getService on $AppDate at $AppTime. Thank you :)";
  
        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
                \Log::info("SMS Sent Successfully.");
        } catch (Exception $e) {
            \Log::info("Error: ". $e->getMessage());
        }
    }

       
    }
}
